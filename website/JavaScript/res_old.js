
window.addEventListener( "load", function () {
document.forms["booking"].reset();
function validate(){
var uname = document.forms["booking"]["uname"].value;
var email = document.forms["booking"]["email"].value;
var mno = document.forms["booking"]["mno"].value;
var seat = document.forms["booking"]["people"].value;
var d = new Date();
var user_time = parseInt(convertTime(document.forms["booking"]["hours"].value,document.forms["booking"]["mins"].value,document.forms["booking"]["timex"].value));
var sys_time = parseInt((d.toLocaleString('en-IN', {timezone:"Asia/Kolkata", hour: 'numeric',minute:'numeric',hour12: false })).replace(":",""));
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
								if(user_time>=sys_time && ((user_time<=2300|user_time<=230) && (user_time>=80|user_time>=800))){
									
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
		else if(user_datec<=bkdate_limitc && user_datec>current_datec){
			if((user_time<=2300|user_time<=230) && (user_time>=80|user_time>=800)){
									console.log("usertime "+user_time);
									console.log("systime "+sys_time);
										const XHR = new XMLHttpRequest();
										  const FD = new FormData( form );
											FD.set("branch",document.getElementById("brn").value.split(" ")[0]);
										XHR.addEventListener( "error", function( event ) {
										  alert( 'Oops! Something went wrong.' );
										} );

										console.log("tom date");
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
	if(hours==12)
	{
		hours=00;
		
	}
	
	if(period=="PM")
	{
		
		hours=parseInt(hours)+12;
		
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
