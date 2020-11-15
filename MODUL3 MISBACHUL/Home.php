<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
    <Style>
      #box{
        position: absolute;
        width: 298px;
        height: 550px;

        background: #FFFFFF;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 5px;
        top: 10px;
        left:100px ;
      }
      .box2{
        position: absolute;
width: 298px;
height: 55px;

background: #FFFFFF;
border: 0.3px solid #000000;
box-sizing: border-box;
      }
      #kiri{
        position: absolute;
        width: 298px;
        height: 280px;

        background: url(esd.jpg);
      }
      #mind{
        position: absolute;
        width: 129px;
        height: 42px;

        font-family: Roboto;
        font-style: normal;
        font-weight: normal;
        font-size: 18px;
        line-height: 21px;

        color: #000000;
        top: 300px;
        left:20px ;
      }
      .bawah{
        font-size: 13px;
      }
      #klik{
        left: 20px;
      }
    </Style>
  </head>
  <body>
  <nav class="navbar navbar-light bg-primary">
  <a class="navbar-brand" href="#" style="color: white;">EAD EVENTS</a>
 
  <form class="form-inline">
   <a class="nav-link active text-light" href="Home.php">Home</a>
   <a class="nav-link active text-light" href="Event.php">Buat Event</a>
   
  </form> 
</nav>
<br>
<h6 style="text-align: center; color:blue;">WELCOME EAD TO EVENTS</h6>
<br><br>
<div class="container">
  <div class="row">
    <div class="col-sm">
      <div id="box">
      <img id="kiri" src="esd.jpg">
    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 
    <h5 id="mind">Open Mind ESD <br>Laboratory</h5>
    <br><br>
    <p class="bawah">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2020-11-13</p>
    <p  class="bawah">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Zoom Meeting</p>
    <p class="bawah">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kategori : Event Online</p>
    <div>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th><div class="col-15">
            <a href="detail.php "><button type="submit" class="btn btn-primary btn-block">Details</button>
          </div></a></th>
         
    </tr>
  </thead>
  </div>
  </div>
</div>
<br>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>