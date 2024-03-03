import scrapy


class QuotesViewStateSpider(scrapy.Spider):
    name = "quotes_viewstate"
    allowed_domains = ["quotes.toscrape.com"]
    start_urls = ["http://quotes.toscrape.com/search.aspx"]
    
    def parse_author_tags(self, response, author):
        tags = response.css("#tag option::attr(value)").getall()
        view_state = response.css("#__VIEWSTATE::attr(value)").get()
        for tag in tags:
            yield scrapy.FormRequest(
                response.urljoin(response.css("form::attr(action)").get()),
                callback=self.parse_tag_results,
                formdata={
                    "__VIEWSTATE": view_state,
                    "author": author,
                    "tag": tag,
                },
            )
    def parse_tag_results(self, response):
        quotes = response.css(".quote")
        for quote in quotes:
            yield {
                "quote": quote.css(".content::text").get(),
                "author": quote.css(".author::text").get(),
                "tag": quote.css(".tag::text").get(),
            }