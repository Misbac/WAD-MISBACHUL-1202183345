@extends('layout.main2')
@section('title')
inputproduct
@endsection()
@section('container')


<div class="container">
    <from>
        <div class="form-group">
            <label for="nama">Product name</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="">
        </div>
        <label for="deskripsi">Price</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">$ USD</span>
            </div>
            <input type="text" class="form-control">

        </div>
        <br>
        <div class="form-group">
            <label for="deskripsi">Description</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="stok">Stok</label>
            <input type="email" class="form-control" id="stok" name="stok" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Image file input</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>
        <button type="button" class="btn btn-dark">Submit</button>



    </from>
</div>

































@endsection()