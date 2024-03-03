#Verifica se na lista de números inteiros aparecem dois consecutivos

def has22(num):
    return '2, 2' in str(num)

print(has22([1, 2, 2]))
print(has22([1, 2, 1, 2]))
print(has22([2, 1, 2]))
