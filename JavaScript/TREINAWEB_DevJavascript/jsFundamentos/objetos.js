let lapis = {
    cor: 'preto',//propriedade
    tamanho: 15,
    escrever(){//metodo
        console.log('escrevendo');
    },
    apagar(){
        console.log('apagando');
    }
};

console.log(lapis.cor);
lapis.escrever();
lapis.apagar();

lapis.cor = 'branco';

console.log(lapis['cor']);

lapis.corDaBorracha = 'rosa'; //adiciona a propriedade

console.log(lapis.corDaBorracha);

delete lapis.tamanho;

console.log(lapis);

console.log(Object.keys(lapis));//nome das propriedades

console.log(JSON.stringify(lapis));//transforma em string não aceita funções nem datas, apenas tipos primitivos

console.log(JSON.parse('{"cor":"branco","corDaBorracha":"rosa"}'));//transforma a string em objeto

let {cor, corDaBorracha} = lapis; //cria variaveis que vão receber os parâmetros do objeto

console.log(cor, corDaBorracha);

//symbols

let meuSymbol = Symbol("cpf");


console.log(meuSymbol);

let a = {};
let b = ...a;
console.log(a === b);