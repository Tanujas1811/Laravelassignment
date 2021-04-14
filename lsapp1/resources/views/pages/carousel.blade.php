@extends('layouts.app')
    @section('content')
        
  
    
    <div class="container">
			<div class="row">
        <h2 style="text-align: center;"><b>Image Carousel Example</b></h2><br><br>
					<div class="col-md-8 col-md-offset-2">
            <div id="imageCarousel" class="carousel slide" data-interval="2000" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#imageCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#imageCarousel" data-slide-to="1"></li>
                <li data-target="#imageCarousel" data-slide-to="2"></li>
                <li data-target="#imageCarousel" data-slide-to="3"></li>
                 <li data-target="#imageCarousel" data-slide-to="4"></li>
              </ol>
              <div class="carousel-inner">
                <div class="item active">
                  <img src="{{ url('/assets/images/p1.jpg') }}" class="img-responsive img-thumbnail" style="height:500px; width:100%" />
                </div>
                 <div class="item">
                  <img src="{{ url('/assets/images/p2.jpg') }}" class="img-responsive img-thumbnail" style="height:500px; width:100%"/>
                </div>
                 <div class="item">
                  <img src="{{ url('/assets/images/p3.jpg') }}" class="img-responsive img-thumbnail" style="height:500px; width:100%"/>
                </div>
                 <div class="item">
                  <img src="{{ url('/assets/images/p4.jpg') }}" class="img-responsive img-thumbnail" style="height:500px; width:100%"/>
                </div>
                <div class="item">
                  <img src="{{ url('/assets/images/p5.jpg') }}" class="img-responsive img-thumbnail" style="height:500px; width:100%"/>
                </div>
                
              </div>
            </div>
            
           </div>
					</div>
					
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
     <script type="text/javascript">
       $(document).ready(function(){
          $('#imageCarousel').carousel();
       });
     </script>
       @endsection
 