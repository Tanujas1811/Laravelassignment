
@extends('layouts.app')
@section('content')
    
    <div class="container">
			<div class="row">
				<h1 style="text-align: center;"><b>TABLE EXAMPLE</b></h1>
					<div class="col-md-4 col-md-offset-4">
						<br><br>
						 <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped">
                    <thead style="background-color:blue;"><tr><th>Id</th><th>Country Name</th><th>Capital</th><th>Rank</th></tr></thead>
                    <tbody style="background-color:white;"><tr><td>101</td><td>India</td><td>Delhi</td><td>1</td></tr>
                          <tr><td>102</td><td>USA</td><td>Washington D.C</td><td>2</td></tr>
                          <tr><td>103</td><td>UK</td><td>London</td><td>3</td></tr>
                      <tr><td>104</td><td>China</td><td>Beijing</td><td>4</td></tr></tbody>
                  </table>      
             </div>
					</div>
					
			</div>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
@endsection