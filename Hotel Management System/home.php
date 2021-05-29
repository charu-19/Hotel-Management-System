<?php
  session_start();
?>
<!DOCTYPE html> 
<html>
<head>
	<title>Happy Ville</title>
	<link rel="stylesheet" type="text/css" href="css/homestyle.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4b081659f3.js" crossorigin="anonymous"></script>
</head>
<body>
	<section id="nav-bar">
		<!--NavBar bootstrap code-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"><h2>Happy Ville</h2></a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="#">HOME<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">ABOUT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#bookings">BOOKINGS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#menu">RECIPES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#lifestyle">LIFESTYLE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">CONTACT</a>
      </li>
      <li class="nav-item">
        <button type="button" class="btn"><a href="signout.php">LOGOUT</a></button>
      </li>
    </ul>
    </div>
    </nav>
    </section>
       <!--Slider bootstrap code-->
    <div id="slider">
    	<div id="headerSlider" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
       <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
       <li data-target="#headerSlider" data-slide-to="1"></li>
       <li data-target="#headerSlider" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
         <img src="https://www.thesun.co.uk/wp-content/uploads/2019/05/NINTCHDBPICT000490292497.jpg" class="d-block w-100">
      <div class="carousel-caption d-none d-md-block">
        <h5>Experience the Luxury here.</h5>
       
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/foodie.jpg" class="d-block w-100" >
      <div class="carousel-caption d-none d-md-block">
        <h5>Count memories not calories</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/poool.jpg" class="d-block w-100" >
      <div class="carousel-caption d-none d-md-block">
        <h5>Good vibes happen on the tides</h5>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<section id="about">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2>About Us</h2>
				<div class="about-content">
					Luxury Redefined.Both contemporary and elegant,convinient and surprising,sustainable and luxurious.Hotel Happy Ville is a part of a new generation of hotel ;inspired to be extraordinary
				</div>
		    </div>
            <div class="col-md-6 skills-bar">
            	<p>Elegancy</p>
            	<div class="progress">
            	<div class="progress-bar" style="width: 85%;">85%</div>
                </div>
                <p>Comfy</p>
            	<div class="progress">
            	<div class="progress-bar" style="width: 95%;">95%</div>
                </div>
                <p>Luxury</p>
            	<div class="progress">
            	<div class="progress-bar" style="width: 100%;">100%</div>
                </div>
            </div>
</section>
<!-----Gallery=====-->
<section id="gallery">
    <div>
   <center><h2 class="title-text">Classy Rooms</h2></center>
    </div>
    <div id="gallery-center">
        <article class="gallery-item">
            <a href="https://pix10.agoda.net/hotelImages/6395607/-1/9c841444ec7a198e3fc2da32077ea95b.jpg?s=1024x768">
            <img src="https://pix10.agoda.net/hotelImages/6395607/-1/9c841444ec7a198e3fc2da32077ea95b.jpg?s=1024x768" alt=""></a>
        </article>
        <article class="gallery-item">
            <a href="https://cdn.cnn.com/cnnnext/dam/assets/140127103345-peninsula-shanghai-deluxe-mock-up.jpg">
            <img src="https://cdn.cnn.com/cnnnext/dam/assets/140127103345-peninsula-shanghai-deluxe-mock-up.jpg" alt=""></a>
        </article>
        <article class="gallery-item">
            <a href="https://cf.bstatic.com/images/hotel/max1024x768/178/178850685.jpg">
            <img src="https://cf.bstatic.com/images/hotel/max1024x768/178/178850685.jpg" alt="room"></a>
        </article>
        <article class="gallery-item">
            <a href="https://loveincorporated.blob.core.windows.net/contentimages/main/dc5840c1-107f-4963-8b4c-d771a19b125d-hotel-room-interior.jpg" >
            <img src="https://loveincorporated.blob.core.windows.net/contentimages/main/dc5840c1-107f-4963-8b4c-d771a19b125d-hotel-room-interior.jpg"alt="room"></a>
        </article>
        <article class="gallery-item">
            <a href="https://static.toiimg.com/photo/66840273/oberoi-amarvillas.jpg?width=748&resize=4">
            <img src="https://static.toiimg.com/photo/66840273/oberoi-amarvillas.jpg?width=748&resize=4" alt="room"></a>
        </article>
        <article class="gallery-item">
            <a href="https://media-cdn.tripadvisor.com/media/photo-s/17/09/fd/d3/deleue-room.jpg">
            <img src="https://media-cdn.tripadvisor.com/media/photo-s/17/09/fd/d3/deleue-room.jpg" alt="room"></a>
        </article>
        <article class="gallery-item">
            <a href="https://blog.artonemfg.com/hubfs/Arlo.jpg">
            <img src="https://blog.artonemfg.com/hubfs/Arlo.jpg" alt="room"></a>
        </article>
        <article class="gallery-item">
            <a href="https://static.stacker.com/s3fs-public/styles/properly_sized_image/s3/Slide19TyWarnerMansion.jpeg">
            <img src="https://static.stacker.com/s3fs-public/styles/properly_sized_image/s3/Slide19TyWarnerMansion.jpeg" alt="room"></a>
        </article>
 </div>
