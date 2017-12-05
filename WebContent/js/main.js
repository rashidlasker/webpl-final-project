var loggedin = false;

if(loggedin){
    document.getElementById("navbuttons").innerHTML = 
        '<button class="navbutton"><a href="sell.php" style="text-decoration: none">ell</a></button>\n' +
        '<button class="navbutton">Account</button>\n' +
        '<button class="navbutton"><a href="about.html" style="text-decoration: none">About Us</a></button>\n'+
        '<button class="navbutton" href="#">Logout</button>\n';
}else{
    document.getElementById("navbuttons").innerHTML = 
        '<button class="navbutton"><a href="sell.php" style="text-decoration: none">Sell</a></button>\n' +
        '<button class="navbutton"><a href="about.html" style="text-decoration: none">About Us</a></button>\n'+
        '<button class="navbutton"><a href="login.php" style="text-decoration: none">Login</a></button>\n';
}