console.log(Math.floor(5.5)); //metodo pronto para arredondar para baixo

function tabuada(){
    for(var i = 1; i <=3 ; i++){
        for(var j = 1; j <= 10; j++){
            console.log(`${i} x ${j} = ${i*j}`);
        }
    }
}

function tabuadaNova(numero){
    for(var j = 1; j <= 10; j++){
        console.log(`${numero} x ${j} = ${numero*j}`);
    }
}

let funcaoAnonima = function (numero){
    for(var j = 1; j <= 10; j++){
        console.log(`${numero} x ${j} = ${numero*j}`);
    }
}

let minhaFuncao = () => {
    console.log("Arrow function");
}

tabuada();
tabuadaNova(5);

funcaoAnonima(7);

minhaFuncao();