/*
Calcular a media entra 3 notas de um aluno e classificar entre

media < 5 -reprovado
media entre 5 e 7 -recuperaçao
media acima de 7 -aprovado
*/

let nota1 = 5;
let nota2 = 4.6;
let nota3 = 5;

let media = (nota1+nota2+nota3)/3;

if(media > 7){
    console.log("Aluno aprovado com media: ", media.toFixed(2));
}else if (media >= 5 && media <=7){
    console.log("Aluno em recuperação com media: ", media.toFixed(2));
}else{
    console.log("Aluno reprovado com media: ", media.toFixed(2));
}