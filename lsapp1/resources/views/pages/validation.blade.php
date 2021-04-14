
@extends('layouts.app')
    @section('content')
        
    <div class="container">
			<div class="row">
				<h1 style="text-align: center;"> <b>FORM VALIDATION EXAMPLE</b></h1>
					<div class="col-md-5 col-md-offset-4">
						<br><br>
						 <form class="form-horizontal">
                  <div class="form-group has-success has-feedback">
                    <label class="col-xs-2 control-label">  Password 1 :</label>
                    <div class="col-xs-10"><input class="form-control" type="password" placeholder="Password" name=""/>
                      <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                    <span class="help-block">Strong password</span></div>
                  </div>   <br><br>
                  <div class="form-group has-warning has-feedback">
                    <label class="col-xs-2 control-label">Password 2 :</label>
                    <div class="col-xs-10"><input class="form-control" type="password" placeholder="Password" name=""/>
                       <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
                    <span class="help-block">Weak password</span></div>
                  </div>   
                   
             </form>
					</div>
					
			</div>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    @endsection
