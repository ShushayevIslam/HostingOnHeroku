<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" href="{{ asset('css/app.css')}}">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	

    <style type="text/css">
    	input[type=text] {
  			width: 100%;
  			padding: 12px 20px;
  			margin: 8px 0;
  			display: inline-block;
 			border: 1px solid #ccc;
  			box-sizing: border-box;
		}

		.modal {

  			display: none; /* Hidden by default	 */
  			position: fixed; /* Stay in place */
  			z-index: 1; /* Sit on top */
  			left: 0;
  			top: 0;
  			width: 100%; /* Full width */
  			height: 100%; /* Full height */
  			overflow: auto; /* Enable scroll if needed */
  			background-color: rgb(0,0,0); /* Fallback color */
  			background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  				padding-top: 60px;
		}
		.close {
  			position: absolute;
  			right: 25px;
  			top: 0;
  			color: #000;
  			font-size: 35px;
  			font-weight: bold;
		}

		.close:hover,
		.close:focus {
  			color: red;
  			cursor: pointer;
		}
		.modal-content {

  			background-color: #fefefe;
  			margin: 5% auto 15% auto; 	
  			border: 1px solid #888;
  			width: 50%; 
		}	

		.animate {
  			-webkit-animation: animatezoom 0.6s;
  			animation: animatezoom 0.6s
		}

		@-webkit-keyframes animatezoom {
  			from {-webkit-transform: scale(0)} 
 			 to {-webkit-transform: scale(1)}
		}
  
		@keyframes animatezoom {
  			from {transform: scale(0)} 
  			to {transform: scale(1)}
		}

		body {
  margin: 0 auto;
}
/*@mixin reset-list{
  display: flex;
  flex-direction: row;
}*/
.head {
  display: flex;
  flex-direction: row;
  margin-top: 10px;
  justify-content: center;
}
.title1 {
  display: flex;
  flex-direction: row;
  margin: 0px 150px 0px 20px;
}
.title2 {
  display: flex;
  flex-direction: row;
  margin-left: 30px;
}
.link {
  color: black;
  font-weight: 700;
}
.head_link {
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  margin-left: 40px;
  margin-right: 40px;
  text-align: center;
}

