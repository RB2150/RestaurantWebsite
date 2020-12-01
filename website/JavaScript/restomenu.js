
window.addEventListener( "load", function () {	
fetch();
} );


document.getElementById("rs").addEventListener( "click", function () {
window.location="/RestoProject/website/RestoReserve";
});


function fetch(){
	setTimeout( function() {
		const starter = new XMLHttpRequest();
		starter.open( "GET", "Database/snacks.php" );
    starter.send( null );
		 starter.onreadystatechange = function() {
			 
        if (this.readyState == 4 && this.status == 200) {
		
    
	document.getElementById("starters").innerHTML = starter.responseText;
		 }}
		const mcourse = new XMLHttpRequest();
		mcourse.open( "GET", "Database/mcourse.php" );
    mcourse.send( null );
		 mcourse.onreadystatechange = function() {
			 
        if (this.readyState == 4 && this.status == 200) {
		
    
	document.getElementById("maincourse").innerHTML = mcourse.responseText;
		 }}
		const desert = new XMLHttpRequest();
		desert.open( "GET", "Database/desert.php" );
    desert.send( null );
		 desert.onreadystatechange = function() {
			 
        if (this.readyState == 4 && this.status == 200) {
		
    
	document.getElementById("dessert").innerHTML = desert.responseText;
		 }}
		const beverage = new XMLHttpRequest();
		beverage.open( "GET", "Database/beverages.php" );
    beverage.send( null );
		 beverage.onreadystatechange = function() {
			 
        if (this.readyState == 4 && this.status == 200) {
		
    
	document.getElementById("beverage").innerHTML = beverage.responseText;
		 }}
	fetch();
	},20000);
}


var header = document.getElementById("nav_menu");
var btns = header.getElementsByClassName("bar");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}


