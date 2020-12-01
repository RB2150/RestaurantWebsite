	<!DOCTYPE html>
<html>
<head>
	 
	<title>Reservation</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			font-family:Segoe UI;
			
		}
		body{
			background-color: #292F32;
		}
		.logStyle{
			
			
		}
		.logStyle img{
			height: 100%;
			max-width: 45%;
			
			float: left;
			position: fixed;

		}
		.heading{
			padding: 2%;

			
		}
		.heading img{
			opacity: .2;
			margin-right: 8%;
			margin-left: 58%;
			width: 20%;

			

		}
		.heading h2{
			text-align: center;
			margin-right: 10%;
			margin-left: 48%;
			font-size: 40px;
			margin-top: 2%;
			font-weight: 500;
			color: #FFBA78;
			font-family: Times New Roman;
			font-style: italic;

		}
		.log{

			margin-right: 8%;
			margin-left: 45%;

		}
		.log p{

			margin-right: 30%;
			margin-left: 15%;
		}
		
		.persinfo{
				margin-right: 10%;
			margin-left: 15%;
			margin-bottom: 2%;
			width: 65%;
			height: 30px;
			font-size: 15px;	
			border-top: 0;
			border-left: 0;
			border-right: 0;
			background-color: transparent !important;
			color: #fff;
			border-color: #FFBA78;
			border-width: 1px;
			outline: none;
		}
	

		input[type=number]::-webkit-inner-spin-button, 
		input[type=number]::-webkit-outer-spin-button { 
		-moz-appearance:textfield;
		-webkit-appearance: none; 
  		margin: 0; 
		}
		
		#resbtn{
			
			margin-right: 10%;
			margin-left: 16%;
			
			margin-bottom: 2%;
			width: 66%;
			height: 35px;
			font-size: 15px;
			font-weight: 500;
			color:  #292F32;
			text-align: center;
			background-color: #FFBA78;
			border: none;
			border-radius: 50px;
			 box-shadow:   2px 1px 18px rgba(0,0,0,0.4);
         transition: 0.5s ease;
         text-shadow:  0px 0px 8px rgba(0,0,0,0.3);
         cursor: pointer;
         outline: none;
		}
		
		#resbtn:hover{

			border-radius: 8px;
			width: 65%;
			height: 32px;
			 box-shadow:   2px 1px 18px rgba(0,0,0,0.0);

		}
		label{
			color: #fff;
		}
	
		#people{
			width: 8%;
			height: 20px;
			margin-bottom: 2%;
			outline: none;
			margin-left: 2%;
			font-size: 15px;	
			padding: 4px;
			background-color: transparent;
			color: #fff;
			border-radius: 8px;
			border-color: #FFBA78;
			border-width: 1px;
		}
		#people_label{
			margin-left: 22%;
			font-weight: 100;
		}
		#hours{
			width: 10%;
			height: 30px;
			margin-bottom: 2%;
			outline: none;
			font-size: 15px;	
			padding: 3px;
			background-color: transparent;
			color: #fff;
			border-radius: 8px;
			border-color: #FFBA78;
			border-width: 1px;

		}
		#minutes{
			width: 10%;
			height: 30px;
			margin-bottom: 2%;
			outline: none;
			font-size: 15px;	
			padding: 3px;
			background-color: transparent;
			color: #fff;
			border-radius: 8px;
			border-color: #FFBA78;
			border-width: 1px;

		}
		#hrs{
			margin-left: 1%;
			margin-right: 1%;
			font-weight: 100;
			margin-top: 1%;

		}
		#mins{
			margin-left: 1%;
			
			font-weight: 100;
			margin-top: 1%;
		}


		#am_pm{
			width: 10%;
			height: 30px;
			margin-bottom: 2%;
			outline: none;
			font-size: 15px;	
			margin-left: 6px;
			background-color: transparent;
			color: #fff;
			border-radius: 8px;
			border-color: #FFBA78;
			border-width: 1px;

		}
		
		option{

			outline: none;
			background-color: #292F32;
			border-style: solid;
			border-radius: 8px;
			border-color: #FFBA78;
			border-width: 1px;
			margin-bottom: 10%;
			


		}

		

		#timehead{
				margin-bottom: 2%;
			margin-right: 1%;
			margin-left: 10%;
			border-style: solid;
			color: #FFBA78;
			opacity: .5;
			border-color: #FFBA78;
			border-width: 1px;
			border-left: 0;
			border-bottom: 0;
			border-top: 0;
			padding-right: 5px;
			padding-top: 2px;
			padding-bottom: 2px;


		}
		#datehead{
			
			margin-bottom: 2%;
			
			margin-left: 4%;
			border-style: solid;
			color: #FFBA78;
			opacity: .5;
			border-color: #FFBA78;
			border-width: 1px;
		border-left: 0;
			border-bottom: 0;
			border-top: 0;
			padding-right: 5px;
			padding-top: 2px;
			padding-bottom: 2px;


		}
		.Date{
			outline: none;
			width: 25%;
			height: 20px;
			margin-bottom: 2%;
			margin-left: 6px;
			font-size: 15px;	
			padding: 4px;
			background-color: transparent;
			color: #fff;
			border-radius: 8px;
			border-color: #FFBA78;
			border-width: 1px;
		}
		.personal{
			outline: none;
			border-style:none;
			margin-left: 10%;
			margin-right: 10%;


		}

		
