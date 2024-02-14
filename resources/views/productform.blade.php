<!DOCTYPE html>
<html>
<head>
<style> 
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
.alert.alert-success {
  color: #155724;
  background-color: #d4edda;
  border-color: #c3e6cb;
  font-size: 20px;
}
</style>
</head>
<body>
  @if (\Session::has('success'))
<div class="alert alert-success">
<strong>{!! \Session::get('success') !!}</strong>
</div>
@endif
  <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
   @csrf
  <label for="name">Name</label>
  <input type="text" id="name" name="name">
  <label for="price">Price</label>
  <input type="text" id="price" name="price">
  <label for="description">Description</label>
  <input type="text" id="description" name="description">
  <label for="image">Image</label>
  <br>
  <input type="file" id="image" name="image">
  <br>
  <br>
  <input type="submit"  value="Submit">
</form>

<a href="{{ url('/productlisting') }}">View Products</a>

</body>
</html>


