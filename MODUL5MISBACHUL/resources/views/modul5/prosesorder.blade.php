@extends('layout.main2')
@section('title')
inputproduct
@endsection()
@section('container')

<style>
    .teks {
        position: absolute;
        width: 341px;
        height: 5px;
        margin-left: 150px;
    }

    #box {
        position: absolute;
        width: 2000px;
        height: 300px;
        margin-left: 100px;
        background: #FFFFFF;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    }
    #gmbr{
        position: absolute;
        width: 2000px;
        height: 300px;
    }
</style>
<br>
<h3 style="text-align: center;">Order</h3>
<br><br>
<div class="container">
    <div class="row">
        <div class="col-sm">
            <div id="gmbr">
            <img src="sepatu.jpg">
            </div>
        </div>
        <div class="col-sm">

            <h3 class="teks">&nbsp;&nbsp;&nbsp;Nike Zoom Pegasus 35 &nbsp;&nbsp;&nbsp;Turbo Gyakusou Fir</h3>
            <br><br><br>
            <p class="teks">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nike Air Jordan sendiri merupakan sepatu &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;yang didesain untuk para pebasket &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;profesional yang tentunya juga bisa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;digunakan oleh masyarakat awam.</p>
            <br><br><br><br><br>
            <p class="teks">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Stok:10</p>
            <br><br>
            <h3 class="teks">&nbsp;&nbsp;&nbsp;$ 100.00</h3>

        </div>
    </div>
</div>
<br><br><br><br>
<div class="container">
    <h3 style="text-align: center;">Buyer Information</h3>
    <form>
        <div class="form-group">
            <label for="nama">Name</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="">
        </div>
        <div class="form-group">
            <label for="contact">Contact</label>
            <input type="text" class="form-control" id="contact" name="contact" placeholder="">
        </div>
        <div class="form-group">
            <label for="quality">Quality</label>
            <input type="text" class="form-control" id="quality" name="quality" placeholder="">
        </div>
        <button type="button" class="btn btn-success">Submit</button>
    </form>
</div>























@endsection()