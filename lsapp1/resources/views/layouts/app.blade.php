<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap Page1</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <!--<link href="bootstrap/css/bootstrap.css" rel="stylesheet">-->
    <style>
      .cus{
	margin:5px;
	min-height: 100px;
	background-color:#D8BFD8;
	text-align:center;
	font-size: large;
}
.cus1{
	margin:5px;
	min-height: 600px;
	background-color:#FFF0F5;
	text-align:center;
	font-size: large;
}
.thumbnail img{
	height: 250px;
	width:100%;
}
a:link {
  color: blue;
  background-color: transparent;
  text-decoration: none;
}

a:visited {
  color:#900C3F;
  background-color: transparent;
  text-decoration: none;
}

a:hover {
  color: blue;
  background-color: transparent;
  text-decoration: none;
}

a:active {
  color:#900C3F;
  background-color: transparent;
  text-decoration: none;
}
.well{
	background-color: #3CB371;
}

.jumbotron{
	background-color: #FFDAB9;
}

    </style>
   
  </head>
  <body style="background-color:powderblue;">
         @yield('content')
  </body>
</html>