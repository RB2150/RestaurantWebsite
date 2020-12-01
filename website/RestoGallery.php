<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/RestoStyle.css">

   <link rel="stylesheet" type="text/css" href="/RestoProject/SU/css/all.css">

        

  </head>
  <body>


   
        <div class="container">
          <img src="images/GalleryBg.png">
            <div class="headIcon">
            <img src="images/TheExstasisB.png"  id="headon">
            
             </div>
          <div class="scrollmenu">
         <a href="RestoMain.php">Home</a>
          <a href="RestoMenu.php">Menu</a>
          <a href="RestoAbout.php">About Us</a>
          <a href="RestoContact.php">Contact</a>
          <a href="RestoGallery.php">Gallery</a>
          <a href="RestoBlog.php">Blog</a>
        </div>
            <div class="site_title">
                <h1>GALLERY</h1>
                <br>
               
            </div>
            <div class="overlay"></div>
        </div>
        
        

<br>
<br>
<br>
<br>
<br>
<br>

    <div class="gallery-section">
      <div class="inner-width">
        <h1>Our Gallery</h1>
        
        <center><p><i>Click to get a full view taste</i></p></center>
        <div class="border"></div>
        <div class="gallery">

          <a href="images/appetizers.jpeg" class="image">
            <img src="images/appetizers.jpeg" alt="">
          </a>

          <a href="images/breadtomato.jpg" class="image">
            <img src="images/breadtomato.jpg" alt="">
          </a>

          <a href="images/starters.jpg" class="image">
            <img src="images/starters.jpg" alt="">
          </a>

          <a href="images/fried.jpg" class="image">
            <img src="images/fried.jpg" alt="">
          </a>

          <a href="images/icecreamstb.jpg" class="image">
            <img src="images/icecreamstb.jpg" alt="">
          </a>

          <a href="images/orangemushi.jpg" class="image">
            <img src="images/orangemushi.jpg" alt="">
          </a>

          <a href="images/refresh.jpg" class="image">
            <img src="images/refresh.jpg" alt="">
          </a>

          <a href="images/cupcakes.jpg" class="image">
            <img src="images/cupcakes.jpg" alt="">
          </a>

        </div>
      </div>
    </div>


 


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

 <center>
    <div class="ReserveCont">
        <div class="ResText">
       <h1>Reserve Table</h1>
       <p>Wanna join us?  Get your table reserved.</p>
       <button class="resmore" id="rs"> Reserve Table</button>
      </div>
       <img src="images/settable.jpg">
     
    </div>
   </center>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
  
 <footer>
      <div class="footer_container">

        <div class="left">
          <img src="images/TheExstasis.png" alt="" class="logo">
          <div class="social">
            <p>Follow us</p>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <p class="rights">© 2020 Created By SK All Rights Reserved.</p>
        </div>
       
        <div class="right">
          <h1>Our Newsletter</h1>
          <div class="borderfoot"></div>
          <p>Enter Your Email to get our news and updates.</p>
          <form action="" class="newsletter">
            <input type="text" class="txtb" placeholder="Enter Your Email" name="email">
            <input type="submit" class="btn" value="submit" name="submit">
          </form>
        </div>
      </div>
    </footer>

 <script>
    $(".gallery").magnificPopup({
      delegate: 'a',
      type: 'image',
      gallery:{
        enabled: true
      }
    });
	document.getElementById("rs").addEventListener( "click", function () {
window.location="/RestoProject/website/RestoReserve";
});
  </script>

  </body>
</html>
