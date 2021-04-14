     
@extends('layouts.app')

@section('content')
    

        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <nav class="navbar navbar-default navbar-inverse bg-warning navbar-fixed-top">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-target="#main" data-toggle="collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>      </div>

                <div class="navbar-collapse collapse" id="main">
                  <ul class="nav navbar-nav ">
                      <li class="active"><a href="page1.html">Home</a></li>
                      <li><a href="#">About</a></li>
                      <li><a href="#">Contact</a></li>
                      <li><a href="#">Products</a></li>
                  </ul>

                  <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Search" name="">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                  </form>
                  <ul class="nav navbar-nav navbar-right">
                      <li class="active"><button class="btn btn-primary pull-right" data-target="#loginModal" data-toggle="modal">Login</button></li>
                  </ul>

                  
                </div>
                  
             </nav><br><br><br><br><h1 style="text-align: center;"><b>Image carousel in modal popup</b></h1><br><br>
             <div class="col-md-offset-4 col-md-4">
             <button data-target="#myModal" role="button" class="btn btn-info btn-lg" data-toggle="modal">View Image Carousel</button>
         	</div>
			</div>



			<div class="modal modal-white" id="loginModal" tabindex="-1">
               <div class="modal-dialog">
                 <div class="modal-content">
                  <div class="modal-header">
                    <button class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Login</h4></div>
                    
                 </div>
                 
                 <div class="modal-body">
                     <form>

                  <div class="form-group">
                    <label>Name</label>
                    <input class="form-control" type="text" placeholder="Name" name=""/>
                  </div>   
                   <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="password" placeholder="Password" name=""/>
                  </div> 
                    </form>
                 </div>
                  <div class="modal-footer">
                    <button class="btn btn-primary">Login</button>
                    <button class="btn btn-danger" data-dismiss="modal">Close</button>
                 </div>
               </div>
             </div>
  

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title in" id="myModalLabel">Please Wait</h4>
        <div class="modal-title hide" id="myModalLabel"><h2 style="text-align: center;"><b>Image Carousel Example</b></h2><br><br>
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
            
           </div></div>
      </div>
      <div class="modal-body center-block">
        <div class="progress">
          <div class="progress-bar bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
            
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default hide" data-dismiss="modal" id="btnClose">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

     </div></div>

            
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	$('#myModal').modal({
  backdrop: 'static',
  keyboard: false,
  show: false
});

$('#myModal').on('shown.bs.modal', function () {
 
    var progress = setInterval(function() {
    var $bar = $('.bar');

    if ($bar.width()==500) {
      
        // complete!
        
        // reset progree bar
        clearInterval(progress);
        $('.progress').removeClass('active');
        $bar.width(0);
        
        // update modal 
        $('#myModal .modal-body').html('Task complete. You can now close the modal.');
        $('#myModal .hide,#myModal .in').toggleClass('hide in');
        
        // re-enable modal allowing close
        $('#myModal').data('reenable',true);
        $('#myModal').modal('hide');
    } else {
      
        // perform processing logic (ajax) here
        $bar.width($bar.width()+100);
    }
    
    $bar.text($bar.width()/5 + "%");
	}, 600);
  
});

$('#myModal').on('hidden.bs.modal', function () {
    // reset modal
   if ($('#myModal').data('reenable')) {
       $(this).removeData();
       $('#myModal').modal({
          show: true
       });
   }
});

 });
 
</script> 
@endsection
   

 
