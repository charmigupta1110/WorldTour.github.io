<html>
<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
#example1{
  	background-image: url('home.jpg');
	background-size: cover;
	width:100%;
	background-repeat: no-repeat;
         }
.btn {
	
  	
 	 color:blue;
 	 padding: 24px 36px;
  	font-size: 45px;
  	cursor: pointer;
	align:center;
	
}
.btn:hover{
	background-color:green;
	
}

h1{
	font-size=120px;
     }
*{
	margin:0;
	padding:0;
	box-sizing:border-box;
}
.book{
	background:grey;
	text-align:center;
}
.book li{
	font-size:20px;
}
.book ul {
	display: inline-flex;
	list-style:none;
      }

.book ul li{
	width:120px;
	margin:15px;
	padding:15px;
}
.book ul li a{
	text-decoration:none;
}
.book ul li:hover{
	background-color:black;
	backgroung-radius:3px;
}
.do{
 	color:white;
 	 background-color: black;
	 height:10px;
	  width:10px;
 	 background-color: white;
  	border-radius: 50%;
  	display: inline-block;
}
.my{

	background-color:black;
	color:white;
}

.photo{
	margin-left:950px;
	font-size:30px;
	text-decoration:none;
	text-align:center;
	background-color:black;
}

.fa:hover{
	opacity:0.7;
}
.fa-facebook{
	color:white;
	background-color:#3B5998;
}
.fa-instagram{
	color:pink;
	background-color:blue;
}
.fa-youtube{
	color:white;
	background-color:red;
}
.fa-twitter{
	color:#55ACEE;
	background-color:white;
}
.media{
	margin-left:200px;
	margin-top:300px;
	word-spacing:30px;
}
.column {
float: left;
  width: 45%;
  padding: 10px;
}
.row {
  display:flex;
}
.row:hover .column img{
transform: scale(0.9);
}

</style>

</head>

<body>
<h1 align= "center" > Online Booking </h1><br>
<div class="book">
<ul>
<li> <a href="a.php"><i class="fa fa-home"><br> Home</i> </a></li>
<li> <a href="b.php"><i class="fa fa-bed" ><br> Hotels </i></a> </li>
<li> <a href="c.php"> <i class="fa fa-fighter-jet"><br>Flights </i></a> </li>
<li> <a href="Return.php"> <i class="fa fa-fighter-jet" ><br>Return Flights </i></a> </li>
<li> <a href="e.php"> <i class="fa fa-info-circle"><br>Help </i></a> </li>
<li> <a href="f.php"> <i class="fa fa-phone"><br> Contacts </i></a> </li>
</ul></div><br>

<div id="example1">
<h1 align= "center" style="color:black;" > SEARCH & COMPARE <br> BEFORE BOOK </h1>
<h1 align= "center" style="color:black" > Save upto 50%off on hotel and Fights Worldwide. </h1>

<div class="media">
<h1 style="color:black; margin-bottom:100px;"> booking.com
<i class="fa fa-plane">Expedia</i>
 Trivago
lastminute.com
 Hotel.com</h1><br>
</div>
</div>
<a href="a.php"> <button class="btn" style="color:black"><i class="fa fa-tags" ><h4 align="center"> Best Price  </h4></i></button></a>
<a href="a.php"><button class="btn" style="color:black"> <i class="fa fa-user-circle"> <h4 align="center"> Easy Booking </h4> </i></button></a>
 <a href="a.php"><button class="btn" style="color:black"><i class="fa fa-usd"><h4 align="center">  Huge Savings  </h4></i></button></a>
<a href="a.php"><button class="btn" style="color:black"><i class="fa fa-handshake-o"><h4 align="center"> Exclusive Deals  </h4></i> </button></a>
<br>

<div class="row">
  <div class="column">
<a href="lon.html">
<h1 style="margin-left:250px; margin-top:10px; color:green"> LONDON </h1>
    <img src="lon1.jpg" style="width:100%; margin: 30px 40px;"></a>

</div>
  <div class="column">
<a href="can.html">
<h1 style="margin-left:320px; margin-top:10px; color:red;">CANADA </h1> 
   <img src="can.jpg" style="width:100%;  margin: 30px 70px;"></a>
  </div>
</div>
<div class="row">
  <div class="column">
<a href="new.html">
<h1 style="margin-left:250px; margin-top:10px; color:brown;">NEW-YORK </h1>
    <img src="new.jpg" style="width:100%; margin: 30px 40px;"></a> 
</div>
  <div class="column">
<a href="pa.html">
<h1 style="margin-left:320px; margin-top:10px;color:orange;"> PARIS </h1>
    <img src="par.jpg" style="width:100%;  margin: 30px 70px;"></a>
</div>
</div>
<br>


<div class="my">
<h2  style="color:white; margin-left:150px; background-color:black;"> ABOUT US </h2>
<h3 style="margin-left:50px; background-color:black;"><br><span class="do"></span> Travel is the right place to find hotels and fights at the best price.</h3>
<div class="photo">
<a href="https://www.facebook.com/"  class= "fa fa-facebook">  </a>
<a href="https://www.youtube.com/" class= "fa fa-youtube">  </a>
<a href="https://www.instagram.com/accounts/login/?hl=en"  class= "fa fa-instagram">  </a>
<a href="https://twitter.com/login?lang=en"  class= "fa fa-twitter"> </a> </div> <h3 style="margin-left:50px;background-color:black;"><span class="do"> </span> We will help you book tickets for worldwide destinations.</h3>
<div class="eye"> <a href ="privacypolicy.html"><h4  style="color:white; margin-left:1100px;background-color:black;">  Privacypolicy </h4> </a>  </div><h3 style="margin-left:50px;background-color:black;"><span class ="do"> </span> We have access to a global database of hotels and flights by huge<br></h3><h3 style="margin-left:5px;background-color:black;"> travel booking agencies, which allows us to find hotels and flights in <br></h3> <h3 style="margin-left:5px; background-color:black;">real time and compare them with each other.</h3>
<br><h3 style="margin-left:50px;background-color:black;"><span class ="do"> </span>Access over 220 countries, 24 languages and 120 currencies.
</h3></div></div>
<br>

</body

</html>



