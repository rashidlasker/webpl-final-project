<?php
//   include 'textbooks_db_connection.php';
//   if($_SERVER["REQUEST_METHOD"] == "POST") {
//      $query = mysql_query("SELECT * FROM user_login_info where Username = '$_POST[username]' AND Password = '$_POST[password]'");
//      $row = mysql_fetch_array($query);
//      if(!empty($row['Username']) AND !empty($row['Password'])) {
//        //$_SESSION['Username'] = $row['Password'];
//        echo "SUCCESSFULLY LOGIN TO USER PROFILE ...";
//        header('Location: HTTP://localhost/textbooks/index.html');
//      } else {
//        echo "Not Logged in; Enter Username and Password";
//      }
//    }
?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <nav id="navbar">
            <h1><a href="index.html">UVA Free and For Sale</a></h1><div class="wrap">
               <div class="search">
                  <input type="text" class="searchTerm" placeholder="What are you looking for?"><button type="submit" class="searchButton" style="height: 32px">
                    <i class="fa fa-search"></i>
                 </button>
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

            <!-- This is the part of the page where the content generally change -->
            <div class="login">
            <h1 align="center">Login</h1>
            <form action="form-handler.php" method="post">
                <input type="text" name="u" placeholder="Email" required="required" />
                <input type="password" name="p" placeholder="Password" required="required" />
                <div class="wrapper">
                    <button type="submit" class="btn btn-primary btn-block btn-large">Submit</button>
                </div>
            </form>    
        
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
