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
      @isset($category)
        {{ $category->name}} - Edit
        @else
            Add user
        @endisset
      <a href="{{ route('admin.categories.index') }}" class="btn btn-sm btn-danger">BAck</a>
  </h2>
  <form action="{{ isset($category) ? route('admin.categories.update',$category->id) : route('admin.categories.store') }}" method="POST">
      @csrf
      @isset($category)
        @method('PUT')
        <input type="text" name="update_id" value="{{$category->id}}" />
        @endisset
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{ $category->name ?? old('name') }}" >
      @error('name')
      {{ $message}}
      @enderror
    </div>
    <div class="form-group">
      <label for="address">address:</label>
      <input type="address" class="form-control" id="address" placeholder="Enter address" name="address" value="{{ $category->address ?? old('address') }}" >
      @error('address')
      {{ $message}}
      @enderror
    </div>
    <select class="form-select" aria-label="Default select example">
        <option selected>Open this select menu</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    <!-- <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div> -->
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
@endsection
