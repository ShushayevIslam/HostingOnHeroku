<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" href="{{ asset('css/app.css')}}">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
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

    </style>
</head>

<body>
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
						<th>Select the file to upload:</th>
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
<div style="width: 500px;">
	<canvas id="myChart"></canvas>
</div>

<div style="width: 500px;">
	<canvas id="myChart2"></canvas>
</div>

<div style="width: 500px;">
	<canvas id="myChart3"></canvas>
</div>

<script type="text/javascript">
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

    	
    	window.onload = function(){

    	 var ctx = document.getElementById("myChart");
    	 ctx.height = 80;
    	 var myChart = new Chart(ctx, {
      type: 'bar',
         data: {
            labels: ["2005", "2007" , "2009" , "2012", "2014"],
            datasets: [
               { label: 'Most travel years',
               data: [50,80,100,120,150],
               backgroundColor :['rgba(255, 129, 102, 1)',
               'rgba(234, 162, 235, 1)',
               'rgba(255, 206, 36, 1)',
               'rgba(75, 192, 192, 1)',
               'rgba(153, 102, 255, 1)',
            ],
         }
      ]
   },
   options: {
      scales: {
         yAxes: [{
            ticks: {
               beginAtZero:true
            }
         }]
      }
   }
});
    	}



    	 var ctx = document.getElementById("myChart2");
    	 ctx.height = 80;
    	 var myChart = new Chart(ctx, {
      type: 'pie',
         data: {
            labels: ["Almaty","Karaganda","Aktobe","Astana"],
            datasets: [
               { label: 'Kazakhstan travellers',
               data: [45,10,15,30],
               backgroundColor :['rgba(255, 129, 102, 1)',
               'rgba(234, 162, 235, 1)',
               'rgba(255, 206, 36, 1)',
               'rgba(75, 192, 192, 1)',
            ],
         }
      ]
   },
   options: {
      scales: {
         yAxes: [{
            ticks: {
               beginAtZero:true
            }
         }]
      }
   }
});
   

   var ctx = document.getElementById("myChart3");
    	 ctx.height = 80;
    	 var myChart = new Chart(ctx, {
      	"type": "line",
         "data": {
            "labels": ["January","February","March","April","May","June","July","August","September","October","November"],
            "datasets": [
               { "label": 'Kazakhstan travellers',
               "data": [565,875,2645,1300,1800,5000,5655,6000,3000,2782,1970],
               "fill":false,"borderColor":"rgb(75,192,192)","lineTension":0.1
         }
      ]
   },
   options: {
      scales: {
         yAxes: [{
            ticks: {
               beginAtZero:true
            }
         }]
      }
   }
});
   

    </script>
</body>
</html>