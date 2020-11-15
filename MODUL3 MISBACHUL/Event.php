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
        width: 600px;
        height: 550px;
        
        background: #FFFFFF;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 5px;
        top: 10px;
        left:-45px ;
      }
      #box2{
        position: absolute;
        width: 600px;
        height: 550px;
        
        background: #FFFFFF;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 5px;
        top: -512px;
        right:-630px ;
       
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
   <a class="nav-link active text-light" href="Event.php"><button class="btn btn-outline-light my-2 my-sm-0" type="submit">Buat Event</button></a>
   
  </form>
</nav>
<br>
<h4 style="color: blue;">&nbsp;&nbsp;&nbsp;Buat Event</h4>


<div class="container">
  <div class="row">
    <div class="col">
    <div id="box">
    <div class="card-header" style="background: red;">
    <h3 class="card-title"></h3>
    </div> 
    
    <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="name"><b>Name</b></label>
                    <input type="email" class="form-control" id="name" placeholder="Open MInd ESD Laboratory">
                  </div>

                  <div class="mb-3">
                  <label for="validationTextarea"><b>Deskripsi</b></label>
                  <textarea class="form-control " id="validationTextarea" rows="5px" placeholder="Halo Guys ada info penting nih, besok ESD Laboratory open mind nih Loh!!Jangan sampe ketinggalan yah!" ></textarea>
                 
              </div>
                 
                  <div class="form-group">
                    <label for="exampleInputFile"><b>Upload Gambar</b></label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      
                    </div>
                    <br>
                    <label for="exampleInputFile"><b>Kategori</b></label>
                    <br>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                   <label class="form-check-label" for="inlineRadio1">Online</label>
                  </div>
                 <div class="form-check form-check-inline">
                 <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                  <label class="form-check-label" for="inlineRadio2">Ofline</label>
                 </div>
                <!-- /.card-body -->

               
              </form>
    </div>
    </div>
     <div class="col">
       <div id="box2">
       <div class="card-header" style="background: blue;">
    <h3 class="card-title"></h3>
    </div> 
       <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="tanggal"><b>Tanggal</b></label>
                    <input type="date" class="form-control" id="tanggal" placeholder="">
                  </div>
                  <div class="col-sm-6" style="left: -11px;">
                      <!-- text input -->
                      <div class="form-group">
                        <label><b>Jam Mulai</b></label>
                        <select class="form-control">
                          <option>20.00</option>
                          <option></option>
                         </select>
                      </div>
                    </div>
                    <div style="width: 560px;left: 150px;">
                    <label for="tanggal"><b>Tempat</b></label>
                    <input type="text" class="form-control" id="tanggal" placeholder="">
                  </div>
                  <br>
                  <div style="width: 560px;left: 150px;">
                    <label for="tanggal"><b>Harga</b></label>
                    <input type="text" class="form-control" id="tanggal" placeholder="">
                  </div>
                  <br>
                  <label for="tanggal"><b>Benefit</b></label><br>
                  <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                  <label class="form-check-label" for="inlineCheckbox1">Snacks</label>
                  </div>
                  <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                 <label class="form-check-label" for="inlineCheckbox2">Sertifikat</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                 <label class="form-check-label" for="inlineCheckbox2">Souvenir</label>
                </div>
                <br><br>
                    <div class="bd_example" >
                    <button type="button" class="btn btn-danger float-right">Cancel</button>
                    <div class="col-lg-10 col-5">
                    <button type="button" class="btn btn-primary float-right">Submit</button>
                    </div>
                   
                   
                    <div class="col-sm-6" style="top: -354px; left: 295px;">
                    <div class="form-group">
                        <label><b>Jam Berakhir</b></label>
                        <select class="form-control">
                          <option>21.00</option>
                          <option>/option>
                         </select>
                      </div>
                      <div></div>
                 
                      
                    </div>
                    
              </div>
                <!-- /.card-body -->

               
              </form>
       </div>
     </div>
    
  </div>
</div>

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