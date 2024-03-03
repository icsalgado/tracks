
#Seja um n não negativo, retorna True se o numero esta pelo menos dois de um múltiplo de dez. Use a função
def near_ten(n):
    #return n % 10 <= 2 or n % 10 >= 8

    #return str(n)[-1] <= '2' or str(n)[-1] >= "8"
    
    return str(n)[-1] in "01289"

print (near_ten(12))
print (near_ten(17))
print (near_ten(19))
