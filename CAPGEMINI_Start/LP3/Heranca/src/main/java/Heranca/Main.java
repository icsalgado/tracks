
package Heranca;

import java.util.Date;

public class Main {

    public static void main(String[] args) {
        Vendedor v = new Vendedor();
        
        v.setNome("Marcio");
        v.setSalario(1000.0f);
        v.setCpf("1111111111");
        v.setDataNascimento(new Date());
        v.setComissaoPorItem(10.0f);
        v.setTotalItensVendidos(10);
        
        System.out.println("O salario do vendedor: " + v.calcularSalario());
        
        Motorista m = new Motorista();// não está com herança
        
        
        
        
    }
    
}
