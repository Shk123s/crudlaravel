<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
    href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet"
    href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container my-2">
<div class="container">
  @php
  @endphp
  @if(Session::has('errors'))
  <div class="alert alert-danger">
  {{ session('errors') }}
</div>
@endif
<form  method="POST" action="{{route('home.store')}}" >
{{csrf_field()}}
  <div class="form-group"> 
    <label for="exampleInputEmail1">fname</label>
    <input  name="fname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter fname">
    <small id="emailHelp" class="form-text text-muted">We'll never share your fname with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">lname</label>
    <input  name="lname"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter lname">
    <small id="emailHelp" class="form-text text-muted">We'll never share your lname with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input  name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label  for="exampleInputEmail1">Gender</label>
    <input  name="gender" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Gender">
    <small id="emailHelp" class="form-text text-muted">We'll never share your Gender with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">country</label>
    <input name="country" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter country">
    <small id="emailHelp" class="form-text text-muted">We'll never share your country with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Salary</label>
    <input name="salary" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Salary">
    <small id="emailHelp" class="form-text text-muted">We'll never share your salary  with anyone else.</small>
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</body>
</html>