/*
Calculo IMC

imc = peso/(altura * altura)

abaixo de 18.5 -abaixo do peso
entre 18.5 e 24 -peso normal
entre 25 e 30 -acima do peso
entre 31 e 40 -obeso
acima de 40 -obesidade grave

 */

let peso = 87.5;
let altura = 1.72;
let imc = peso / (altura*altura);

if(imc < 18.5){
    console.log("Abaixo do peso");
}else if(imc >= 18.5 && imc < 25){
    console.log("Peso ideal");
}else if(imc >= 25 && imc < 30){
    console.log("Acima do peso");
}else if(imc >= 30 && imc <= 40){
    console.log("Obeso");
}else {
    console.log("Obesidade grave");
}