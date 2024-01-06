import carro

uno_vermelho = carro.Carro("Vermelho", 4, "Flex", 1.0, 0, False)  # instanciada a classe



uno_vermelho.poweron()

help(uno_vermelho.refuel)#DocString

uno_vermelho.refuel(20)
uno_vermelho.refuel(10)
print(f"Quantidade de combustivel: {uno_vermelho.fuel_tank} litros")