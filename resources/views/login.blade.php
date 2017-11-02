<!doctype html>
<html>
	<head>

		   <link rel="stylesheet" href="{{asset('css/app.css')}}">
		<script src='js/app.js'></script>

		<title>Joggin Festival</title>
	</head>
	<body style="background-color: #E9E581">
	    <div class='container-fluid'>
            <div class="row">
				<div class="col-sm-12">
					<center>
						<h1 style="font-family: Tangerine; text-shadow:5px 5px 5px 	#ac5353;
    color: white">DAR ES SALAAM JOGGING SPORTS FESTIVAL<br> Registration System<br> 
						</h1>
					</center>
			</div>


		    <div class='row'></div>
			<div class='col-md-12'><center>
			    {{$status}}

                    <form action='login' method='post'>
					   
		                <div class="row">
                            <div class="col-md-4"></div>
                                <div class="form-group col-md-4">
                                    <label for="username">Name:</label>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="text" class="form-control" name="username">
                                </div>
                        </div>
                        <div class="row">
                             <div class="col-md-4"></div>
                                <div class="form-group col-md-4">
                                    <label for="pasword">Pasword:</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4"></div>
                                <div class="form-group col-md-4">
                                    <button type="submit" class="btn btn-success" style="margin-left:38px">Login
                                    </button>
                                    <p>Not registered?  <a href="{{ route('register') }}">Register here</p>
                                </div>
                        </div>
				    </form>
			    </center>
			</div>
		</div>
	</body>
</html>
