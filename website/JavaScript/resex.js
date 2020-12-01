
window.addEventListener( "load", function () {
document.forms["booking"].reset();
function validate(){
var uname = document.forms["booking"]["uname"].value;
var email = document.forms["booking"]["email"].value;
var mno = document.forms["booking"]["mno"].value;
var seat = document.forms["booking"]["people"].value;
var d = new Date();

var prd = document.forms["booking"]["timex"].value;
var user_time = parseInt(convertTime(document.forms["booking"]["hours"].value,document.forms["booking"]["mins"].value,document.forms["booking"]["timex"].value));
var user_hrs = parseInt(document.forms["booking"]["hours"].value);
var user_mins = parseInt(document.forms["booking"]["mins"].value);
if(prd=="PM"){	
	if(user_hrs==11 && user_mins==0 ){
		user_hrs=10;
		user_mins=59;
	}
}
console.log("user_hrs = "+user_hrs+" user_mins = "+user_mins);
var sys_time = d.toLocaleString('en-IN', {timezone:"Asia/Kolkata", hour: 'numeric',minute:'numeric',hour12: false }).split(":");
var cur_sys_tym = parseInt(sys_time[0]+sys_time[1]);
var sys_hrs = parseInt(sys_time[0]);
var sys_mins = parseInt(sys_time[1]);
console.log("sys_mins = "+sys_mins);
if(prd=="PM"){
	sys_hrs = sys_hrs-12;
}
console.log("sys_hrs = "+sys_hrs);
var user_date = document.forms["booking"]["datex"].value;

var bkdate_limit = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+(d.getDate()+7);
var current_date = d.getFullYear()+"-"+(d.getMonth()+1)+"-"+d.getDate();
var bkdate_limitc = parseInt(bkdate_limit.replace(/(^|-)0*/g,""),10);
var current_datec = parseInt(current_date.replace(/(^|-)0*/g,""),10);
var user_datec = parseInt(user_date.replace(/(^|-)0*/g,""),10);
var phoneno = /^(7|8|9)\d{9}$/;
var sbox = /^\d{1,30}$/;
var ere = /^[-_a-zA-Z0-9]{1,25}@[-_a-zA-Z0-9]{2,10}\.[a-z]{2,10}$/;
if (uname != "") {
	  if (email != "") {
		  if(ere.test(email)==true){
			  	if (mno != "") {
					if(phoneno.test(mno)==true){
					if (seat != "") {
						if (sbox.test(seat)==true) {
							if(current_datec==user_datec){
								if(prd=="AM"){
								if((user_time>=cur_sys_tym) && ((user_hrs<=11 && user_mins<=59) && (user_hrs>=8 && user_mins>=0))){
									
										  const XHR = new XMLHttpRequest();
										  const FD = new FormData( form );
					
										XHR.addEventListener( "error", function( event ) {
										  alert( 'Oops! Something went wrong.' );
										} );

										
										XHR.open( "POST", "Database/table_book.php" );

										 XHR.send( FD );
										XHR.onreadystatechange = function() {
												 
											if (this.readyState == 4 && this.status == 200) {
												
										document.getElementById("zxzx").value="";
										document.getElementById("zxzx").innerHTML = XHR.responseText;
										
										}
										else
										{
										document.getElementById("zxzx").value="";
										document.getElementById("zxzx").innerText = "Oops..Something Went Wrong";
										}
										}
							}
							else{
									//console.log(user_time+"=="+sys_time);
									alertx("Enter Valid Time(Opening Hours are 8 AM TO 11 PM)");
									return false;
								}
							}
							else if(prd=="PM"){
								if((user_time>=cur_sys_tym) && ((user_hrs<=10 && user_mins<=59) && (user_hrs>=1 && user_mins>=0))){
									
										  const XHR = new XMLHttpRequest();
										  const FD = new FormData( form );
					
										XHR.addEventListener( "error", function( event ) {
										  alert( 'Oops! Something went wrong.' );
										} );

										
										XHR.open( "POST", "Database/table_book.php" );

										 XHR.send( FD );
										XHR.onreadystatechange = function() {
												 
											if (this.readyState == 4 && this.status == 200) {
												
										document.getElementById("zxzx").value="";
										document.getElementById("zxzx").innerHTML = XHR.responseText;
										
										}
										else
										{
										document.getElementById("zxzx").value="";
										document.getElementById("zxzx").innerText = "Oops..Something Went Wrong";
										}
										}
							}
							else if((user_time>=cur_sys_tym) && (user_hrs==12 && user_mins>=0 && user_mins<=59)){
												  const XHR = new XMLHttpRequest();
										  const FD = new FormData( form );
					
										XHR.addEventListener( "error", function( event ) {
										  alert( 'Oops! Something went wrong.' );
										} );

										
										XHR.open( "POST", "Database/table_book.php" );

										 XHR.send( FD );
										XHR.onreadystatechange = function() {
												 
											if (this.readyState == 4 && this.status == 200) {
												
										document.getElementById("zxzx").value="";
										document.getElementById("zxzx").innerHTML = XHR.responseText;
										
										}
										else
										{
										document.getElementById("zxzx").value="";
										document.getElementById("zxzx").innerText = "Oops..Something Went Wrong";
										}
										}
							}
							else{
									console.log(user_time+"=="+sys_time);
									alertx("Enter Valid Time(Opening Hours are 8 AM TO 11 PM)");
									return false;
								}
								
							}
								else{
									console.log(user_time+"=="+sys_time);
									alertx("Enter Valid Time(Opening Hours are 8 AM TO 11 PM)");
									return false;
								}
								
								}
								
		else if(user_datec<=bkdate_limitc && user_datec>current_datec){
							if(prd=="AM"){
								if((user_hrs<=11 && user_mins<=59) && (user_hrs>=8 && user_mins>=0)){
									
										  const XHR = new XMLHttpRequest();
										  const FD = new FormData( form );
					
										XHR.addEventListener( "error", function( event ) {
										  alert( 'Oops! Something went wrong.' );
										} );

										
										XHR.open( "POST", "Database/table_book.php" );

										 XHR.send( FD );
										XHR.onreadystatechange = function() {
												 
											if (this.readyState == 4 && this.status == 200) {
												
										document.getElementById("zxzx").value="";
										document.getElementById("zxzx").innerHTML = XHR.responseText;
										
										}
										else
										{
										document.getElementById("zxzx").value="";
										document.getElementById("zxzx").innerText = "Oops..Something Went Wrong";
										}
										}
							}
							else{
									console.log(user_time+"=="+sys_time);
									alertx("Enter Valid Time(Opening Hours are 8 AM TO 11 PM)");
									return false;
								}
							}
							else if(prd=="PM"){
								if((user_hrs<=10 && user_mins<=59) && (user_hrs>=1 && user_mins>=0)){
									
										  const XHR = new XMLHttpRequest();
										  const FD = new FormData( form );
					
										XHR.addEventListener( "error", function( event ) {
										  alert( 'Oops! Something went wrong.' );
										} );

										
										XHR.open( "POST", "Database/table_book.php" );

										 XHR.send( FD );
										XHR.onreadystatechange = function() {
												 
											if (this.readyState == 4 && this.status == 200) {
												
										document.getElementById("zxzx").value="";
										document.getElementById("zxzx").innerHTML = XHR.responseText;
										
										}
										else
										{
										document.getElementById("zxzx").value="";
										document.getElementById("zxzx").innerText = "Oops..Something Went Wrong";
										}
										}
							}
							else if(user_hrs==12 && user_mins>=0 && user_mins<=59){
												  const XHR = new XMLHttpRequest();
										  const FD = new FormData( form );
					
										XHR.addEventListener( "error", function( event ) {
										  alert( 'Oops! Something went wrong.' );
										} );

										
										XHR.open( "POST", "Database/table_book.php" );

										 XHR.send( FD );
										XHR.onreadystatechange = function() {
												 
											if (this.readyState == 4 && this.status == 200) {
												
										document.getElementById("zxzx").value="";
										document.getElementById("zxzx").innerHTML = XHR.responseText;
										
										}
										else
										{
										document.getElementById("zxzx").value="";
										document.getElementById("zxzx").innerText = "Oops..Something Went Wrong";
										}
										}
							}
							else{
									console.log(user_time+"=="+sys_time);
									alertx("Enter Valid Time(Opening Hours are 8 AM TO 11 PM)");
									return false;
								}
								
							}
								else{
									console.log(user_time+"=="+sys_time);
									alertx("Enter Valid Time(Opening Hours are 8 AM TO 11 PM)");
									return false;
								}
								
		}
		else{
			   alertx("Enter Valid DATE");
			   return false;
		}
	}
	
  else{
	  alertx("Enter Number Only Inside No Of People");
	  document.getElementById("people").focus();
  }
  }
  else{
	 
    return false;
  }
				}
  else{alertx("Enter Valid Number");
    return false;
	}
  }
  else{
	
    return false;
  } 
			  
		  }
	else{
		alertx("Enter Valid Email");
    return false;
	}
  }
   else{
    return false;
  } 
  }
  else{
	 
    return false;
  }
}
const form = document.getElementById( "booking" );

  form.addEventListener( "submit", function ( event ) {
    event.preventDefault();
    validate();
  } );
} );


