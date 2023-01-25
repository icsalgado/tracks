/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package controler;

import assets.ConnectionFactory;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.SQLException;
import java.sql.Date;
import java.util.List;
import model.Tasks;
/**
 *
 * @author icsalgado
 */
public class TaskController {
    public void save(Tasks tasks){
        
        String sql = "INSERT INTO tasks (idProject, "
                + "name, "
                + "description, "
                + "notes, completed, "
                + "notes, "
                + "deadline, "
                + "createdAt,"
                + "updatedAt) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        
        Connection connection = null;
        PreparedStatement statement = null;
        
        try {
            
            connection = ConnectionFactory.getConnection();
            statement = connection.prepareStatement(sql);
            
            statement.setInt(1, tasks.getIdProject());
            statement.setString(2, tasks.getName());
            statement.setString(2, tasks.getDescription());
            statement.setBoolean(4, tasks.isCompleted());
            statement.setString(5, tasks.getNotes());
            statement.setDate(6, new Date(tasks.getDeadline().getTime()));
            statement.setDate(7, new Date(tasks.getCreatedAt().getTime()));
            statement.setDate(8, new Date(tasks.getUpdatedAt().getTime()));
            statement.execute();
            
        } catch (Exception ex) {
            
            throw new RuntimeException("Erro ao salvar a tarefa"
                    + ex.getMessage(), ex);
            
        } finally {
            
            ConnectionFactory.closeConnection((com.mysql.jdbc.Connection) connection, statement);
            
        }
        
    }
    
    public void update(Tasks tasks){
        
    }
    public void removeById(int tasksId) throws SQLException{
        
        String sql = "DELETE FROM tasks WHERE id = ?";//? vai receber o statement
        
        Connection connection = null;
        PreparedStatement statement = null;
        
        try {
            
            connection = ConnectionFactory.getConnection();
            statement = connection.prepareStatement(sql);
            statement.setInt(1, tasksId);//manda o statement para ?
            statement.execute();
            
        } catch (Exception ex) {
            
            throw new RuntimeException("Erro ao deletar a tarefa");
            
        } finally {
            
            ConnectionFactory.closeConnection((com.mysql.jdbc.Connection) connection, statement);
            
        }  
       
    }
    public List<Tasks> getAll(int idProject){
        return null;
    }
}
