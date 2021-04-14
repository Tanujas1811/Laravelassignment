
@extends('layouts.app')
@section('content')
    
    <div class="container">
			<div class="row">
				<h1 style="text-align: center;"> <b>LIST EXAMPLE</b></h1>
					<div class="col-md-6 col-md-offset-4">
						<br><br>
						 <ul class="list-group">
						 	<li class="list-group-item active">Country List</li>
                        <li class="list-group-item list-group-item-primary">India</li>
                        <li class="list-group-item list-group-item-success">USA</li>
                        <li class="list-group-item list-group-item-info">Australia</li>
                        <li class="list-group-item list-group-item-warning">Antarctica</li>
                        <li class="list-group-item list-group-item-dark">Russia <span class="badge">New</span></li>
                      </ul>
					</div>
					
			</div>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  @endsection