class Carro(): #criada a classe carro
    """Essa é a classe carro e é utilizada para instanciar novos carros"""
    def __init__(self, color, doors, fuel, hp, fuel_tank, on): #atributos
        self.color = color
        self.doors = doors
        self.fuel = fuel
        self.hp = hp
        self.fuel_tank = fuel_tank
        self.on = on

    #metodos
    def refuel(self, amount):
        """Recebe a quantidade de combustivel e incrementa no tanque/90"""
        self.fuel_tank += amount

    def poweron(self):
        if self.on:
            print("Carro ligado")
        else:
            print("Ligando carro")
            self.on = True

    def poweroff(self):
        if self.on == False:
            print("Carro desligado")
        else:
            self.on = False