</section>
<!------End of Gallery====-->
<section id="bookings">
  <div class="container">
    <h1> Bookings Available</h1>
    <div class="row bookings">
      <div class="col-md-4 text-center">
        <div class="icon"> 
          <i class="fa fa-book" aria-hidden="true"></i>
        </div>
        <h3>Book Your Rooms</h3>
        <p>We provide high quality,luxurious rooms...Book your rooms here..</p>
        <button type="button" class="btn btn-primary"><a href="roombook.php">BOOK NOW!</a></button>
      </div>
      <div class="col-md-4 text-center">
        <div class="icon">
          <i class="fa fa-book" aria-hidden="true"></i>
        </div>
        <h3>Book Your Dinnings</h3>
        <p>We provide highly delicious,...Book your dinings priorly here..</p>
        <button type="button" class="btn btn-primary"><a href="tablebook.php">BOOK NOW!</a></button>
        </div>
      <div class="col-md-4 text-center">
        <div class="icon">
          <i class="fa fa-book" aria-hidden="true"></i>
        </div>
        <h3>Book Your Party hall</h3>
        <p>We provide Majestic,luxurious PartyHalls.Book your PartyHall.</p>
        <button type="button" class="btn btn-primary"><a href="partyhall.php">BOOK NOW!</a></button>
      </div>
      </div>
    </div>
  </div>   
</section>

    <!--Header=========-->
    <header class="header">
        <div class="hero">
            <h1 class="title"> FOOD FOR HEALTH</h1>
            <a href="#menu" class="hero-button pulsate"> GO TO MENU</a>
        </div>
    </header>
    <!--End of the Header=====-->
    <!----Menu section=====-->
    <section class="menu" id="menu">
        <article class="menu-image"></article>
        <article class="menu-text">
            <div class="menu-text-center">
            <h1> OUR MENU</h1>
            <p>We provide highly delicious,...Book your dinings priorly here..Taste the delicious Pizzas,Meat dishes,Cheese dishes,Dessert</p>
                 <a href="#numbers">EXPLORE</a>
                 </div>
        </article>
    </section>
 <!-----End of Menu section===-->
 <!---Numbers========-->
 <section id="numbers">
     <article class="number">
         <i class="fas fa-cloud-meatball"></i>
         <p> 50</p>
         <h3> MEAT DISHES</h3>
     </article>
     <article class="number">
        <i class="fas fa-cheese"></i>
        <p> 35</p>
        <h3> CHEESE DISHES</h3>
    </article>
    <article class="number">
        <i class="fas fa-pizza-slice"></i>
        <p> 25</p>
        <h3> PIZZAS</h3>
    </article>
    <article class="number">
        <i class="fas fa-ice-cream"></i>
        <p> 50</p>
        <h3> DESSERTS</h3>
    </article>
</section>
<!-----End  of Numbers=======-->
<!-----Card Section====-->
<section id="food">
    <div>
       <center><h2 class="title-text">FOOD FUSION PACKS</center></h2>
</div>
<div class="food-container">
    <!----article-->
    <article class="food-card">
    <img src="https://foodfusion.com/wp-content/uploads/2019/07/Mutton-sindhi-Biryani-Recipe-by-Food-fusion-5.jpg" class="food-img" alt="">
    <div class="img-text">
        <h1> BREAKFAST</h1>
    </div>
    <div class="img-footer">
        <div class="footer-icon">
          <div class="footer-btn">
          <a href="order.php">
          <button type="button" class="food-btn"> ORDER NOW</a></button>
          </div>
        </div>
          </div>
