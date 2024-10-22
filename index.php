<!DOCTYPE html>
<html lang="en">
<head>
    <style>
      button{
        color: white;
        background-color: #ff0157;
        height: 40px;
        width: 180px;
        font-size: 19px;
        border: none;
        border-radius: 10px;
        letter-spacing: 2px;
        transition: 0.5s;
        display:inline-block;
        margin-top: 20px;
    
             letter-spacing: 2px;
        transition: 0.5s;
}

      button:hover{
        letter-spacing: 7px;
      }

        
 </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Website</title>
    <link rel="stylesheet" href="food.css">
</head>
<body>
    <header>
        <a href="#" class="logo">Food <span>.</span></a>
        <ul class="navigation">
            <li><a href="#banner">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#menu">Menu</a></li>
            <li><a href="#expert">Expert</a></li>
            <li><a href="#contact">Contact</a></li>
            
        </ul>
    </header>
    <section>
         <div  class='banner' id="banner">
            <div class="content">
                <h1>Always Choose Good</h1>
                <p>With online Food delivery across 500+ cities,<br>
                  you can get your Favourites delivered at your doorstep within minutes
                   <br>
                    <a href="manasa.php" class="btn1" ><button >Order  Now</button> </a>
                </p>
            </div>
         </div>
    </section>
    <section class="about" id="about"> 
        
      
            <h2 class="title" ><span>A</span>bout  Us</h2>
            <div class="row">
            <p>
            An online food ordering system, or OFOS, is a technology solution that allows customers to order food for delivery or pickup through a website or app. OFOS can also integrate with point-of-sale (POS) systems to streamline the ordering process. <br>
OFOS typically has two components:<br>
Customer-facing: A website or app that allows customers to view the menu, place orders, and access features like personalized user accounts, geolocation and address autofill, and real-time order tracking<br>
Admin interface: Allows the restaurant to receive and fulfill orders

            </p>
                    
                <img src="about1.png">
           

       
        </div>
    </section>
    <section class="menu" id="menu">
     <div class="titleN">
        <h2 class="title"> Our   <span>M</span>enu</h2>
     </div>
     <div class="container">
     <div class="items">
        <img src="cb.png" class="item_image">
        <h2 class="item_name">Non-Veg Biriyani's</h2>
        <h3 class="price"><span>(200-550)</span> Rupees</h3>
     
    </div>
    <div class="items">
        <img src="clollipop.png" class="item_image">
        <h2 class="item_name">Chicken Recipes</h2>
        <h3 class="price"><span>(150-310)</span> Rupees</h3>
        
    </div>
    <div class="items">
        <img src="vegf.png" class="item_image">
        <h2 class="item_name">Veg Recipes</h2>
        <h3 class="price"><span>(30-150)</span> Rupees</h3>
        
    </div>
    <div class="items">
        <img src="cup.png" class="item_image">
        <h2 class="item_name">Ice Creams</h2>
        <h3 class="price"><span>(35-80)</span> Rupees</h3>
       
    </div>
    <div class="items">
        <img src="spring.png" class="item_image">
        <h2 class="item_name">Cool Drinks</h2>
        <h3 class="price"><span>150</span> Rupees</h3>
        
    </div>
    <div class="items">
        <img src="pannertikka.png" class="item_image">
        <h2 class="item_name">Starters</h2>
        <h3 class="price"><span>280</span> Rupees</h3>
        
    </div>
    </div>
     
     
     
     <div class="titleN">
        <a href="manasa.php" class="btn1" ><button >View All</button> </a>
     </div>
     
    </section>
    
        <section class="expert" id="expert">
            <div class="titleN">
                <h2 class="title"> Our Kitchen  <span>E</span>xpert</h2>
             </div>
        <div class="content">
          <div class="box">
          <div class="image">
            <img src="vkas kanna.png">
          </div>
          <div class="text">
            <h3>Someone Famous</h3>
          </div>
        </div>
        <div class="box">
        <div class="image">
          <img src="kunal kapur.png">
        </div>
        <div class="text">
          <h3>Someone Famous</h3>
        </div>
      </div>
      <div class="box">
      <div class="image">
        <img src="pankaj bhadouria.png">
      </div>
      <div class="text">
        <h3>Someone Famous</h3>
      </div>
    </div>
    <div class="box">
    <div class="image">
      <img src="anahitha dondi.png">
    </div>
    <div class="text">
      <h3>Someone Famous</h3>
    </div>
  </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <div class="titleN">
            <h2 class="title"> <span>C</span>ontact  Us</h2>
         </div>
         
         <div class="contactfrom">
          
            <h3>Send Message</h3>
            <div class="inputBox">
                <input type="text" placeholder="Enter Your Name">
            </div>
            <div class="inputBox">
                <input type="text" placeholder="something@gmail.com">
            </div>
            <div class="inputBox">
                <textarea  placeholder="Comment"></textarea>
            </div>
            <div class="inputBox">
                <input type="submit" onclick="myfun()" value="send">
            </div>
         </div>
         
         </section>
         <div class="copyrighttext">
            <p>Copyright 2024 <a href="#">Rayalaseema Ruchulu</a>.All Right Reserved</p>
         </div>
    <script type="text/javascript">
        window.addEventListener('scroll',function(){
            const header = document.querySelector('header');
            header.classList.toggle("sticky",window.scrollY > 0);
        });
    </script>
    <script>
      function myfun(){
        alert("Message Send Sucessfully");
      }
      </script>

</body>
</html>
