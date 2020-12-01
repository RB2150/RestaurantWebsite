<div id="s1"></div><br>
<div id="s2"></div><br>
<div id="s3"></div><br>
<script>
window.addEventListener( "load", function () {
var gp = new XMLHttpRequest();
		gp.open( "GET", "/RestoProject/website/Database/main_offers.php" );
		gp.send();
		 gp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
		
		var resp = this.responseText;
		var groups = resp.split('<p style="opacity:0.1%;">b</p>');
		console.log(groups[2]);
		var str = groups[0];
		var divstr = document.createElement("div");
		divstr.innerHTML = str;
		var des = groups[1];
		var divdes = document.createElement("div");
		divdes.innerHTML = des;
		var bev = groups[2];
		var divbev = document.createElement("div");
		divbev.innerHTML = str;
	document.getElementById("s1").appendChild(divstr);
	document.getElementById("s2").appendChild(divdes);
	document.getElementById("s3").appendChild(divbev);
		 }}
});
</script>
