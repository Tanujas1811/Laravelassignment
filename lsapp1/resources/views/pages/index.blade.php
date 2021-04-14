
@extends('layouts.app')
   
@section('content')
       

    <div class="container">

        <div class="row">
            <div class="col-md-12"> 
                <div class="row"><div class="col-md-12 bg-info"><div class="cus">Header
                           <a href="page2"> <h1 style="color: #800080"><b><i>Click here to view the Image Gallery</i></h1></a>
                           <ul class="nav nav-pills">
                           <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                           <li><a href="#"><span class="glyphicon glyphicon-picture"></span> Gallery</a></li>
                           <li><a href="#"><span class="glyphicon glyphicon-info-sign"></span> About</a></li>
                            </ul>

                     </div></div></div>
                    <div class="row">
                         <div class="col-md-2 bg-success"> <div class="cus1">Left Side Bar<br><br>
                               <h4 style="color:green">Topics covered in bootstrap</h4>
                                 <ul class="list-group">
                                <li class="list-group-item "style="background-color: #D8BFD8;">Lists, Forms, Tables</li>
                                <li class="list-group-item" style="background-color: #D8BFD8;">Well,Jumbotron</li>
                                <li class="list-group-item" style="background-color: #D8BFD8;">Image Gallery</li>
                                <li class="list-group-item" style="background-color: #D8BFD8;">form validation</li>
                                <li class="list-group-item" style="background-color: #D8BFD8;">Nav bar Component, modal popup</li>
                                <li class="list-group-item" style="background-color: #D8BFD8;">Progress bars</li>
                                <li class="list-group-item" style="background-color: #D8BFD8;">Image Carousel</li>
                              </ul>
                          </div></div>
                          <div class="col-md-8 bg-danger"><div class="cus1"> Main Content<br><br><br><br>

                                <div class="list-group"><b>
                                <a href="list" class="list-group-item">List example</a>
                                <a href="form" class="list-group-item">Form and well example</a>
                                <a href="page2" class="list-group-item">Image Gallery</a>
                                <a href="table" class="list-group-item">Table example</a>
                                <a href="validation" class="list-group-item">form validation example <span class="badge">New</span></a>
                                <a href="navbar" class="list-group-item">Navbar Component and modal popup example <span class="badge">New</span></a>
                                <a href="progress" class="list-group-item">Progress bars and jumbotron example <span class="badge">New</span></a>
                                  <a href="carousel" class="list-group-item">Image Carousel example <span class="badge">New</span></a></b>
                                </div>

                

                                </div></div>
                          <div class="col-md-2 bg-success"><div class="cus1">Right Side Bar<br><br>
                            <h4 style="color:green">Assignment</h4>
                                 <ul class="list-group">
                                <li class="list-group-item "style="background-color: #D8BFD8;"><a href="assignment1" class="list-group-item">Image Carousel in modal popup using progress bar<span class="badge">New</span></a></li>
                              </ul>
</div></div>
                         
                           </div>
                     <div class="row"><div class="col-md-12 bg-danger"><div class="cus">Footer</div></div></div>
                    </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
@endsection
 