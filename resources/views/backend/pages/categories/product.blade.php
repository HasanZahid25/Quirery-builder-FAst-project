@extends('layouts.backend')
@section('title','dashboard')
@section('contents')

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/5.0.7/sweetalert2.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="d-flex justify-content-between">
  <h2> Products</h2>
  <h3> <a href=" {{ route ('admin.product.create') }} " class="btn btn-sm btn-success">Add New Product</a> </h3>

  </div>
  <table class="table">
    <thead>
      <tr>
        <th>SL.NO</th>
        <th>Product Name</th>
        <th>Description</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @forelse($product as $key=>$value)
      <tr>
        <td>{{$key+1}}</td>
        <td>{{ $value->name}}</td>
        <td>{{ $value->description}}</td>
         <td>
          <a href=" {{ route('admin.product.edit',$value->id) }} "  class="btn btn-sm btn-primary " onclick="return confirm('Are u Edit this Category?')">Edit</a>
          <a href="  {{ route('admin.product.destroy',$value->id) }} " class=" btn btn-sm btn-danger" onclick="return confirm('Are u delete this Product? The record delete permanently if u confirm OK')" >Delete</a>
        <form action="" method="POST">
            @method('DELETE')
        </form>
        </td>
      </tr>

      @empty
      @endforelse
    </tbody>
  </table>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>



</body>
</html>


@endsection

