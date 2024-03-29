<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" type="text/css" href="file:///C:/Users/zakar/Desktop/fontawesome-free-5.9.0-web/css/all.css">
        <script src="test.js"></script>
    </head>
<body>
<!-- Start Header -->
<header>
        <div class="container">
               
              <div class="logo">
                    <a href=""><span>include</span>US</a>
              </div>
              <div class="trigger-main">
                   <a href="javascript:void(0);" class="ham-burger">
                        <span></span>
                        <span></span>
                   </a>
              </div>
              <div class="navbar">
                    <ul>
                          <li><a href="#home" class="active">Home</a></li>
                          <li><a href="#about">About</a></li>
                          <li><a href="#services">Challenges</a></li>
                          <li><a href="#sign in">Sign in</a></li>
                          <li><a href="#sign up">Sign up</a></li>
                          
                    </ul>
              </div>
        </div>
  </header>
   <!-- End Header -->
   <!-- Start Home -->
  <section class="home" id="home">
	<div class="container">
            <div id="particles-js"></div>
            <script type="text/javascript" src="particles.js"></script>
          <script type="text/javascript" src="app.js"></script>
			   <div class="home-text">
					<div class="t1">Diversity is being invited to the party </div>
                    <div class="t2">Inclusion is being asked to dance. </div>    
			   </div>
		</div>
	 </section>
   <!-- End Home -->
   
   <!-- Start About -->
   <section class="about" id="about">
		<div class="container">
			  <h2 class="title">about us</h2>
			  <div class="about-content">
					
					<div class="description">
                                          <div class="img">
                                                      <img src="wall.jpg" alt="">
                                          </div>
                                          Have you ever wondered what people with special needs experience in their daily life? We believe that the best way to take in consideration
                                          their struggle is living in their shoes for a while.
                                          
                                          Thats why we made "Include US" in purpose of challenging people to try living as a special needs person for some time,our platform's main goal is to help people feel the struggle of dailly life of a disabled person through out challenges that get poeple out of there confort zone with fun and meagninful activities and some really intressting meetups that could result in groupe challenges or simply some deeply intressting conversasions. 
                                          All this is to make poeple slowly but surrely more aware of the real life struggle of the special needs persons
					</div>
			  </div>
		</div>
	 </section>
   <!-- End About -->
    <!-- Start challenges/meetup -->
<section class="services" id="services">
      <div class="container">
              <div class="services-content">

                      <div class="card">
                            <div class="box">
                                  <div class="icon">
                                      <a href="../page2/index.php"> Challenges </a> 
                                  </div>
                                  <p class="p">walk in the shoes of a disabled person</p>
                            </div>
                      </div>
                      <div class="card">
                            <div class="box">
                                  <div class="icon">
                                       <a href="#">Meet-up</a> 
                                  </div>
                                  <p class="p">challenge yourself in groups and share an intresting experience with people</p>
                            </div>
                     </div>
              </div>
      </div>
</section>
   <!-- Start Sign in -->
   <section class="contact" id="sign in">
   	 <div class="container" >
   	 	  
   	 	  <div class="contact-content">
   	 	  	  <form id="form1">
                    <h2 class="title" >SIGN IN</h2>
   	 	  	  	 <input type="text" placeholder="user"/>
   	 	  	  	 <input type="password" placeholder="password"/>
   	 	  	  	 <input type="submit" value="sign in" id="signin">
              </form>
                  </div>
                  
   	 </div>
   </section>
 <!-- End Sign in -->
  <!-- Start Sign up -->
  <section class="contact" id="sign up">
   	 <div class="container">
   	 	  
   	 	  <div class="contact-content">
              <form id="form2" >
                    <h2 class="title" >SIGN UP</h2>
                    <input type="text" name="pseudo" placeholder="user name">
                    <input type="email" name="email" placeholder="email adress">
                    <input type="password" name="password" placeholder="password">
                    <input type="password" name="password" placeholder="cofirm your password">
                    <input type="number" placeholder="mobile number" min="10" max="10"> 
                    <input type="submit" value="sign in">
                </form>
   	 	  </div>
   	 </div>
   </section>
 <!-- End Sign up -->

<!-- jquery code -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
	$(document).ready(function(){
		var bottom=$("header").outerHeight();
		var header=$("header").offset().top + bottom;
     $(window).scroll(function(){
          // header fixed only when window width greater than 991px
         if($(window).width()>991){
     	if($(window).scrollTop()>=header){
     		$("header").addClass("sticky")
     	}
     	else{
     	 $("header").removeClass("sticky")	
     	}
     }
     })

     // navbar active link

     $(".navbar ul li a").click(function(){
     	 $(".navbar ul li a").removeClass("active")
     	 $(this).addClass("active");
     })
  
    $(".ham-burger").click(function(){
    	$(this).toggleClass("active")
    	$(".navbar").toggleClass("open");
    })

	})

</script>



  

</body>
</html>