document.getElementById("am_pm").addEventListener( "click", function(){
		var drop = document.getElementById("periodDropdown");
	if(drop.style.width=="18%"){
		drop.style.width="0%";
		drop.style.color="transparent";
	}
	else{
	    drop.style.width="18%";
	    drop.style.color="grey";
	}
});
document.getElementById("am_pm").addEventListener( "input", function(){
		var drop = document.getElementById("periodDropdown");
	
	    drop.style.width="18%";
	    drop.style.color="grey";
	
});

function periodsel(el) {
	var ptag = el.innerText;
  document.getElementById("am_pm").value=ptag;
   var drop = document.getElementById("periodDropdown");
  drop.style.width="0%";
  drop.style.color="transparent";
  
}

function convertTime(hours,mins,period)
{	
//hours=parseInt(hours);
//mins=parseInt(mins);
if(period=="AM"){
		if(hours==12)
	{
		hours=00;
		
	}
	else{
		//mins=mins+"0";
		console.log("minsconv = "+mins);
	}
	
		}
	
	if(period=="PM")
	{
		
		hours=hours+12;
		
	}
	return hours+mins;
}


function despbr(el) {
	
	var ptag = el.innerText;
	var dropbrntxt = document.getElementById("brn");
  dropbrntxt.value=ptag;
   var drop = document.getElementById("brnDropdown");
   
  drop.style.height="0px";
  drop.style.color="transparent";
  setTimeout( function() {
	dropbrntxt.style.borderTopLeftRadius = "50px";
	dropbrntxt.style.borderTopRightRadius = "50px";
	dropbrntxt.style.borderBottomRightRadius="50px"
	dropbrntxt.style.borderBottomLeftRadius="50px"
	dropbrntxt.style.borderBottom="";
	dropbrntxt.style.borderBottom="solid 1px";
		drop.classList.toggle("ac");
		},723);
}

