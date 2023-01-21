let lapis = {
    cor: 'preto',
    tamanho: 15,
    escrever(){
        console.log('escrevendo');
    },
    apagar(){
        console.log('apagando');
    }
};

console.log(lapis.cor);
console.log(lapis.escrever());

lapis.corDaBorracha = 'rosa';