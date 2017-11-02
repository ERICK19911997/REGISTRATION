<!doctype html>
<html>
	<head>

		   <link rel="stylesheet" href="{{asset('css/app.css')}}">
		<script src='js/app.js'></script>

		<title>Registration system</title>
	</head>
	<body style="background-color: #E9E581">
	    <div class='container-fluid'>
            <div class="row">
				<div class="col-sm-12"></div>
					<center>
						<h1 style="font-family: Tangerine;">JOGGING FESTIVAL<br> 
						</h1>
					</center>
			</div>


		    <div class='row'></div>
			<div class='col-md-12'>
			    <center>

                    <form action='login' method='post'>
					   
		                <div class="row">
                            <div class="col-md-4"></div>
                                <div class="form-group col-md-4">
                                    <label for="name">Name:</label>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="text" class="form-control" name="name">
                                </div>
                        </div>
                 
                        <div class="row">
                             <div class="col-md-4"></div>
                                <div class="form-group col-md-4">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email">
                                </div>
                        </div>



                        <div class="row">
                             <div class="col-md-4"></div>
                                <div class="form-group col-md-4">
                                    <label for="username">User Name</label>
                                    <input type="text" class="form-control" name="username">
                                </div>
                        </div>

                       
                          <div class="row">
                             <div class="col-md-4"></div>
                                <div class="form-group col-md-4">
                                    <label for="pasword">Pasword</label>
                                    <input type="pasword" class="form-control" name="pasword">
                                </div>
                        </div>


                        <div class="row">
                            <div class="col-md-4"></div>
                                <div class="form-group col-md-4">
                                    <button type="submit" class="btn btn-success" style="margin-left:38px">Register
                                    </button>
                                </div>
                        </div>
				    </form> 
			    </center>
			</div>
		</div>
	</body>
</html>
