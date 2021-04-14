@extends('layouts.app')
  @section('content')
      
 
    
    <div class="container">
			<div class="row">
					<div class="col-lg-12">
						<h1 style="text-align:center;">Image Gallery</h1>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 bg-success">
						<a href="img1" class="thumbnail">
							<p style="text-align:center;">Image 1</p>
							<img src="{{ url('assets/images/p1.jpg') }}" class="img-responsive img-thumbnail"/>
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 bg-warning">
						<a href="img2" class="thumbnail">
							<p style="text-align:center;">Image 2</p>
							<img src="{{ url('assets/images/p2.jpg') }}" class="img-responsive img-thumbnail"/>
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 bg-danger">
						<a href="img3" class="thumbnail">
							<p style="text-align:center;">Image 3</p>
							<img src="{{ url('/assets/images/p3.jpg') }}" class="img-responsive img-thumbnail"/>
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 bg-warning">
						<a href="img4" class="thumbnail">
							<p style="text-align:center;">Image 4</p>
							<img src="{{ url('/assets/images/p4.jpg') }}" class="img-responsive img-thumbnail"/>
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 bg-info">
						<a href="Images/p5.jpg" class="thumbnail">
							<p style="text-align:center;">Image 5</p>
							<img src="{{ url('/assets/images/p5.jpg') }}" class="img-responsive img-thumbnail"/>
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 bg-success">
						<a href="Images/p6.jpg" class="thumbnail">
							<p style="text-align:center;">Image 6</p>
							<img src="{{ url('/assets/images/p6.jpg') }}" class="img-responsive img-thumbnail"/>
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 bg-warning">
						<a href="Images/p7.jpg" class="thumbnail">
							<p style="text-align:center;">Image 7</p>
							<img src="{{ url('/assets/images/p7.jpg') }}" class="img-responsive img-thumbnail"/>
						</a>
					</div>
					<div class="col-lg-3 col-md-4 col-sm-6 bg-info">
						<a href="Images/p8.jpg" class="thumbnail">
							<p style="text-align:center;">Image 8</p>
							<img src="{{ url('/assets/images/p8.jpg') }}" class="img-responsive img-thumbnail"/>
						</a>
					</div>
					
			</div>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    @endsection