<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>T3h blog</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<a href="javascript:;" >User profile</a>
		<a href="{{route('category.index')}}" >Category management</a>
		<a href="javascript:;" >Post management</a>
		<a href="{{route('logout')}}" >Logout</a>
		<div class="row">
			<table class='table table-striped'>
				<thead>
					<tr>
						<th>ID</th>
						<th>Category name</th>
						<th>Parent</th>
						<th>
							<a id="add-new" href="javascript:;" class="btn btn-success">Add new</a>
						</th>
					</tr>
				</thead>
				<tbody>
				@foreach($cates as $cate)
					<tr>
						<td>{{$cate->id}}</td>
						<td>{{$cate->name}}</td>
						<td>{{$cate->parent_id}}</td>
						<td>
							<button class="btn btn-info">Edit</button>
							<button class="btn btn-danger">Remove</button>
						</td>
					</tr>
				@endforeach	
				</tbody>
			</table>
		</div>
		<div id="cate-modal" class="modal fade " tabindex="-1" role="dialog" >
		  <div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content">
		      	<div class="modal-header">
		        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        	<h4 class="modal-title" id="myModalLabel">Category Modal</h4>
		      	</div>
		       	<div class="modal-body">
		        <form action="{{route('category.add')}}" method="post">
		        	{{csrf_field()}}
		        	<input type="text" name="name" placeholder="Category name">
		        	<br>
		        	<select name="parent_id">
		        		
		        		@foreach($cates as $cate)
							<option value="{{$cate->id}}">{{$cate->name}}</option>
						@endforeach	
		        	</select>
		        	<br>
		        	<button type="submit" class="btn btn-success">Submit</button>
		        </form>
		      	</div>
		    </div>
		  </div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script>
		$(document).ready(function(){
			$('#add-new').on('click', function(){
				$('#cate-modal').modal('show');
			});
		});
	</script>
</body>
</html>