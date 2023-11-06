<!DOCTYPE html>
<html>
<head>
  <title>Log in</title>
</head>
<body>
<style type="text/css">
body {font:15px/1.5 Arial, Times;
  padding:0;
margin:0;
background-color: grey;
height: 200px;
text-align: center;
}

header { background-color: green;
  color:white;
  padding-top:20px;
  min-height:40px;
  
  
  }
header .button{
    background-color: azure;
    border: none;
    color: green;
    padding: 10px 20px;
    text-align: center;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;

  }
  
  header input[type="button"] {background-color:white;
    color:green;
    float:right;
    
  } 

  
  header  ul {
    list-style-type:none;
    margin: auto;
    padding:auto;
  /*background-color:gold;*/
    overflow:hidden;
  }
  
  header ul li {
    display: inline;
    margin: 5px;
    padding: 5px;
    line-height: 5px;
    
  }
  header ul li a{
    color:gold;
    text-decoration: none;
  
  }
  
  header ul li a:active{background-color: yellowgreen;
    color: blueviolet;
  
  }
  header ul li a:hover{ background-color: silver;
            color: purple;
            padding: 12px;
            margin: 12px;
            line-height: 12px;
            
            
  }
  button[type="button"]{
  color: white;
  background-color: goldenrod;
}
input[type="submit"]{ color: white;
  background-color: goldenrod;
} 
#text{
  height:25px;
  border-radius:5px;
  padding:4px
  border: solid thin #aaa
}
#button {
  padding: 10px; 
  width:100px;
  color: white;
  background-color: lightblue;
  border:none;
  }
  #box {
      background-color:white;
  
  margin:auto;
  width:300px;
  padding:20px;
  
  }
  .container{
  max-width: 1320px;
  
margin: auto;
}
.row{
  display: flex;
  flex-wrap: wrap;
}
footer { background-color:rgb(37, 33, 33);
  color:white;
 font-size:13px;
font-family: times;
text-align: center;
padding: 4px;
margin: 3px;
min-height: 300px;

}
.footer-col{
  font-size: large;
  width: 25%;
  padding:10px 0;
}
.footer-col h6 {
  font-size: 20px;
  color: azure;
  margin: 2px;
  text-transform: capitalize;
  margin-bottom: 30px;
  font-weight: 300px;
  position: relative;

}
.footer-col p {
  color:  green;
  font-size: 15px;
  font-weight: 700;
}
.footer-col h6:before{
  content: '';
  position: absolute;
  left:120px;
  bottom: -10px;
  background-color: red;
  height: 2px;
  box-sizing: border-box;
  width: 50px;
}
.footer-col ul li:not(:last-child){margin-bottom: 10px;

}
.footer-col ul li a {
  font-size: 10px;
  text-transform: capitalize;
  color: aquamarine;
  text-decoration: none;
  font-weight: 300px;
  color: blanchedalmond;
  display: block;
  transition: all 0.3s ease;
}
.footer-col ul li a:hover{
  color: green;
  padding-left: 40px;
}

.footer-col .social-links a {
  display: inline-block;
  height: 31px;
  width: 13px;
  background-color: rgb(255, 255, 255 0.2);
  margin: 0 10px 10px 0;
  text-align: center;
  line-height: 20px;
  border-radius: 50%;
  color: aqua;
  transition: all 0.3s ease;

}
.footer-col .social-links a:hover{
  color: green;
  background-color:gold;
}

footer li {
  list-style: none;
}

/*responsive*/

@media  (max-width: 767px){
  .footer-col{
    width: 25%;
    margin-bottom: 30px;
  }
  }
  @media (max-width: 575px){
    .footer-col{
      width: 100%;
      
    }
  }
           
</style>
<header>
  <a href="http://localhost/login2/signup.php" class="button">SIGN UP</a>
  <a href="http://localhost/login2/login.php" class="button">LOG OUT</a>           
  <!-- <input type="button" value="LOG OUT --- >" > -->

  <h1>Welcome to AGRICKONNECT</h1>
  <h3> connecting you to your fortune </h3>

  <ul>
  <li><a href="index.html">HOME</a></li>
  <li><a href="index.html">TOP DEALS</a></li>
  <li><a href="sell.html">SELL</a></li>
  <li><a href="rent.html">RENT A SPACE</a></li>
  <li><a href="index.html">HANG-OUT ROOM</a></li>
  <li><a href="index.html">BLOG</a></li>
  <li><a href="reg.html">PROMOTE YOUR COMPANY</a></li>
  <li><a href="ourServices.html">AGRICKONNECT SERVICES</a></li>
  </ul>

  <form action="./search.php" class="header_search_form" method="GET">              
  <input type="search" placeholder="Search for anything" required="required">
  <input type="submit" class="search_input" name="search" value="search">
  </form>
