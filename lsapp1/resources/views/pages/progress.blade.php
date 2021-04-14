
@extends('layouts.app')
@section('content')
   <div class="jumbotron"> 
      <div class="container">
			<div class="row">
				<h2 style="text-align: center;"> <b>PROGRESS BAR EXAMPLE</b></h2>
        <br><br><br><br>
        <div class="col-xs-5">
          <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-success active" style="width:80%">
                Java: 80%
          </div></div>
          <br><br>
          <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-info active" style="width:70%">
                Bootstrap : 70%
          </div></div>
          <br><br>
          <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-primary active" style="width:75%">
                AWS: 75%
          </div></div>
          <br><br>
          <div class="progress">
          <div class="progress-bar progress-bar-striped progress-bar-warning active" style="width:85%">
                PHP : 85%
          </div></div>
					</div>
			</div>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  @endsection