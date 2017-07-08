<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>House Design</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<link rel="stylesheet" href="../css/bootstrap-dropdownhover.min.css" type="text/css" >
		<link rel="stylesheet" href="../css/animate.css" type="text/css">
		<link rel="stylesheet" href="../css/animate.min.css" type="text/css">
		<link rel="stylesheet" href="../css/bootstrap-dropdownhover.css" type="text/css">
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 			integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" 			integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" 			integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <!-- Styles -->
        
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
			
			img{border:solid 1px; margin:10px;}
				.selected{
			    box-shadow:0px 12px 22px 1px #333;
			}
        </style>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>
		
		<script src="../js/bootstrap-dropdownhover.js" type="text/javascript"></script>
		<script src="../js/bootstrap-dropdownhover.min.js" type="text/javascript"></script>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    House Design
                </div>

				
                <div>
					@if (Route::has('login'))
						@if (Auth::check())
						<div class="dropdown">
						  
						  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown">
						   Dropdown <span class="caret"></span>
						  </button>
						  <ul class="dropdown-menu">
						    <li><a href="{{ url('houser_L1_Blue/'.$house->id) }}">Action</a></li>
						    <li><a href="{{ url('houser_L1_Blue/'.$house->id) }}">Another action</a></li>
						    <li class="dropdown">
						      <a href="#">One more dropdown</a>
						      <ul class="dropdown-menu">
						        <li><a href="#">Action</a></li>
						        <li><a href="#">Another action</a></li>
						        <li class="dropdown">
						          <a href="#">One more dropdown</a>
						          <ul class="dropdown-menu">
								  	<li><a href="#">Action</a></li>
								    <li><a href="#">Another action</a></li>
						          </ul>
						        </li>
						        <li><a href="#">Something else here</a></li>
						        <li><a href="#">Separated link</a></li>
						       </ul>
						    </li>
						    <li><a href="#">Something else here</a></li>
						    <li><a href="#">Separated link</a></li>
						  </ul>
						  
						</div>
						
						
						  
					     @endif
					@endif
                </div>
				
				
            </div>
        </div>
    </body>
</html>