</header>
<br>
  <div id='box'>
      <form action='includes/login.inc.php' method='post'>
        <div style="font-size:20px;color:white; margin:10px;">Login</div>
          <input type="text" name='uid' placeholder='Email/username'>
          <br>
          <br>
          <input type="password"  name="pwd" placeholder='Password'>
          <button name="submit" value="submit" type="sumbit">Login</button>
        <br>
        <a href="signup.php">Click to Singup</a>
      </form>
  </div>

    <?php
    if  (isset($_GET["error"])) {
      if ($_GET["error"] === "emptyinput") {
      echo "<p>please fill all fields</p>";
      }else if ($_GET["error"] == "wronglogin") {
      echo "<p>oh you missed it try again!</p>";  
      }
    }
    ?>
      
      <footer class="footer">
  <div class="container">
      <div class="row">
          <div class="footer-col">
              <h6>CATEGORIES</h6>
              <ul>
                  <li><a href="crop.html">CROP</a></li>
                  <li><a href="animal.html">ANIMAL</a></li>
                  <li><a href="service.html">SERVICE</a></li>
                  <li><a href="products.html">PRODUCTS</a></li>
                  <li><a href="timber.html">TIMBER</a></li>
                  <li><a href="waste.html">WASTE</a></li>
                  <li><a href="logistics.html">LOGISTICS</a></li>
                  <li><a href="land.html">LAND & PROPERTY</a></li>
                  <li><a href="tourism.html">TOURISM</a></li>
                  <li><a href="fruit.html">FRUIT</a></li>
                  <li><a href="eqipment.html">EQUIPMENT</a></li>
                  <li><a href="processed_food.php.html">PROCESSED FOOD</a></li>
                  <li><a href="opportunity.html">OPPORTUNITY</a></li>
              </ul>
          </div>
          <div class="footer-col">
              <h6>ABOUT AGRICKONNECT</h6>
              <p>AGRICKONNECT is a trusted and the most realible online business-to-business(B2B) ecosystem for agricultral produce,products & services 
                  AGRICKONNECT is designed for everyone. AGRICKONNECT is where we connect you to your fortune by listing your produce, products & services to millions of users across the globe
                  Are you a crop farmer,herder,bird farmer,fisherman,marketer,accountant,agent,veterinary doctor,food scientist,manufacturer,consultant etc. AGRICKONNECT is a place for you.
                  We connect the real sellers with genine buyers . USING  AGRICKONNECT IS VERY EASY AND SIMPLE.
              </p>
          </div>
          <div class="footer-col">
              <h6>OUR PREMIUM SERVICES</h6>
              <ul>
                  <li><a href="service.html">ESCROW</a></li>
                  <li><a href="service.html">RENT SPACE</a></li>
                  <li><a href="service.html">ADVERTISEMENT</a></li>
                  <li><a href="service.html">RUNNING ERRANDS</a></li>
                  <li><a href="service.html">VERIFILED BADGE</a></li>
                  <li><a href="service.html">LOGISTICS</a></li>
              </ul>
          </div>
          <div class="footer-col">
              <h6>CONTACT US</h6>
            <p>+2349032809103</p>  
              <br>
              <p>info@agrickonnect.com</p>
          </div>
          <div class="footer-col">
              <h6> GET HELP</h6>
              <ul>
              <li><a href="service.html">FAQ</a></li>
              <li><a href="service.html">GUIDE ON HOW TO SELL</a></li>
              <li><a href="service.html">GUIDE ON HOW TO BUY</a></li>
              <li><a href="service.html">TERMS & CONDITIONS</a></li>
              <li><a href="service.html">PRIVECY POLICY</a></li>
          </ul>
          </div>
          <div class="footer-col">
              <div class="social-links">   
              <h6>FOLLOW US</h6>
      
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
  
              
          </div>
          </div>
      </div>
  </div>
  <p> AGRICKONNECT  Page &copy; 2019-2021</p>
  </footer>
          </body>  
   
  </body>
</html>