.home_screen {
  background-image: url(https://images.unsplash.com/photo-1503221043305-f7498f8b7888?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1035&q=80);
  background-size: 100% 670px;
  width: 100%;
  height: 670px;
  background-repeat: no-repeat;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.home1 h1 {
  /*width: 800px;
  height: 200px;*/
  font-size: 80px;
}
.home1 {
  width: 1000px;
  height: 200px;
  text-align: center;
}

.ticket {
  display: flex;
  margin-top: 70px;
}
.ticket_inner {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
#home2 {
  margin-top: 50px;
}
.section {
  width: 100%;
  height: 500px;
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
}
.concept {
  /*background-image: url(https://www.lefthudson.com/wp-content/uploads/2019/11/black-minimal-wallpaper-luxury-minimalist-backgrounds-wallpaper-cave-of-the-day-of-black-minimal-wallpaper.jpg);*/
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  z-index: 1;
}
.video {
  position: absolute;
  width: 100%;
}
.control {
  display: flex;
  flex: row;
  justify-content: center;
  text-align: center;
}
.main_txt {
  text-align: center;
  color: white;
}
.btn-white {
  border: solid 2px #fff;
  background: transparent;
  color: #fff;
}
.container {
  display: flex;
  flex-direction: row;
  /*justify-content: center;*/
  justify-content: space-between;
  margin-top: 10px;
}
.main_txt1 {
  text-align: center;
}
/*@mixin bordered($color,$width){
  border: $width solid $color;
}*/
.dimension {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  /*text-align: center;*/
  width: 350px;
  height: 444px;
  border: 1px solid black;
}
.priority {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  height: 270px;
}
#priority_div {
  text-align: center;
}
.priority_padding {
  padding: 20px 0px 10px 0px;
}
/*span{
  font-weight: 700;
}*/
.menu {
  width: 600px;
  height: 1100px;
  /*border: 1px solid black;*/
  text-align: center;
  background-color: #F5CBA7;
}
.tour {
  display: flex;
}
.inform {
  text-align: center;
  width: 900px;
  height: 1100px;
  background-image: url(https://www.clipartkey.com/mpngs/m/216-2165496_japan-map-easy-drawing.png);
  background-repeat: no-repeat;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.itinerary {
  display: flex;
  align-items: center;
  justify-content: space-around;
  margin-top: 10px;
  margin-bottom: 10px;
}
.btn1 {
  background-color: #D35400;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  min-width: 550px;
  margin: 4px 2px;
  opacity: 1;
  transition: 0.3s;
}
.btn1:hover {
  opacity: 0.6;
}
#days {
  width: 900px;
  /*border: 1px solid black;*/
  background-color: #F5CBA7;
  margin: 50px 0px 0px 300px;
}
.style_day {
  display: flex;
  flex-direction: row;
  align-items: center;
  padding-left: 15px;
}
.text {
  color: #D35400;
  padding-left: 10px;
}
#div1 {
  display: none;
}
#div2 {
  display: none;
}
#div3 {
  display: none;
}
#div4 {
  display: none;
}
#div5 {
  display: none;
}
#div6 {
  display: none;
}
.image {
  display: flex;
  justify-content: space-around;
}
.bold {
  font-weight: bold;
}
#logo_comment {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  overflow: auto;
}
.comments {
  display: flex;
  flex-direction: column;
  width: 700px;
  height: 400px;
}
#scroll {
  width: 500px;
  height: 200px;
  border: 1px solid black;
  overflow: scroll;
}
.main_hotel {
  display: flex;
  flex-direction: row;
  height: 800px;
}
.hotels {
  width: 50%;
  height: 700px;
  overflow-y: auto;
  display: flex;
  flex-direction: column;
  margin-left: 10px;
}
.hotel {
  display: flex;
  flex-direction: row;
  /*border: 1px solid black;*/
  height: 200px;
}
.checked {
  color: orange;
}
.hotel_inform {
  margin-left: 15px;
  padding-left: 10px;
  width: 60%;
  background-color: #F5CBA7;
}
.hotel_address {
  font-size: 12px;
}
#video_youTube {
  display: flex;
  flex-direction: column;
  display: none;
  /* Hidden by default */
  position: fixed;
  /* Stay in place */
  z-index: 1;
  /* Sit on top */
  left: 0;
  top: 0;
  width: 100%;
  /* Full width */
  height: 100%;
  /* Full height */
  overflow: auto;
  /* Enable scroll if needed */
  background-color: #000000;
  /* Fallback color */
  background-color: rgba(0, 0, 0, 0.4);
  /* Black w/ opacity */
  padding-top: 60px;
}
.photo_gallery {
  display: flex;
  flex-wrap: wrap;
  width: 100%;
}
.div_photo {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 25%;
  height: 300px;
  border: 1px solid black;
  text-align: center;
}
.photo {
  width: 90%;
  height: 270px;
}
.contact {
  width: 100%;
  height: 400px;
  background-color: black;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.contact_us {
  display: flex;
  flex-direction: row;
}


    </style>
</head>

<body>
  <div id="app">
    <div style="background-color: #343a40;">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark container">
            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav ml-auto">
                    @php $locale = session()->get('locale'); @endphp
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            @switch($locale)
                                @case('en')
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQiDcp0NzmPSKDdkBS8zKOCyrqhaj61QiefNQ&usqp=CAU" width="30px" height="30px"> English
                                @break
                                @case('ru')
                                <img src="https://lh4.googleusercontent.com/proxy/i9ogIzaf7C1idJ3gfbY6MUoxYN49pgb8dmRtCc0d4-jgJpE6WqMmrXsbQbvhkHC-pIYKQ81MaJ7BcGWH0Oy_7TAhCaILIhOI2POl9A7dVC3UskO4pvBimnc3Zd-r9epZGD2Ia3MhhbQcTKKnEg93=s0-d" width="30px" height="30px"> Russian
                                @break
                                @default
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQiDcp0NzmPSKDdkBS8zKOCyrqhaj61QiefNQ&usqp=CAU" width="30px" height="30px"> English
                            @endswitch
                            <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="en"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQiDcp0NzmPSKDdkBS8zKOCyrqhaj61QiefNQ&usqp=CAU" width="30px" height="30px"> English</a>
                            <a class="dropdown-item" href="ru"><img src="https://lh4.googleusercontent.com/proxy/i9ogIzaf7C1idJ3gfbY6MUoxYN49pgb8dmRtCc0d4-jgJpE6WqMmrXsbQbvhkHC-pIYKQ81MaJ7BcGWH0Oy_7TAhCaILIhOI2POl9A7dVC3UskO4pvBimnc3Zd-r9epZGD2Ia3MhhbQcTKKnEg93=s0-d" width="30px" height="30px"> Russian</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
   
</div> 
	<div class="head">
		<div class="title1">
			<img src="https://cdn2.iconfinder.com/data/icons/travel-in-the-world/100/test_9-512.png" width="25px" height="25px">
			<h3 style="font-weight: 1000"><b>JOURNEY</b></h3>
		</div>

		<div class="title2">
			<div class="head_link">
				<img src="https://www.flaticon.com/premium-icon/icons/svg/2920/2920665.svg" width="30px" height="30px">
				<a href="" class="link">{{ __('lang.head1')}}</a>
			</div>

			<div class="head_link">
				<img src="https://www.flaticon.com/svg/static/icons/svg/854/854983.svg" width="30px" height="30px">
				<a href="#table" class="link">{{ __('lang.head2')}}</a>
			</div>
			<div class="head_link">
				<img src="https://as1.ftcdn.net/jpg/02/00/28/50/500_F_200285089_SoxIkcgLeDJ1h6Rdkodq48U5kKa8klR3.jpg" width="30px" height="30px">
				<a href="#hotel_link" class="link">{{ __('lang.head3')}}</a>
			</div>
			<div class="head_link">
				<img src="https://www.flaticon.com/premium-icon/icons/svg/3059/3059502.svg" width="30px" height="30px">
				<a href="#contacts" class="link">{{ __('lang.head4')}}</a>
			</div>
			
		</div>
	</div>

	<div class="home_screen">
		<div class="home1"><h1>A TRAVEL EXPERIENCE LIKE NO OTHER</h1></div>
		<div id="home2"><h1><b>6 days in Tokyo</b></h1></div>

		<div class="ticket">
				<div class="ticket_inner">
				<h6><strong>Number of people</strong></h6>
				<input type="number" name="count_person" min="0" id="num_people"></div>
			<div class="ticket_inner">
				<h6><strong>Check in</strong></h6>
				<input id="datefield" type="date" name="check_in" min="2020-01-12">
			</div>
			<div class="ticket_inner">
				<h6><strong>Check out</strong></h6>
				<input id="dateOut" type="date" name="check_out" min="2020-01-12">
			</div>
			
			<div class="ticket_inner">
				<br>
					<button type="button" class= "btn btn-warning " onclick="document.getElementById('id01').style.display='block'"  >Buy</button>
			</div>
			
	</div>
	</div>

	<div class="modal" id="id01">
		<form class="modal-content animate" action="localhost/project1/public/contact/submit" method="post">
			@csrf
			<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

			<div class="registr">
				<table>
					<tr>
						<th>Enter your first name:</th>
						<td><input type="text" name="clients_name"></td>
					</tr>

					<tr>
						<th>Enter your last name:</th>
						<td><input type="text" name="clients_surname"></td>
					</tr>

					<tr>
						<th>Enter your email:</th>
						<td><input type="email" name="email"></td>
					</tr>

					<tr>
						<th>Enter your gender:</th>
						<td>
							male <input type="radio" name="male">
							female <input type="radio" name="female">
						</td>
						
					</tr>

					<tr>
						<th>Enter your mobile phone:</th>
						<td>
							<input type="text" name="phone_num">
						</td>
					</tr>

					<tr>
						<th>Select file identity:</th>
						<td>
							<input type="file" name="myfile">
						</td>
					</tr>

					<tr>
						<th>Departure Date</th>
						<td>
							<input type="date" name="departure_date">
						</td>
					</tr>

					<tr>
						<th>Departure Date</th>
						<td>
							<input type="date" name="return_date">
						</td>
					</tr>

					<tr>
						<th>Number of people</th>
						<td>
							<input type="number" name="num_of_clients">
						</td>
					</tr>

				</table>

				<input type="submit" name="submit">
			</div>
		</form>
	</div>
 <div class="section">
    <div class="concept">
      <h1 style="color: white; font-size: 50px;
      ">Concept</h1>
      <br>
      <br>
      <p class="main_txt">
        "Using Tokyo as a starting,"
        <br>
        "this new travel concept creates opportunities"
        <br>
        "for visitors to make authentic connections"
        <br>
        "with locals in regional areas."
        <br>
        <br>
        "These one-of-a-kind journeys will"
        <br>
        "have you coming back for more"
      </p>
    <br>
      <button type="button" class="btn btn-white" onclick="document.getElementById('video_youTube').style.display='block'" style="width:auto;">Play Movie</button>
      <div id="video_youTube">
        <iframe width="500" height="400"src="https://www.youtube.com/embed/ei2YGKj7sqw?playlist=ei2YGKj7sqw&loop=1?autoplay=1"></iframe>
        <button class="btn btn-warning" onclick="document.getElementById('video_youTube').style.display='none'">Cancel</button>
      </div>
    </div>
    
    <div class="video">
      <video id="myVideo" autolplay controls>
        <source src="{{ asset('travel.mp4')}}" type="video/mp4">
      </video>  
    </div>
    
  </div>
  <div class="control">
    <button onclick="auto()">autoplay</button>
    <button onclick="contrl()">controls</button>
    <button onclick="loop()">loop</button>
    <button onclick="mute()">mute</button>
  </div>

  <div class="container" >
    <div class="interact dimension">
      <embed src="https://www.odysseyjapan.com/assets/img/icon/tour_interact.svg" width="51px" height="42px">
      <h3 style="width: ">INTERACT WITH LOCALS</h3>
      <p>____</p>
      <p class="main_txt1">
        "ODDYSSEY JAPAN'S programs bring local
        experts and visitors together to engage in fun,"
        <br>
        "These programs are not for the average tourist - they are for the discerning
        traveler who wants to experience daily life and true traditional Japanese hospitality firsthand."
      </p>
    </div>

    <div class="food dimension">
      <embed src="https://www.odysseyjapan.com/assets/img/icon/tour_food.svg" width="61px" height="48px"> 
      <h3>FOOD TOURISM</h3>
      <p>____</p>
      <p class="main_txt1">
        "ODYSSEY JAPAN focuses on high quality dining experiences using locally sourced ingredients."
        <br>
        "Visitors can participate in culinary classes, where locals teach how to prepare local delicacies."
        <br>
        "Attendees can learn new skills and recipes, and then dine together with their teachers."
      </p>
    </div>
    <div class="tasting dimension">
      <embed src="https://www.odysseyjapan.com/assets/img/icon/tour_sake.svg" width="38px" height="45px">
      <h3>SAKE TASTING</h3>
      <p>____</p>
      <p class="main_txt1">
        "Those keen on discovering the true taste of Japan can do so through tastings of the nation’s"
        <br>
        "Sake especially varies greatly between regions — local sommeliers will guide you through a “kikizake” sake tasting experience."
      </p>
    </div>
  </div>

  <br>
  <div class="priority">
    <h1 class="priority_padding">YOUR <span>JOURNEYS</span> IS OUR PRIORITY</h1>
    <div style="width: 800px" id="priority_div" class="priority_padding">Whether you want to know where to go, how to get there, the finest places to stay or what to avoid at all costs, this list is a treasure trove of information for the trip of a lifetime</div>
    <button class="btn1 but" onclick="moveDown()">CONTINUE EXPLORE</button>
  </div>
  <div class="tour" id="table">
    <div class="menu">
      <p><h2>6 DAY ITINERARY</h2></p>
      <p><h1>TOKYO</h1></p>
      <button type="button" class="btn1">DAY 1</button>
      <div class="itinerary">
        <img src="https://i.pinimg.com/564x/d8/47/f7/d847f77914680d79961490b013ef4620.jpg" width="90px" height="70px">
        <p>
          Meiji Shrine
          <br>
          Senso-ji Temple
          <br>
          Nakamise Shopping street
        </p>
      </div>
      <button type="button" class="btn1">DAY 2</button>

      <div class="itinerary">
        <p>
          Mt.Fuji
          <br>
          Lake Kawaguchi
          <br>
          Kachi Kachi Ropeway
        </p>
        <img src="https://i.pinimg.com/564x/9e/80/ef/9e80ef5dc6771937354dc7206d2b5c52.jpg" width="90px" height="70px">
      </div>
      <button type="button" class="btn1">DAY 3</button>
      <div class="itinerary">
        <img src="https://i.pinimg.com/564x/d1/c4/79/d1c47946c87528f1c9667c1210eb56e3.jpg" width="90px" height="70px">
        <p>
          Kiyomizu-dera Temple
          <br>
          Kinkaku-ji Temple
          <br>
          Fushimi Inari-Taisha Shrine
        </p>
        
      </div>
      <button type="button" class="btn1">DAY 4</button>
      <div class="itinerary">
        <p>
          Nijo Castle
          <br>
          Gion District 
          <br>
          Hanami-koji Street
        </p>
        
        <img src="https://www.odysseyjapan.com/assets/img/icon/tour_sake.svg" width="90px" height="70px">
        
      </div>
      <button type="button" class="btn1">DAY 5</button>
      <div class="itinerary">
        <img src="https://i.pinimg.com/564x/d1/c4/79/d1c47946c87528f1c9667c1210eb56e3.jpg" width="90px" height="70px">
        <p>
          Itsukushima Shrine
          <br>
           Itsukushima
        </p>
        
      </div>
      <button type="button" class="btn1">DAY 6</button>
      <p>
        DAY AT TOKYO DISNEYLAND
        <br>
        OR DISNEY SEA
      </p>
    </div>
    <div class="inform">
      <h2 style="font-size: 70px; font-family: 'Raleway',sans-serif"><b>TOUR</b></h2>
      <br>
      <p class="main_txt1" style="font-size: 25px">
        <b>ODYSSEY JAPAN</b> creates unique adventures
        <br>
        through curated tours to rural destinations
        <br>
        by using airports in Tokyo
        <br>
        and other major hubs as gateways for convenient access.
        <br>
        <br>
        This new travel concept, primarily aimed at visitors
        <br>
        from North America, Europe, and Australia,
        <br>
        aims to create memorable journeys to unique
        <br>
        and beautiful areas of Japan that are often overlooked.
        <br>
        <br>
        If you participate in <b>Odyssey Japan</b> tour,
        <br>
        you will have access to premium features
        <br> 
        of <b>Japan Travel</b> by NAVITIME,
        <br>
        an efficient navigation application to travel in."
      </p>
    </div>
  </div>
  <div id="days">
    <div class="day1 style_day">
      <input type="radio" name="" id="radio1">
      <h1 class="text">Day 1 Tokyo Highlights</h1>
    </div>
    <div style="padding-left: 15px;" id="div1">
      <h6>Today, you will have a full-day Tokyo city tour with a private guide by public transportation.</h6>
      <br>
      <h6>The first stop is <strong>Meiji Shrine</strong>,an important Shinto temple dedicated to Emperor Meiji and his wife. Next, head to the <strong>East Garden of the Imperial Palace</strong>, which is the only area open to the public in the palace, and enjoy one art tea ceremony in a tea house. Afterward, spend some time at Senso-ji Temple (also named as Asakusa Temple), the oldest Buddhist temple in Tokyo. Stroll around <strong>Nakamise shopping street</strong> and then be escorted back to your hotel.</h6>
      <br>
      <h6><strong>Overnight:</strong> Tokyo</h6>
      <h6><strong>Meal:</strong> Breakfast</h6>
      <br>
      <div class="image">
        <img src="https://images.odysseytours.net/thumbnail/touritinerary/33000/506850896503224564635/tokyo-tower_30912-315w_100q.jpg" width="300px" height="200px;">
        <img src="https://images.odysseytours.net/thumbnail/touritinerary/33000/764432971439607592/sens-ji-temple-1_30911-315w_100q.jpg" width="300px" height="200px;">
      </div>
    </div>
    <hr>
    <div class="day2 style_day">
      <input type="radio" name="" id="radio2">
      <h1 class="text">Day 2 Tokyo - Mt.Fuji- Tokyo</h1>
    </div>
    <div style="padding-left: 15px;" id="div2">
      <br>
      <h6>At the appointed time, be picked up at hotel and head to <strong>Mt.Fuji</strong> by your English-Speaking driving guide (around 3 hours), you will arrive at Mt. Fuji 5th Station to catch an amazing view of the Fuji Five Lakes below. After that, keep your camera at the ready to snap some shots as you will take a cruise on <strong>Lake Kawaguchi</strong> or hop on the <strong>Kachi Kachi Ropeway</strong> to the scenic overlook. Before returning to Tokyo, make a visit to Iyashi no Sato, which is a historic village located near the lake.</h6>
      <br>
      <h6><strong>Overnight:</strong> Tokyo</h6>
      <h6><strong>Meal:</strong> Breakfast</h6>
      <br>
      <div class="image">
        <img src="https://images.odysseytours.net/thumbnail/touritinerary/33000/52654555206823907421187/mount-fuji-3_30913-315w_100q.jpg" width="300px" height="200px;">
        <img src="https://images.odysseytours.net/thumbnail/touritinerary/33000/13191044968504077538/cruise-on-lake-ashi-2_30914-315w_100q.jpg" width="300px" height="200px;">
      </div>
    </div>
    <hr>
    <div class="day3 style_day">
      <input type="radio" name="" id = "radio3">
      <h1 class="text">Day 3 A Taste of Ancient Japanese</h1>
    </div>
    <div style="padding-left: 15px;" id="div3">
      <h6>Today, you will be escorted by the guide to discover the historic Kyoto by public transportation.</h6>
      <br>
      <h6>A full-day discovery includes <strong>Kiyomizu-dera Temple</strong>, the oldest temple in Kyoto and one of the national architecture treasures of Japan; Sanjusangen-do Temple, which is famous for thousands of vivid statues of Kannon; <strong>Kinkaku-ji Temple</strong>, also named as the Golden Pavilion; <strong>Fushimi Inari-Taisha Shrine</strong> where the pilgrims come to worship for good harvest, prosperity and safety.</h6>
      <br>
      <h6><strong>Overnight:</strong> Tokyo</h6>
      <h6><strong>Meal:</strong> Breakfast</h6>
      <br>
      <div class="image">
        <img src="https://images.odysseytours.net/thumbnail/touritinerary/33000/090943289020647472523/kiyomizu-dera-temple-3_30908-315w_100q.jpg" width="300px" height="200px;">
        <img src="https://images.odysseytours.net/thumbnail/touritinerary/33000/511577682925456712858586/golden-pavillion_30907-315w_100q.jpg" width="300px" height="200px;">
      </div>
    </div>
    <hr>
    <div class="day4 style_day">
      <input type="radio" name="" id = "radio4">
      <h1 class="text">Day 4 Hiroshima</h1>
    </div>
    <div style="padding-left: 15px;" id="div4">
      <h6>Get to Hiroshima Station and take a train to Kyoto by yourself. On arrival, your local guide in Kyoto will meet and escort you to your hotel by public transportation.</h6>
      <br>
      <h6>This afternoon, you will be accompanied to visit the historic <span class="bold">Nijo Castle</span> (if closed, you will visit Ryoan-ji Temple instead) completed in 1626, which was built to provide lodging for Tokugawa Shogun and as a palladium for Kyoto Imperial Palace. Next, enjoy some free time at <span class="bold">Gion District</span> where you may encounter the beautiful Geisha at <span class="bold">Hanami-koji Street</span> if you are lucky. </h6>
      <br>
      <h6><span class="bold">Overnight:</span> Tokyo</h6>
      <h6><span class="bold">Meal:</span> Breakfast</h6>
      <br>
      <div class="image">
        <img src="https://images.odysseytours.net/thumbnail/touritinerary/33000/859493151295945898/nijo-castle-1_30905-315w_100q.jpg" width="300px" height="200px;">
        <img src="https://images.odysseytours.net/thumbnail/touritinerary/33000/3483907169749473465619/eikando-zenrinji-temple-10_30906-315w_100q.jpg" width="300px" height="200px;">
      </div>
    </div>
    <hr>
    <div class="day5 style_day">
      <input type="radio" name="" id = "radio5">
      <h1 class="text">Day 5 Tokyo Miyajima - Hiroshima</h1>
    </div>
    <div style="padding-left: 15px;" id="div5">
    <br>
      <h6>Meet your guide at the hotel lobby, and then be escorted to the pier to take a ferry to Miyajima Island, where you will visit the <span class="bold">Itsukushima Shrine</span> - one of the finest shrines which are renowned for its beautiful Shinden-zukuri style structure. In the afternoon, return to Hiroshima by ferry. End your tour with a visit to Hiroshima Peace Memorial Park & Museum, the Atomic Bomb Dome before getting back to your hotel. </h6>
      <br>
      <h6><span class="bold">Overnight:</span> Tokyo</h6>
      <h6><span class="bold">Meal:</span> Breakfast</h6>
      <br>
      <div class="image">
        <img src="https://images.odysseytours.net/thumbnail/touritinerary/33000/4277682643883107337750/itsukushima-shrine-2_30909-315w_100q.jpg" width="300px" height="200px;">
        <img src="https://images.odysseytours.net/thumbnail/touritinerary/33000/234263997257725600643766999/itsukushima_30910-315w_100q.jpg" width="300px" height="200px;">
      </div>
    </div>
    <hr>
    <div class="day6 style_day">
      <input type="radio" name="" id = "radio6">
      <h1 class="text">Day 6 Disneyland</h1>
    </div>
  </div>
  <br>
  <hr>
  
  <object width="100%" height="500px" data="advertising.html"></object>
  <img src="https://www.trustyou.com/wp-content/uploads/2019/06/hotello-logo.png" height="200px" style="margin: 10px 50px 10px 450px">

  <div class="main_hotel" id="hotel_link">
    <div class="hotels">
      <div class="hotel">
        <img src="https://vr-thumbs.vacationrenter.com/booking/ef3e24c58-29be145.webp" width="200px" height="200px">
        <div class="hotel_inform">
          <p>Room in Hotel</p>
          <p>Hotel Musse Ginza Meitetsu</p>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
          <div class="hotel_address">Located just a 5-minute walk away from Higashi Ginza Station and a 6-minute walk from Shinbashi Station, Hotel Musse Ginza Meitetsu is a Japanese-style business hotel with free WiFi in public areas.</div>
          <p>Price: $112</p>
        </div>
      </div>
      <hr>
      <div class="hotel">
        <img src="https://vr-thumbs.vacationrenter.com/booking/3f84ae6e5-d950361.webp" width="200px" height="200px">
        <div class="hotel_inform">
          <p>Room in Hotel</p>
          <p>Hotel SUI AKASAKA by ABEST</p>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
          <span class="fa fa-star"></span>
          <div class="hotel_address">Offering air-conditioned rooms in the Chuo Ward district of Tokyo, Sotetsu Fresa Inn Ginza Sanchome is 200 metres from Asahi Inari Shrine.</div>
          <p>Price: $58</p>
        </div>
      </div>
      <hr>
      <div class="hotel">
        <img src="https://cf.bstatic.com/xdata/images/hotel/square600/64564815.webp?k=bbcea6239409f6f9c29a756bb0cade638cf4fb8d7a199946454a9ebe7f3b7cbf&o=" width="200px" height="200px">
        <div class="hotel_inform">
          <p>Room in Hotel</p>
          <p>Daiwa Roynet Hotel Ginza Opens</p>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
          <div class="hotel_address">Open from December 2015, Daiwa Roynet Hotel Ginza is located just a 1-minute walk from Ginza Itchome Station on the Yurakucho Line.</div>
          <p>Price: $100</p>
        </div>
      </div>
      <hr>

      <div class="hotel">
        <img src="https://cf.bstatic.com/xdata/images/hotel/square600/193427930.webp?k=b94573b531ca5ed40580c1746c60b42839a779272acd58737ff97f159b465d71&o=" width="200px" height="200px">
        <div class="hotel_inform">
          <p>Room in Hotel</p>
          <p>karaksa hotel premier Tokyo Ginza</p>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
          <div class="hotel_address">Featuring free WiFi, karaksa hotel premier Tokyo Ginza offers rooms in Tokyo, 5 km from Japan Imperial Palace. 5 km from National Diet Building, the property is also 6 km away from Chidorigafuchi.</div>
          <p>Price: $150</p>
        </div>
      </div>

      <hr>
      <div class="hotel">
        <img src="https://cf.bstatic.com/xdata/images/hotel/square600/273044807.webp?k=69bcd4c22e9750eff6c2bece92022080eb127485b58a62e99a7c3e338c35bc71&o=" width="200px" height="200px">
        <div class="hotel_inform">
          <p>Room in Hotel</p>
          <p>HOTEL HILLARYS Akasaka Opens</p>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
          <span class="fa fa-star"></span>
          <div class="hotel_address">Conveniently centered between 3 different train stations, Hotel Felice Akasaka is just a 3-minute walk from Akasaka Station, 4-minutes away on foot from Akasaka-MItsuke Station and a 5-minute stroll...</div>
          <p>Price: $80</p>
        </div>
      </div>
      <hr>
      <div class="hotel">
        <img src="https://cf.bstatic.com/xdata/images/hotel/square600/98617112.webp?k=14d0ab25965cdac734b61f72d6a99694d70be6623efd7c80710dc814d0872de8&o=" width="200px" height="200px">
        <div class="hotel_inform">
          <p>Room in Hotel</p>
          <p>Nishitetsu Inn Shinjuku Opens</p>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
          <span class="fa fa-star"></span>
          <div class="hotel_address">Nishitetsu Inn Shinjuku is a short 2-minute walk from Nishi-Shinjuku Subway Station and an 8-minute walk from Shinjuku Train Station.</div>
          <p>Price: $95</p>
        </div>
      </div>
    </div>

    <div id="map" style="width: 50%; height: 700px"></div>
  </div>
    <p><h1 style="margin-left: 600px">PHOTO GALLERY</h1></p>
    <div class="photo_gallery">
      <div class="div_photo">
        <img src="https://images.odysseytours.net/thumbnail/tour/33000/6028032113897604087/itsukushima-shrine-3_30948-375w_100q.jpg" class="photo" id="img1" onmouseover="mouseOver1()" onmouseout="mouseOut1()">
      </div>
      <div class="div_photo">
        <img src="https://www.traveller.com.au/content/dam/images/h/1/o/b/l/5/image.related.socialLead.620x349.h1obl0.png/1590470104046.jpg" class="photo" id="img2" onmouseover="mouseOver2()" onmouseout="mouseOut2()">
      </div>
      <div class="div_photo">
        <img src="https://images.odysseytours.net/thumbnail/tour/33000/159496813230923362568/village-of-shirakawa_go-gassho_30975-375w_100q.jpg" class="photo" id="img3" onmouseover="mouseOver3()" onmouseout="mouseOut3()">
      </div>
      <div class="div_photo">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQsA4GEz7bjFmDcDGWRfLaBibWjb8u4fBmlY6YJbPh0bMPlfPTqSI-GiMMSGf4ajYqaU4I&usqp=CAU" class="photo" id="img4" onmouseover="mouseOver4()" onmouseout="mouseOut4()">
      </div>
      <div class="div_photo"><img src="https://cdn.tourradar.com/s3/tour/1500x800/176679_77f0287e.jpg" class="photo" id="img5" onmouseover="mouseOver5()" onmouseout="mouseOut5()"></div>
      <div class="div_photo"><img src="https://www.travelcaffeine.com/wp-content/uploads/2017/11/sanrio-puroland-hello-kitty-theme-park-tokyo-japan-072.jpg" class="photo" id="img6" onmouseover="mouseOver6()" onmouseout="mouseOut6()"></div>
      <div class="div_photo"><img src="https://www.odysseyjapan.com/img/share.png?1608529211" class="photo" id="img7" onmouseover="mouseOver7()" onmouseout="mouseOut7()"></div>
      <div class="div_photo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYouLqo2nbB6UhZU-naI4H4P2f6VK1bErABg&usqp=CAU" class="photo" id="img8" onmouseover="mouseOver8()" onmouseout="mouseOut8()"></div>
      

    </div>

    <br>

    <div id="logo_comment" onscroll="myFunction()">
    <div class="comments">
      <div class="head_link">
        <img src="https://www.flaticon.com/svg/static/icons/svg/953/953810.svg" width="25px" height="25px">
        <h4><b>Any comments?<b></h4>
      </div>
      
      <br>
      <form action="localhost/project1/public/comment" method="post">
        @csrf
        <input type="text" name="commentary" style="width: 700px; height: 200px;">
        <br>
        <br>
        <input type="text" name="name" value="Name" style="color: grey; width: 300px;">
        <br>
        <br>
        <input type="text" name="surname" value="Surname" style="color: grey; width: 300px;">

        <br>
        <br>
        <div style="display: flex;flex-direction: row;">
           <input type="email" name="email" value="Email"style="color: grey; width: 300px;">
           <br>
          <input type="submit" name="button">

        </div>
      </form>
      
      
    </div>
    <br>
  </div>
  <br>

    <div class="contact" id="contacts">
      <div class="contact_us">
        <img src="https://www.flaticon.com/svg/static/icons/svg/3062/3062634.svg" style="width: 30px;height: 30px;margin-right: 10px">
        <a href=""><h4>hello@odesseyjapan.com</h4></a>
      </div>
      <br>

      <div class="contact_us">
        <img src="https://as2.ftcdn.net/jpg/02/11/05/75/500_F_211057513_l323AXbeZOVykooVsXmwDFWraOwJlV7N.jpg" style="width: 30px;height: 30px;margin-right: 10px">
        <a href=""><h4>+39 349 8018979</h4></a>
      </div>
      <br>
      <div class="contact_us">
        <img src="https://www.flaticon.com/svg/static/icons/svg/1409/1409946.svg" style="width: 30px;height: 30px;margin-right: 10px">
        <a href="https://www.instagram.com/odysseyjapan/"><h4>Instagram Page</h4></a>
      </div>
      <br>
      <div class="contact_us">
        <img src="https://www.flaticon.com/svg/static/icons/svg/2111/2111398.svg" style="width: 30px;height: 30px;margin-right: 10px">
        <a href="https://www.facebook.com/ODYSSEYJAPAN/"><h4>Facebook <bdo dir="rtl">egaP</bdo></h4></a>
      </div>
      <br>
      <div class="contact_us">
        <img src="https://www.flaticon.com/svg/static/icons/svg/2666/2666455.svg" style="width: 30px;height: 30px;margin-right: 10px">
        <a href=""><h4>Business Cooperation: <bdi>إعلان</bdi></h4></a>
      </div>


    </div>

  <script type="text/javascript">
    $(document).ready(function(){
      $("#radio1").click(function(){
        $("#div1").slideToggle("slow");
      });
    });

    $(document).ready(function(){
      $("#radio2").click(function(){
        $("#div2").slideToggle("slow");
      });
    });
    $(document).ready(function(){
      $("#radio3").click(function(){
        $("#div3").slideToggle("slow");
      });
    });
    $(document).ready(function(){
      $("#radio4").click(function(){
        $("#div4").slideToggle("slow");
      });
    });
    $(document).ready(function(){
      $("#radio5").click(function(){
        $("#div5").slideToggle("slow");
      });
    });

    var vid = document.getElementById("myVideo");
    function auto(){
      if(vid.autoplay){
        vid.autoplay = false;
        vid.load();
      }
      else{
        vid.autoplay = true;
        vid.load();
      }
    }

    function contrl(){
      if(vid.controls){
        vid.controls = false;
        vid.load();
      }
      else{
        vid.controls = true;
        vid.load();
      }
    }

    function loop(){
      if(vid.loop == true){
        vid.loop = false;
        vid.load();
      }
      else{
        vid.loop = true;
        vid.load();
      }
    }

    function mute(){
      if(vid.muted == true){
        vid.muted = false;
        vid.load();
      }
      else{
        vid.muted = true;
        vid.load();
      }
    }
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var yyyy = today.getFullYear();
    if(dd<10){
          dd='0'+dd
      } 
      if(mm<10){
          mm='0'+mm
      } 

    today = yyyy+'-'+mm+'-'+dd;
    document.getElementById("datefield").setAttribute("min", today);

    document.getElementById("dateOut").setAttribute("min", today);

    function mouseOver1(){
      document.getElementById("img1").style.width="100%";
      document.getElementById("img1").style.height="300px";
    }

    function mouseOut1(){
      document.getElementById("img1").style.width="90%";
      document.getElementById("img1").style.height="270px";
    }

    function mouseOver2(){
      document.getElementById("img2").style.width="100%";
      document.getElementById("img2").style.height="300px";
    }

    function mouseOut2(){
      document.getElementById("img2").style.width="90%";
      document.getElementById("img2").style.height="270px";
    }

    function mouseOver3(){
      document.getElementById("img3").style.width="100%";
      document.getElementById("img3").style.height="300px";
    }

    function mouseOut3(){
      document.getElementById("img3").style.width="90%";
      document.getElementById("img3").style.height="270px";
    }

    function mouseOver4(){
      document.getElementById("img4").style.width="100%";
      document.getElementById("img4").style.height="300px";
    }

    function mouseOut4(){
      document.getElementById("img4").style.width="90%";
      document.getElementById("img4").style.height="270px";
    }
    function mouseOver5(){
      document.getElementById("img5").style.width="100%";
      document.getElementById("img5").style.height="300px";
    }

    function mouseOut5(){
      document.getElementById("img5").style.width="90%";
      document.getElementById("img5").style.height="270px";
    }
    function mouseOver6(){
      document.getElementById("img6").style.width="100%";
      document.getElementById("img6").style.height="300px";
    }

    function mouseOut6(){
      document.getElementById("img6").style.width="90%";
      document.getElementById("img6").style.height="270px";
    }
    function mouseOver7(){
      document.getElementById("img7").style.width="100%";
      document.getElementById("img7").style.height="300px";
    }

    function mouseOut7(){
      document.getElementById("img7").style.width="90%";
      document.getElementById("img7").style.height="270px";
    }
    function mouseOver8(){
      document.getElementById("img8").style.width="100%";
      document.getElementById("img8").style.height="300px";
    }

    function mouseOut8(){
      document.getElementById("img8").style.width="90%";
      document.getElementById("img8").style.height="270px";
    }

    function moveDown(){
      window.scrollBy(0,500);
    }

    function buy_tickets(){
      var num = document.getElementById("num_people").value;
      var dateIn = document.getElementById("datefield").value;
      var dataOut = document.getElementById("dateOut").value;
      if(num == 0 || dateIn == '' || dataOut == ''){
        alert("One of the cells is empty");
      }
      else{
        alert("You want to buy a ticket");
      }
    }

        ymaps.ready(init);
        function init() {
        var myMap = new ymaps.Map('map', {
            center: [35.681700, 139.753882],
            zoom: 13,
            controls: []
        });
        var searchControl = new ymaps.control.SearchControl({
              options: {
                provider: 'yandex#search'
            }
        });
    
        myMap.controls.add(searchControl);
        searchControl.search('Hotels');

        myGeoObject = new ymaps.GeoObject({
            geometry: {
              type: 'Rectangle',
              coordinates: [
                  [35.682, 139.780],
                  [35.679, 139.732]
              ]
          },
          properties: {
              hintContent: 'Перетащи меня!',
              balloonContent: 'Прямоугольник 2'
          }
      }, {
          draggable: true,
          fillColor: '#ffff0022',
          strokeColor: '#3caa3c88',
          strokeWidth: 7
      });
        myMap.geoObjects
        .add(myGeoObject);

        var myPolyline = new ymaps.Polyline([
            [35.681700, 139.753882],
            [35.681700, 139.653882],
            [35.781700, 139.753882],
            [35.781700, 139.653882]
        ], {
            balloonContent: "Ломаная линия"
        }, {
            balloonCloseButton: false,
            strokeColor: "#000000",
            strokeWidth: 4,
            strokeOpacity: 0.5
        });

    myMap.geoObjects
        .add(myPolyline);
  }



  function getMessage(){
        $.ajax({
          type:'POST',
          url:'getmsg',
          data:'_token = <?php echo csrf_token() ?>',
          success:function(data){
            $("#msg").html(data.msg);
          }
        });
      }

      var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
      }
    
  </script>
</body>
</html>