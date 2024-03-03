let hora = 20;

//Estruturas de decisão
if(hora < 18){
    console.log("Hora menor que 18");
}else if(hora > 18){
    console.log("Hora maior que 18");
}else{
    console.log("São 18 horas");
}

hora == 18 ? console.log("São 18 horas") : console.log("Não são 18 horas");

switch(hora){
    case 10:
    case 20:
        console.log("São 10 ou 20");
        break;
    case 18:
        console.log("São 18 horas");
        break;
    default:
        console.log("Não são 18 horas");
}
//Estruturas de repetição

for(let i = 0; i < 10; i++){//usado o let para que a variavel exista apenas dentro do laço
    
    if(i == 5){
        continue; //vai pular o numero 5
    }
    console.log(i);
}

var j = 0;
while(j < 10){
    if(j === 5){
        break;// sai do laço
    }
    console.log(j);
    j++;
}
j = 0;
do{
    console.log(j);
    j++;
}while(j < 10); //vai mostar o 10 por que mesmo falsa a condição depois do 9 ele executa o do

