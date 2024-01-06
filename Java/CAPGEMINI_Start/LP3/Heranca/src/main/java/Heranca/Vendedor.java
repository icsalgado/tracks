
package Heranca;

import java.util.Date;

public class Vendedor extends Funcionario { //extends funcionario herda os atributos e metodos de Funcionario
    
    /*sem herança
    private String nome;
    private String cpf;
    private Date dataNascimento;
    private float salario;
    */
    
    private int totalItensVendidos;
    private float comissaoPorItem;
    
    //construtor
    public Vendedor(){
        super();//quando cria o vendedor dizendo que já é um Funcionario
    }
    
    public float calcularSalario(){
        
        return super.getSalario() + (this.comissaoPorItem * this.totalItensVendidos);//chamar um metodo do Funcionario
    }
    
    
    
    /*metodos acessores sem herança

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public String getCpf() {
        return cpf;
    }

    public void setCpf(String cpf) {
        this.cpf = cpf;
    }

    public Date getDataNascimento() {
        return dataNascimento;
    }

    public void setDataNascimento(Date dataNascimento) {
        this.dataNascimento = dataNascimento;
    }

    public float getSalario() {
        return salario;
    }

    public void setSalario(float salario) {
        this.salario = salario;
    }
    */

    public int getTotalItensVendidos() {
        return totalItensVendidos;
    }

    public void setTotalItensVendidos(int totalItensVendidos) {
        this.totalItensVendidos = totalItensVendidos;
    }

    public float getComissaoPorItem() {
        return comissaoPorItem;
    }

    public void setComissaoPorItem(float comissaoPorItem) {
        this.comissaoPorItem = comissaoPorItem;
    }
    
}