.Time_main{
	display: flex;
	margin-top: 2%;
	margin-bottom: 2%;
}
#zxzx{
	font-size: 15px;
	color: #f4f4f4;
	text-align: center;
	 
	margin-left: 5%;
	margin-right: 5%;
	width:auto;
	animation:blinkingText 3.5s;
	animation-iteration-count: 3;
}

@keyframes blinkingText{
     0% { text-shadow: 0 1px 10px #FFBA78; }
    50% { text-shadow: none; }
    100% { text-shadow: 0 1px 10px #FFBA78; }
   
}
@-webkit-keyframes blinkingText {
    0% { text-shadow: 0 1px 10px #FFBA78; }
    50% { text-shadow: none; }
    100% { text-shadow: 0 1px 10px #FFBA78; }
   
}
		
	</style>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="JavaScript/alert.js"></script>
<link type="text/css" rel="stylesheet" href="css/alert.css"/>
</head>
<body>
<div class="logStyle">
<img src="shakeglass.jpg">

</div>

<div class="heading">
	<img src="TheExstasis.png">
	<h2>Reservation</h2>
</div>

<div class="log">

	<form id=booking>
<div class="personal">
	<input class="persinfo" type="text" name="uname" id="uname" placeholder="Full Name" required oninvalid="this.setCustomValidity('Please Enter Name Here')" oninput="this.setCustomValidity('')">
			
	<br><br>

	
	</p><input class="persinfo" type="email" id="email" name="email" placeholder="Email"  required oninvalid="this.setCustomValidity('Enter Valid Email Here')" oninput="this.setCustomValidity('')">
	<br><br>
	</p><input class="persinfo" type="tel" id="phone" name="mno" required placeholder="Number Eg : 9874568746" oninvalid="this.setCustomValidity('Enter Only Number')" oninput="this.setCustomValidity('')">
	
	</div>

	
	<br>
	<label id="people_label" for="people">No. of people</label>
	<input id="people" type="text" name="people" required>
	
	<br>

	<br>

	<div class="Time_main">

<label id="datehead" for="Date">Date</label>
 	<input class="Date" id="date" type=date name=datex required>

	

	<label id="timehead" for="hours">Time</label>
	
	<input type="search" id="hours" list="autocomplete" placeholder="00" name="hours" required>

	
<datalist id="autocomplete">
	<option>01</option>
	<option>02</option>
	<option>03</option>
	<option>04</option>
	<option>05</option>
	<option>06</option>
	<option>07</option>
	<option>08</option>
	<option>09</option>
	<option>10</option>
	<option>11</option>
	<option>12</option>

</datalist>

	<label id="hrs" for="hours">hrs</label>
	

	
<input type="search" id="minutes" list="ac" placeholder="00" name="mins" required>

	
<datalist id="ac">
	<option>00</option>
	<option>01</option>
	<option>02</option>
	<option>03</option>
	<option>04</option>
	<option>05</option>
	<option>06</option>
	<option>07</option>
	<option>08</option>
	<option>09</option>
	<option>10</option>
	<option>11</option>
	<option>12</option>
	<option>13</option>
	<option>14</option>
	<option>15</option>
	<option>16</option>
	<option>17</option>
	<option>18</option>
	<option>19</option>
	<option>20</option>
	<option>21</option>
	<option>22</option>
	<option>23</option>
	<option>24</option>
	<option>25</option>
	<option>26</option>
	<option>27</option>
	<option>28</option>
	<option>29</option>
	<option>30</option>
	<option>31</option>
	<option>32</option>
	<option>33</option>
	<option>34</option>
	<option>35</option>
	<option>36</option>
	<option>37</option>
	<option>38</option>
	<option>39</option>
	<option>40</option>
	<option>41</option>
	<option>42</option>
	<option>43</option>
	<option>44</option>
	<option>45</option>
	<option>46</option>
	<option>47</option>
	<option>48</option>
	<option>49</option>
	<option>50</option>
	<option>51</option>
	<option>52</option>
	<option>53</option>
	<option>54</option>
	<option>55</option>
	<option>56</option>
	<option>57</option>
	<option>58</option>
	<option>59</option>
	

</datalist>
	<label id="mins" for="minutes">mins</label>

	
	<select id="am_pm" name="timex">
		<option value="AM">am</option>
		<option value="PM">pm</option>
	</select>

	

</div>	

<p id=zxzx></p>
<br>



	<button id="resbtn" type="submit" name="reserve" >Reserve</button>
	</form>
</div>
<script src="JavaScript/restoreserve.js"></script>
</body>
</html>