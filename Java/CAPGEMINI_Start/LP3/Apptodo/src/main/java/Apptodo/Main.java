/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package Apptodo;

import assets.ConnectionFactory;
import controler.ProjectController;
import java.sql.Connection;
import model.Project;

/**
 *
 * @author icsalgado
 */
public class Main {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        
        
//        Connection c = (Connection) ConnectionFactory.getConnection();
//        
//        
//        ConnectionFactory.closeConnection((com.mysql.jdbc.Connection) c);

        ProjectController projectController = new ProjectController();
        
        Project project = new Project();
        project.setName("Projeto Teste");
        project.setDescription("Teste");
        projectController.save(project);
        
    }
    
}
