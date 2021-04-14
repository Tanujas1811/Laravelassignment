@extends('layouts.app')
    @section('content')
        
   
    <div class="container">
			<div class="row">
				<h1 style="text-align: center;"><b>FORM EXAMPLE</b></h1>
					<div class="col-md-9">
						<br><br>
            <div class="col-md-offset-5 well">
						 <form>

                  <div class="form-group">
                    <label>Name</label>
                    <input class="form-control" type="text" placeholder="Name" name=""/>
                  </div>   
                   <div class="form-group">
                    <label>DOB</label>
                    <input class="form-control" type="date" placeholder="date of birth" name=""/>
                  </div> 
                   <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" type="email" placeholder="Email" name=""/>
                  </div> 
                   <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="password" placeholder="Password" name=""/>
                  </div>    <br><br>
                  <div class="radio">
                    <label><input type="radio" name="n1"/>Option 1</label>
                  </div>
                  <div class="radio disabled">
                    <label><input type="radio" disabled name="n1"/ >Option 2</label>
                  </div>
                  <br><br>
                  <select class="form-control"><option>Maths</option>
                          <option>Physics</option>
                          <option>Chemistry</option>
                          <option>Computer Science</option>

                  </select><br><br><br><br>
                  <button class="btn btn-primary btn-lg">Submit</button>
                  <button class="btn btn-info btn-lg">Reset</button>
             </form>
           </div>
					</div>
					
			</div>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    @endsection
