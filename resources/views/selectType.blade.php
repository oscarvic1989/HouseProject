<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>House Design</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

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

				
                <div class="links">
					@if (Route::has('login'))
						@if (Auth::check())
						<form action="{{ url('/typeSelect') }}" method="POST">
							{!! csrf_field() !!}
                    		<img name="1" id="house" value="0" src='https://cdn4.iconfinder.com/data/icons/miu-shadow-social/48/twitter-128.png'/>
							<img name="2" id="condo" value="0" src='https://cdn4.iconfinder.com/data/icons/miu-shadow-social/48/twitter-128.png'/>
							<input type="hidden" name="selected_image" value="" />
							<br>
			                <button type ="submit" class="btn btn-primary btn-lg">Continue</button>
			             </form>
						<script>
							$('img').click(function(){
							    $('.selected').removeClass('selected');
							    $(this).addClass('selected');
								$(this).attr('value',$(this).attr('name'));
								$("input[name='selected_image']").attr('value',$(this).attr('name'));;
							});
							
							
						</script>
						<script>
							$('form').submit(function () {
							    // Get the Login Name value and trim it
							    var type_1 = $('#house').attr('value');
 								var type_2 = $('#condo').attr('value');
								//alert(type_2);
// 							    // Check if empty of not
 							    if (type_1  == 0 && type_2 == 0) {
   							        alert('Text-field is empty.');
   							        return false;
								}
  								//alert(type_2 == 0);
							});
						</script>
					     @endif
					@endif
                </div>
            </div>
        </div>
    </body>
</html>
