
@extends('layouts.app')
@section('content')
        <div class="container">
          <div class="row">
            <div class="col-md-12">
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
                  
             </nav>
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
                <br><br><br><br>
                 <img src="{{ url('/assets/images/p1.jpg') }}" class="center-block img-responsive img-thumbnail" width="400" height="400" />
                  <br><br>
                <b>Description</b>

          <h6>Sparrows are small birds. They are between 11–18 centimeters long. They can weigh between 13–42 grams. They are usually brown and gray. They have short tails and small, strong beaks. Most sparrows eat seeds or small insects. Sparrows are social birds and they live in flocks (groups).</h6>


          <b>A male house sparrow</b>

          <p>File:One sparrow then another.ogv
            Male chirping, female looking around.
            The house sparrow (Passer domesticus) is a species of sparrow. It lives all over the world. It originally lived only in Europe and Asia. However, people travelled to new places and the house sparrow went to those places too. It is now the bird with the widest distribution. This means it lives in the most places. The species has about 50 subspecies.</p>

            <b>Distribution</b>
            <p>Sparrows can be seen on every continent on earth. A long time ago, they lived only in Europe, Asia and Africa. However, people traveled to Australia, North America and South America, and now sparrows are seen there too. The house sparrow is seen in every continent. In Australia, there are no sparrows in Western Australia, as they have not been able to travel across the deserts that separate that state from the eastern states.[2] The government employs people to hunt and destroy any sparrows that might arrive.</p>

            <b>North America</b>

            <p>The house sparrow was introduced to America in the late 19th century. It was introduced on purpose. It was imported by several people, including Eugene Schieffelin, who was a wealthy New York City admirer of Shakespeare. He wanted to introduce to America all the birds mentioned in the works of Shakespeare. Two of these species were great successes: starlings and house sparrows. He organized a society for the importation of foreign birds, incorporated in </p>
             <p>File:One sparrow then another.ogv
            Male chirping, female looking around.
            The house sparrow (Passer domesticus) is a species of sparrow. It lives all over the world. It originally lived only in Europe and Asia. However, people travelled to new places and the house sparrow went to those places too. It is now the bird with the widest distribution. This means it lives in the most places. The species has about 50 subspecies.</p>

            <b>Distribution</b>
            <p>Sparrows can be seen on every continent on earth. A long time ago, they lived only in Europe, Asia and Africa. However, people traveled to Australia, North America and South America, and now sparrows are seen there too. The house sparrow is seen in every continent. In Australia, there are no sparrows in Western Australia, as they have not been able to travel across the deserts that separate that state from the eastern states.[2] The government employs people to hunt and destroy any sparrows that might arrive.</p>

            <b>North America</b>

            <p>The house sparrow was introduced to America in the late 19th century. It was introduced on purpose. It was imported by several people, including Eugene Schieffelin, who was a wealthy New York City admirer of Shakespeare. He wanted to introduce to America all the birds mentioned in the works of Shakespeare. Two of these species were great successes: starlings and house sparrows. He organized a society for the importation of foreign birds, incorporated in </p></div></div></div>
            
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
 @endsection