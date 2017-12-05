<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<%@page  import =  "java.util.Date"%>
<!-- Bean class must be in .../classes/examples/ -->
<%@ page import="examples.*" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head> 
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>UVA F&Fs</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="manifest" href="site.webmanifest">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <nav id="navbar">
            <h1><a href="index.php" >UVA Free and For Sale</a></h1><div class="wrap">
               <div class="search">
                    <label for = "search">
                        <input type="text" class="searchTerm" placeholder="What are you looking for?"><button type="submit" class="searchButton" style="height: 32px">
                        <a href="./search.php"><i class="fa fa-search"></i></a>
                        </button>
                    </label>
               </div>
            </div><div id="navbuttons">
            </div>
        </nav>
        <aside class="left-container">
            <div class="btn-group">
                <button>All Items</button>
                <button>Books</button>
                <button>Furniture</button>
                <button>Clothing</button>
                <button>Miscellaneous</button>
                <button>Contact Us</button>
            </div>
        </aside><section class="right-container">
        	<%! Date rightNow = new Date(); %>
        	<jsp:useBean id="tb" class="examples.Textbook" scope="session" />
        	<jsp:setProperty name="tb" property="book" value="Mastering Macroeconomics"/>
        	<jsp:setProperty name="tb" property="owner" value="571-555-4944"/>
        	<jsp:setProperty name="tb" property="typer" value="ECON"/>
           <div class="card" style="margin-top:120px;">
           	<img src="https://images-na.ssl-images-amazon.com/images/I/41cXTXhiabL._SX366_BO1,204,203,200_.jpg">
           	<div class="card-info"> 
                <div class="namefield">Name: <jsp:getProperty name="tb" property="book"/></div>
                <div class="contactfield">Phone Number: <jsp:getProperty name="tb" property="owner"/></div>
                <div class="bookfield">Textbook Type: <jsp:getProperty name="tb" property="typer"/></div>
           		<a href="./requestComplete.jsp"><button class="req">Request</button></a>
            </div>
            <% session.setAttribute("date", rightNow.toString()); %>
           </div>  
        
        </section>
        
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    </body>
</html>