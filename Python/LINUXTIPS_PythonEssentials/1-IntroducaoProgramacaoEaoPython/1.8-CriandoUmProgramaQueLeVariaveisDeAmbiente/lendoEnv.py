#! python3

"""
Lendo variaveis de ambiente.

Comentario de documentacao, Dependendo da lingua configurada no ambiente, 
o programa exibe a mensagem correspondente

como usar:
    tenha a variavel LANG configurada
    export LANG=pt_BR

execucao:
    python3 script.py
    ./script.py

Como saber a sua linguagem:
    env | grep LANG

Como executar em outra linguagem:
    LANG=it_IT python3 script.py
"""

__version__ = "0.0.1"
__author__ = "Iuri Salgado"
__license__ = "Unilicense"

# a palavra Dunder se refere aos dois underlines __

# bloco principal do script python, está em desuso mas pode aparecer if __name__ == "__main__":

import os
# os permite ler variaveis de ambiente

message = "Olá, mundo!"
# Forma estatica de informar a linguagem current_lang = "pt_BR"
current_lang = os.getenv("LANG")[:5] #fatiamento até a posição 5

if current_lang == "en_US":
    message = "Hello, World!"
elif current_lang == "it_IT":
    message = "Ciao, Mondo!"

print(message)







