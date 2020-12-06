@extends('layout.main2')
@section('title')
listproduct
@endsection()
@section('container')
<br><br>
<h4 style="text-align: center;">List Product</h4>
<br>
<button type="button" class="btn btn-dark" style="margin-left:85px;">Add product</button>
<br><br>
<div class="container">
<table class="table table-dark">
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
</table>
</div>





























@endsection()