document.getElementById("brn").addEventListener( "click", function(){
		var dropbrn = document.getElementById("brnDropdown");
		var brntxt = document.getElementById("brn");
	if(dropbrn.style.height=="160px"){
		dropbrn.style.height="0px";
		setTimeout( function() {
		brntxt.style.borderTopLeftRadius = "50px";
		brntxt.style.borderTopRightRadius = "50px";
		brntxt.style.borderBottomRightRadius="50px"
		brntxt.style.borderBottomLeftRadius="50px"
		brntxt.style.borderBottom="";
		brntxt.style.borderBottom="solid 1px";
		dropbrn.classList.toggle("ac");
		},723);
		dropbrn.style.color="transparent";

	}
	else{
		dropbrn.classList.toggle("ac");
		brntxt.style.borderTopLeftRadius = "20px";
		brntxt.style.borderTopRightRadius = "20px";
	    dropbrn.style.height="160px";
	    dropbrn.style.color="black";
		brntxt.style.borderBottom="none";
		dropbrn.style.borderTop="none";
		setTimeout( function() {
		brntxt.style.borderBottomRightRadius="0px"
		brntxt.style.borderBottomLeftRadius="0px"
		},53);
		
		dropbrn.style.borderBottomRightRadius="8px"
		dropbrn.style.borderBottomLeftRadius="8px"
	}
});
