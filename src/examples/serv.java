package examples;

import java.io.IOException;
import java.io.PrintWriter;

import java.sql.Connection;
import java.sql.DatabaseMetaData;
import java.sql.Driver;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;


import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.*;

/**
 * Servlet implementation class jdbcExample
 */
@WebServlet("/serv")
public class serv extends HttpServlet 
{
// Create a new user account "web4640" -- don't touch "root" account
// edit privileges, change password tab, assign password to the user ("pwd4640")
// be sure to refresh under title phpmyadmin at top-left corner   
   
   String msg = "";
   
   public void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException 
   {
      response.setContentType("text/html");
      PrintWriter out = response.getWriter();
      HttpSession session = request.getSession(); 
      String n=request.getParameter("userName"); 
      session.setAttribute("uname",n); 
      
      String title = "Have a textbook you want to get rid of?";
      out.println("<html>\n" + 
                  "<head><title>" + title + "</title></head>\n" +
    		      "<body>\n" + 
                  "  <h1 align=\"center\">" + title + "</h1>\n");
      out.println("  <center>");
      out.println("  <form  method=\"post\">");      
      out.println("     <input type=\"text\" name=\"Textbook Name\" size=\"15\" maxLength=\"20\">");
      out.println("     <input type=\"number\" name=\"Price\" size=\"15\" maxLength=\"20\">");
      out.println("     <button type=\"submit\" name=\"btn\" value=\"insert\" />Submit Textbook</button>");
      out.println("  </form>");
      out.println("  Confirmation : " + msg);
      out.println("</body>");
      out.println("</html>");    
   }   

   
   protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException 
   {	  
      response.setContentType("text/html");
      PrintWriter out = response.getWriter();
      
      String action = request.getParameter("btn");  
      
      msg = "Congrats! You just submitted " + request.getParameter("Textbook Name") + " for $" + request.getParameter("Price"); 
      

      doGet(request, response);      // redraw the screen
   }
    
   
   
}