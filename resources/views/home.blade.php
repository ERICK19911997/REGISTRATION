<!doctype html>
<html>
	<head>

		<!-- Csrf token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet"
			href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script
			src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
		</script>

		<!-- Latest compiled JavaScript -->
		<script
			src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
		</script>

		<script language="javascript" type="text/javascript">

		        function add(){
		            var title = $("#title").val();
		            var url = $("#url").val();
								var description = $("#description").val();
								var status = $("#status").val();

		            var user_data = {
		                'title': title,
		                'url': url,
										'description': description,
										'status': status
		            };

		            if(title == ''){
		                var str="Please enter the title";
		                $( "#alerts1" ).html( str );
		            }else if(url == ''){
		                var str="Please enter the url";
		                $( "#alerts1" ).html( str );
		            }else if(description == ''){
		                var str="Please enter a short description";
		                $( "#alerts1" ).html( str );
		            }else {
										$('#video_modal').modal('hide');
		                $.ajaxSetup({
		                    headers: {
		                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		                    }
		                });
		                $.ajax({
		                    type: 'post',
		                    dataType: 'html',
		                    url: "video/create",
		                    cache: false,
		                    data: user_data,
		                    success: function (result) {
		                            window.location.href = "{{ url('home') }}";
		                    }
		                });
		            }
		        }

						function save(){
		            var title = $("#edit_title").val();
		            var url = $("#edit_url").val();
								var description = $("#edit_description").val();
								var status = $("#edit_status").val();

		            var user_data = {
		                'title': title,
		                'url': url,
										'description': description,
										'status': status
		            };

		            if(title == ''){
		                var str="Please enter the title";
		                $( "#alerts2" ).html( str );
		            }else if(url == ''){
		                var str="Please enter the url";
		                $( "#alerts2" ).html( str );
		            }else if(description == ''){
		                var str="Please enter a short description";
		                $( "#alerts2" ).html( str );
		            }else {
										$('#edit_video').modal('hide');
		                $.ajaxSetup({
		                    headers: {
		                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		                    }
		                });
		                $.ajax({
		                    type: 'post',
		                    dataType: 'html',
		                    url: "video/update",
		                    cache: false,
		                    data: user_data,
		                    success: function (result) {
		                            window.location.href = "{{ url('home') }}";
		                    }
		                });
		            }
		        }

						function view(id) {
									var link = "video/" + id;
									$.ajax({
							        url: link,
							        dataType:'html',
							        success:function(result){
							            $("#main_content").html(result);
							        }
							    });
						}

		    </script>

		<style>
		.panel-heading h3 {
			white-space: nowrap;
			overflow: hidden;
			text-overflow: ellipsis;
			line-height: normal;
			width: 75%;
			/*padding-top: 8px;*/
		}
		.container-fluid {
			margin-top: 20px;
		}
		</style>

		<title>Joging Registration Portal</title>
	</head>
	<body class="container-fluid">
		<div class="container-fluid" id="main_content">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title pull-left">Users</h3>
					<button class="btn btn-primary pull-right"
					   data-toggle="modal" data-target="#video_modal">Add New</button>
        	<div class="clearfix"></div>
				</div>
					<!-- Modal -->
            <div id="video_modal" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close"
                      data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">New User</h4>
                    </div>
                    <div class="modal-body">
                      <form name="video" id="new_video">
                        <div class="container">
													<div style="padding: 10px; color: #a52a2a; text-align: center;
														font-size: 12px; font-weight: normal" id="alerts1">
													</div>
                        <div class="form-group">
                          <label for="title">First Name:</label></br>
                          <input type="text" name="title" id="title"
                            placeholder="Title">
                        </div>
                        <div class="form-group">
                          <label for="url">Second Name:</label></br>
                          <input type="text" name="url" id="url"
                            placeholder="Url">
                        </div>
                        <div class="form-group">
                          <label for="description">Adress:</label></br>
                          <textarea name="description"
                            id="description"
                            placeholder="Short description ..."
                            rows="10" cols="30">
                            </textarea>
                        </div>
												<div class="form-group">
                          <label for="status">Status:</label></br>
                          <select name="status" id="status">
														<option>Player</option>
														<option>Team Leader</option>
													</select>
                        </div>
                        <div class="form-group">
                          <button type="button" class="btn btn-default"
                            data-dismiss="modal">Cancel</button>
													<button type="button" class="btn btn-primary"
                            onclick="add()">Add</button>
                        </div>
                      </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div><!-- Modal end-->

							<!-- Modal -->
								<div id="edit_video" class="modal fade" role="dialog">
									<div class="modal-dialog">
										<!-- Modal content-->
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close"
													data-dismiss="modal">&times;</button>
													<h4 class="modal-title">Edit User</h4>
												</div>
												<div class="modal-body">
													<form name="edit_video" id="edit_video">
														<div class="container">
															<div style="padding: 10px; color: #a52a2a; text-align: center;
																font-size: 12px; font-weight: normal" id="alerts2">
															</div>
														<div class="form-group">
															<label for="edit_title">First name:</label></br>
															<input type="text" name="title" id="edit_title"
																placeholder="Title">
														</div>
														<div class="form-group">
															<label for="edit_url">Second Name:</label></br>
															<input type="text" name="url" id="edit_url"
																placeholder="Url">
														</div>
														<div class="form-group">
															<label for="edit_description">Address:</label></br>
															<textarea name="description"
																id="edit_description"
																placeholder="Short description ..."
																rows="10" cols="30">
																</textarea>
														</div>
														<div class="form-group">
															<label for="edit_status">Status:</label></br>
															<select name="status" id="edit_status">
																<option>Player</option>
																<option>Team Leader</option>
															</select>
														</div>
														<div class="form-group">
															<button type="button" class="btn btn-default"
																data-dismiss="modal">Cancel</button>
															<button type="button" class="btn btn-primary"
																onclick="save()">Save</button>
														</div>
													</div>
													</form>
												</div>
											</div>
										</div>
									</div><!-- Modal end-->

			  <div class="panel-body">
					<div class="table-responsive">
						<table class="table table-striped">
								<thead>
									<tr>
										<th>First Names</th>
										<th>Second Names</th>
										<th>Address</th>
										<th>Status</th>
										<th>View</th>
										<th>Edit</th>
										<th>Delete</th>
									</tr>
								</thead>
								<tbody>
									@foreach($videos as $video)
										<tr>
											<td>{{ $video->title }}</td>
											<td>{{ $video->url }}</td>
											<td>{{ $video->description }}</td>
											<td>{{ $video->status }}</td>
											<td>
												<button type="button" class="btn btn-info"
													onclick="view({{ $video->id }})">
	          							<span class="glyphicon glyphicon-eye-open"></span>
	        							</button>
											</td>
											<td>
												<a class="btn btn-info"
													data-toggle="modal" data-target="#edit_video">
	          							<span class="glyphicon glyphicon-pencil"></span>
	        							</a>
											</td>
											<td>
												<a class="btn btn-danger">
	          							<span class="glyphicon glyphicon-trash"></span>
	        							</a>
											</td>
										</tr>
									@endforeach
								</tbody>
						</table>
					</div>
				</div>
			  <div class="panel-footer">Copyright &copy; WebPesa 2017</div>
			</div>
		</div>
	</body>
</html>
