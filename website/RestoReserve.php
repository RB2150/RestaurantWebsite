	<!DOCTYPE html>
<html>
<head>
	 
	<title>Reservation</title>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="JavaScript/alert.js"></script>
<link type="text/css" rel="stylesheet" href="css/alert.css"/>
<link type="text/css" rel="stylesheet" href="css/restoreserve.css"/>
</head>
<body>
<div class="logStyle">
<img src="images/Resebg.png">

</div>

<div class="heading">
	<img src="images/TheExstasisB.png">
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

	
	<div class="Time_main">
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
<input type="text" id="am_pm" placeholder="AM/PM" name="timex" autocomplete="off" />
	<div  class="descontainer" id="periodDropdown"> 
		<p onclick="periodsel(this)">AM</p>
		<p onclick="periodsel(this)">PM</p>
	</select>
	</div>
	</div>
	

	

<label id="datehead" for="Date">Date</label>
 	<input class="Date" id="date" type=date name=datex required>

<br>

	<label id="people_label" for="people">No. of people</label>
	<input id="people" type="text" name="people" required>
	<br>
	<input type="text" name="branch" autocomplete="off" class="persinfo" placeholder="Where Can We Serve You..?" id="brn">

	<div  class="brncontainer" id="brnDropdown" style="height: 0px; color: transparent;"> 
	<p class="des_content" onclick="despbr(this)">Bandra - Times Square Building, 1st Floor B Wing</p>
	<p class="des_content" onclick="despbr(this)">Thane - Link Square Mall,Linking Rd,Opp KFC</p>
	<p class="des_content" onclick="despbr(this)">Mumbai - Near Phoenix Square,LBS Road</p>
	</div>
	<br>
	<br>
	<button id="resbtn" type="submit" name="reserve" >Reserve</button>
	<br>
	<p id=zxzx></p>
	</form>
</div>
<script src="JavaScript/resex.js"></script>
</body>
</html>