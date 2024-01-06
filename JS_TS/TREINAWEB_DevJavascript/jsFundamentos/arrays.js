let precos = [2, 4, 5];

precos.push(1);//insere no final do array
precos.unshift(3);//insere no inicio do array
console.log(precos);
precos.pop();//remove o ultimo
precos.shift();//remove o primeiro
precos.splice(0, 0, 'a');//apaga posição, quantidade, insere na posição
precos.splice(1, 1);//apaga posição, quantidade


console.log(precos);
console.log(precos.length);

let [valor1, valor2] = precos;
console.log("Forma de declarar variavel", valor1, valor2);

let [preco1, ...preco2] = precos; //spread operator

console.log(preco2);

let array = [...preco2];

console.log(array);

let palavra = 'treinaweb';

console.log(...palavra)

let numeros = [];
for(let i = 0; i <= 5; i++){
   numeros.push(i);
}
numeros.pop();
numeros.shift();
numeros.unshift(0);
numeros.splice(0, 1);
console.log(numeros);

let numeros2 = [];
for(let i = 1; i <= 3; i++){
   numeros2.push(i ** i);
}
console.log(numeros2)