
package classes;

public class Pessoa {
    
    //atributos
    /* esse formato quebra o principio de encapsulamento por que a variavel fica acessivel em qualquer lugar para ser alterada
    float peso;
    float altura;
    */
    
    private float peso;//modificador de acesso privado 
    private float altura;
    
    //metodo construtor, o nome sempre deve ser o mesmo da classe e é executado quando instancia um objeto
    public Pessoa(float peso, float altura){
        /*
        System.out.println("Construtor");
        */
        this.peso = peso;//this para acessar o atributo peso do objeto
        this.altura = altura;
    }
    
    //metodos
    public float calcularIMC(){
        float imc = peso / (altura*altura);
        return imc;
    }
    
    //metodos acessores para cumprir o principio do encapsulamento
    public void setPeso(float peso){
        //podem ser feitas validações dentro desse bloco
        this.peso = peso;
    }
    public float getPeso(){
        return peso;
    }
    public void setAltura(float altura){
        //podem ser feitas validações dentro desse bloco
        this.altura = altura;
    }
    public float getAltura(){
        return altura;
    }
    
    
    
}
