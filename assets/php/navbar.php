<script >
    function callCorrectPage(){
        if(document.getElementById("id01").getElementsByClassName("vanish")[0].getElementsByTagName("a")[0].textContent==="Sign Up"){
            $(createRequiredPage("inline-block",true,"Sign Up","Login"));
        }else{
            $(createRequiredPage("none",false,"Login","Sign Up"));
        }
    } 
    function createRequiredPage(display,required,title,change){
        var y = document.getElementById("id01");
        var x = y.getElementsByClassName("forSignup");
        var z = y.getElementsByClassName("notrequired");
        var heading = y.getElementsByTagName("h1");
        // console.log(heading[0]);
        heading[0].innerHTML = title;
        y.getElementsByClassName("vanish")[0].getElementsByTagName("a")[0].textContent=change;
        for(var i = 0;i<x.length;++i){
            x[i].style.display = display;
        }
        for(var i = 0;i<z.length;++i){
            z[i].required = required;
        }
        var b = document.getElementById("loginbutton");
        b.innerHTML = title;
    }
    function cancelButton(){
        if(document.getElementById("id01").getElementsByClassName("vanish")[0].getElementsByTagName("a")[0].textContent!=="Sign Up"){
                $(createRequiredPage("none",false,"Login","Sign Up"));
        }
        document.getElementById('id01').style.display='none'
        incorrectCredentials("none");
    }
    function incorrectCredentials(display){
        var x = document.getElementById("id01").getElementsByClassName("incorrectcredentials");
       x[0].style.display = display;
    }
    
</script>
<nav class="navbar">
    <div class="logo">
        <a href="index.php">Happy Wedding</a>
    </div>
    <a href="#" class="toggle-button">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </a>
    <div class="navbarlinks">
        <ul>
            <li><a href="index.php" class="a">Home</a></li>
            <li><a href="services.php" class="a ">Services</a></li>
            <li><a href="plans.php" class="a">Plans</a></li>
            <li><a href="gallery.php" class="a">Gallery</a></li>
            <li><a href="contact.php" class="a">Contact</a></li>
            <li><a href="cart.php" class="a">Cart (<?php if(isset($_SESSION['cart'])){echo count($_SESSION['cart']);} else{echo "0";} ?>) </a></li>
            
            <?php if(isset($_SESSION['uname'])){ ?> 

                <li><a class="a" onclick="location.href='./assets/php/logout.php'">Log Out</a></li>
                <?php }else{?>
                    <li><a class="a" onclick="document.getElementById('id01').style.display='block'">Login</a></li>
            <?php  } ?>  
        </ul>
    </div>
</nav>
<div id="id01" class="maincontainer">
  
    <form class="login animate" action="./assets/php/login.php" method="post">
      <div class="txtlogincontainer">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close maincontainer">&times;</span>
        <!-- <img src="../imgs/5.png" alt="Avatar" class="avatar"> -->
        <h1>Login</h1>
      </div>
        <h2 class="incorrectcredentials">INCORRECT CREDENTIALS!!</h2>
      <div class="logincontainer">
                    
          <label for="name" class="forSignup" style="display: none;">Name</label>
          <input type="text" placeholder="Enter name" id="name" name="name" style="display:none;" class="forSignup notrequired">
  
          <label for="email" class="forSignup" style="display: none;">Email</label>
          <input type="text" placeholder="Enter Email" id="email" name="email" class="forSignup notrequired" style="display: none;" class="forSignup notrequired">
  
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" id="uname" name="uname" required>
  
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" id="psw" name="psw" required>
              
          <button type="submit" id="loginbutton">Login</button>
      </div>
  
      <div class="logincontainer" style="background-color:#f1f1f1">
        <button type="button" onclick="$(cancelButton())" class="cancelbtn">Cancel</button>
        <span class="signup vanish">
            <a onclick="callCorrectPage()">Sign Up</a>
        </span>
      </div>
    </form>
  </div>
  
  <script> var maincontainer = document.getElementById('id01');
  function clicking(){
    const toggleButton = document.getElementsByClassName("toggle-button")[0];
    const navbarlinks = document.getElementsByClassName("navbarlinks")[0];
    toggleButton.addEventListener('click', () => {
        navbarlinks.classList.toggle('active');
    });
}
        $(clicking());
      // When the user clicks anywhere outside of the maincontainer, close it
      window.onclick = function(event) {
          if (event.target == maincontainer) {
              maincontainer.style.display = "none";
            if(document.getElementById("id01").getElementsByClassName("vanish")[0].getElementsByTagName("a")[0].textContent!=="Sign Up"){
                $(createRequiredPage("none",false,"Login","Sign Up"));
            }
            incorrectCredentials("none");
          }
      };
    <?php 
    if(isset($_SESSION['login_fail'])){
        if($_SESSION['login_fail']===true){
            unset($_SESSION['login_fail']);
            ?>
            document.getElementById('id01').style.display='block';
            incorrectCredentials("block");
            <?php if(isset($_SESSION['signup'])){
                unset($_SESSION['signup']);
                ?>
                callCorrectPage();
            <?php } ?>
    <?php
        }
    }
    ?>  
    </script>
  
 
