
window.addEventListener( "load", function () {
fetch();
});


  window.addEventListener("load", function () {
    const loader = document.querySelector(".splash_container");
    loader.className += " hidden"; // class "loader hidden"
});



document.getElementById("rs1").addEventListener( "click", function () {
window.location="/RestoProject/website/RestoReserve";
});

document.getElementById("rs2").addEventListener( "click", function () {
window.location="/RestoProject/website/RestoReserve";
});

document.getElementById("ab1").addEventListener( "click", function () {
window.location="/RestoProject/website/RestoAbout";
});

document.getElementById("ab2").addEventListener( "click", function () {
window.location="/RestoProject/website/RestoAbout";
});

document.getElementById("cnt1").addEventListener( "click", function () {
window.location="/RestoProject/website/RestoContact";
});

document.getElementById("off1").addEventListener( "click", function () {
window.location="/RestoProject/website/RestoMenu";
});

function fetch(){
	setTimeout( function() {
		const gp = new XMLHttpRequest();
		gp.open( "GET", "/RestoProject/website/Database/aboutHome.php" );
		gp.send( null );
		 gp.onreadystatechange = function() {
			 
        if (this.readyState == 4 && this.status == 200) {
		
    
	document.getElementById("parentcard").innerHTML = gp.responseText;
		 }}	
	fetch();
	},20000);
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {

  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

