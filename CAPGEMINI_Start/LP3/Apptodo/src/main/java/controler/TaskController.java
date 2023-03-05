/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package controler;

import assets.ConnectionFactory;
import com.mysql.jdbc.ResultSetImpl;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.SQLException;
import java.sql.Date;
import java.sql.ResultSet;
import java.util.ArrayList;
import java.util.List;
import model.Tasks;
/**
 *
 * @author icsalgado
 */
public class TaskController {
    public void save(Tasks tasks){
        
        String sql = "INSERT INTO tasks (idProject,"
                + "name,"
                + "description,"
                + "completed,"
                + "notes,"
                + "deadline,"
                + "createdAt,"
                + "updatedAt) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        
        Connection connection = null;
        PreparedStatement statement = null;
        
        try {
            
            connection = ConnectionFactory.getConnection();
            statement = connection.prepareStatement(sql);
            
            statement.setInt(1, tasks.getIdProject());
            statement.setString(2, tasks.getName());
            statement.setString(3, tasks.getDescription());
            statement.setBoolean(4, tasks.isCompleted());
            statement.setString(5, tasks.getNotes());
            statement.setDate(6, new Date(tasks.getDeadline().getTime()));
            statement.setDate(7, new Date(tasks.getCreatedAt().getTime()));
            statement.setDate(8, new Date(tasks.getUpdatedAt().getTime()));
            statement.execute();
            
        } catch (Exception ex) {
            
            throw new RuntimeException("Erro ao salvar a tarefa "
                    + ex.getMessage(), ex);
            
        } finally {
            
            ConnectionFactory.closeConnection((com.mysql.jdbc.Connection) connection, statement);
            
        }
        
    }
    
    public void update(Tasks tasks){
        
        String sql = "UPDATE tasks SET"
                + "idProject = ?, "
                + "name = ?, "
                + "description = ?, "
                + "notes = ?, "
                + "completed = ?, "
                + "deadline = ?, "
                + "createdAt = ?, "
                + "updatedAt = ?, "
                + "WHERE id = ?";
        
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
            statement.setInt(9, tasks.getId());
            statement.execute();
            
        } catch (Exception ex) {
            
            throw new RuntimeException("Erro ao atualizar a tarefa "
                    + ex.getMessage(), ex);
            
        }
        
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
        String sql = "SELECT * FROM tasks WHERE idProject = ?";
        
        Connection connection = null;
        PreparedStatement statement = null;
        ResultSet resultSet = null;
        
        List<Tasks> tasks = new ArrayList<>();
        
        try {
            
            connection = ConnectionFactory.getConnection();
            statement = connection.prepareStatement(sql);
            statement.setInt(1, idProject);
            resultSet = statement.executeQuery();
            
            while(resultSet.next()){
                
                Tasks task = new Tasks();
                
                task.setId(resultSet.getInt("id"));
                task.setIdProject(resultSet.getInt("idProject"));
                task.setName(resultSet.getString("name"));
                task.setDescription(resultSet.getString("description"));
                task.setName(resultSet.getString("notes"));
                task.setIsCompleted(resultSet.getBoolean("completed"));
                task.setDeadline(resultSet.getDate("deadline"));
                task.setCreatedAt(resultSet.getDate("createdAt"));
                task.setUpdatedAt(resultSet.getDate("updatedAt"));
                
                tasks.add(task);
                
            }
            
        } catch (Exception ex) {
            
            throw new RuntimeException("Erro ao inserir a tarefa"
                    + ex.getMessage(), ex);
            
        } finally {
            
            ConnectionFactory.closeConnection((com.mysql.jdbc.Connection) connection, statement, resultSet);
            
        } 
        
        return tasks;
    }
}
