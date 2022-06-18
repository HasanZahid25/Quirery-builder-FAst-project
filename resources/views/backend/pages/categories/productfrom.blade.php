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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>
      @isset($product)
        {{ $product->name}} - Edit
        @else
            Add Product
        @endisset
      <a href="{{ route('admin.product.index') }}" class="btn btn-sm btn-danger">BAck</a>
  </h2>
  <form action="{{ isset($product) ? route('admin.product.update',$product->id) : route('admin.product.store') }}" method="POST">
      @csrf
      @isset($product)
        @method('PUT')
        <input type="text" name="update_id" value="{{$product->id}}" />
        @endisset
    <div class="form-group">
      <label for="name">Product Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{ $product->name ?? old('name') }}" >
      @error('name')
      {{ $message}}
      @enderror
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <input type="description" class="form-control" id="description" placeholder="Enter description" name="description" value="{{ $product->description ?? old('description') }}" >
      @error('description')
      {{ $message}}
      @enderror
    </div>
    <!-- <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div> -->
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
@endsection
