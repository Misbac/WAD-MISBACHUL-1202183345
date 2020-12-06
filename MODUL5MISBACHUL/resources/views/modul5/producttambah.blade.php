@extends('layout.main')
@section('title')
order
@endsection()
@section('container')

<style>
    #box {
        position: absolute;
        width: 341px;
        height: 500px;
        margin-left: 150px;
        background: #FFFFFF;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    }

    #gbr {
        position: absolute;
        width: 341px;
        height: 197px;
        margin-left: 150px;

    }

    .teks {
        position: absolute;
        width: 341px;
        height: 14px;
        margin-left: 150px;
    }
    #pencet{
        position: absolute;
        margin-left: 170px;
    }
</style>


<br><br><br>
<div class="contaoner">
    <div class="row">
        <div class="col-sm">
            <div id="box"></div>
            <img id="gbr" src="sepatu.jpg">
            <br> <br> <br> <br> <br> <br> <br> <br><br>
            <h3 class="teks">&nbsp;&nbsp;&nbsp;Nike Zoom Pegasus 35 &nbsp;&nbsp;&nbsp;Turbo Gyakusou Fir</h3>
            <br> <br> <br><br>
            <p class="teks">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nike Air Jordan sendiri merupakan sepatu &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;yang didesain untuk para pebasket &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;profesional yang tentunya juga bisa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;digunakan oleh masyarakat awam.</p>
            <br><br><br><br>
            <h3 class="teks">&nbsp;&nbsp;&nbsp;$ 100.00</h3>
            <br><br>
            <div id="pencet">
            <button type="button" class="btn btn-success">Order now</button>
            </div>      
        </div>
    </div>




















    @endsection()