</article>
 <!---End of article-->
 <!----article-->
 <article class="food-card">
 <img src="https://www.seriouseats.com/recipes/images/2015/07/20150702-sous-vide-hamburger-anova-primary-1500x1125.jpg" class="food-img" alt="">
 <div class="img-text">
     <h1> LUNCH</h1>
 </div>
 <div class="img-footer">
     <div class="footer-icon">
     </div>
        <div class="footer-btn">
        <a href="order1.php">
            <button type="button" class="food-btn"> ORDER NOW</a></button>
        </div>   
</div>
</article>
<!---End of article-->
<!----article-->
<article class="food-card">
<img src="https://b.zmtcdn.com/data/pictures/6/19235126/e5c69b0c29d5b51fa619323a69b06b2e.jpg?fit=around|1029:555&crop=1029:555;*,*" class="food-img" alt="">
<div class="img-text">
    <h1> DINNER</h1>
</div>
<div class="img-footer">
    <div class="footer-icon">
    </div>
        <div class="footer-btn">
        <a href="order2.php">
            <button type="button" class="food-btn">ORDER NOW</a></button>
        </div>
</div>

</article>
<!---End of article-->
</section>
<!-----End of Card section====-->
<section id="lifestyle">
	<div class="container">
	<h1>LifeStyle</h1>
	<div class="row">
		<div class="col-md-4 text-center">
			<div class="life"> 
            <img src=img/room.jpg class="life-img">
            <blockquote>
            	You can experience luxury un Room..It is spacious,comfortable and simply awesome.
            </blockquote>
			<h2>ROOMS</h2>
		</div>
	</div>
		<div class="col-md-4  text-center">
			<div class="life"> 
            <img src=img/badminton.jpg class="life-img">
            <blockquote>
            	You can become a kid again by playing games like badminton,throwball.
            </blockquote>
			<h2>FUN</h2>
		</div>
	</div>
		<div class="col-md-4  text-center">
			<div class="life"> 
            <img src=img/taxi.png class="life-img">
            <blockquote>
            	You can travel to places near to hotel with our cabs services.
            </blockquote>
			<h2>TRANSPORT</h2>
		</div>
		</div>
	</div>
	</div>
</section>


<section id="contact">
		<h1>Get In Touch</h1>
		<div class="cont">
        <p> <i class="fa fa-map-marker" aria-hidden="true"></i>Address: North West Street,Anna Nagar,Madurai-20</p>
        <p><i class="fa fa-phone" aria-hidden="true"></i>0452-655 300</p>
        <p>Follow us on social media</p>
        <i class="fa fa-facebook-square" aria-hidden="true"></i>
        <i class="fa fa-instagram" aria-hidden="true"></i>
        <i class="fa fa-twitter-square" aria-hidden="true"></i>
    </div>
</section>
<!--
 <section>
    	<button class="chat-btn">
    		<i class="material-icons">comment</i>
    	</button>

    	<div class="chat-popup">
        <div class="chat-area">
    		   	<div class="income-msg">
    		   		<img src="chatbot.jpg" class="avatar" alt="">
    		   		<span class="msg">Hey buddy,I am Chatbot,We provide services for 24*7.For further queries mail at happyville@gmail.com</span>
    		   	</div>
    		   </div>
    		   <div class="input-area">
            <form action="feedback.php" action="post">
    		   	  <input type="text" name="feedback" required></form>
    		   	  <button class="submit" type="submit" name="submit"><i class="material-icons">send</i></button>
    		   	</div>
          </div>
    </div>
    </section>
    -->
    <div id="webchat"/>
<script src="https://cdn.jsdelivr.net/npm/rasa-webchat/lib/index.min.js"></script>

// Or you can replace latest with a specific version
<script>
  WebChat.default.init({
    selector: "#webchat",
    customData: {"language": "en"}, // arbitrary custom data. Stay minimal as this will be added to the socket
    socketUrl: "http://localhost:5005",
    socketPath: "/socket.io/",
    title: "Charu",
    subtitle: "Let's talk",
  })
</script>
    <script>
  var scroll = new SmoothScroll('a[href*="#"]');
   </script>

    <script src="js/smooth-scroll.js"></script>
    <script  src="main.js"></script>
</body>
</html>





