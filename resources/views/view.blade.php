<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
    <link rel="stylesheet"
    href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet"
    href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    <style>
    button,a {
            display: flex;
  flex-direction: column;
  width: 100%; 
  margin :1px;
  align-items: center;
        }
        </style>
</head>
<body>

   <div class="container">
<table class="table" id="table">
    <thead>
        <tr>
            
            <th class="text-center">No.</th>
            <th class="text-center">First Name</th>
            <th class="text-center">Last Name</th>
            <th class="text-center">Email</th>
            <th class="text-center">Gender</th>
            <th class="text-center">Country</th>
            <th class="text-center">Salary ($)</th>
            <th class="text-center">created_at</th>
            <th class="text-center">updated_at</th>
            <th class="text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        @foreach($user as $users)
            <td>{{$users->id}}</td>
            <td>{{$users->fname}}</td>
            <td>{{$users->lname}} </td>
            <td>{{$users->email}}</td>
            <td>{{$users->gender}}</td>
            <td>{{$users->country}}</td>
            <td>{{$users->salary}}</td>
            <td>{{$users->created_at}}</td>
            <td>{{$users->updated_at}} </td>
            <td> <a href="{{url('home/' .$users->id.'/edit')}}" class="btn btn-primary ">Edit</a> 
                <form action="{{route('home.destroy' ,$users->id )}}"  method="POST">
                    {{method_field('delete')}} 
                   {{@csrf_field()}}
              <button class=" submit btn btn-danger">Delete</button>
                </form></td>
            
         
        </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('home.create') }}" class="btn btn-primary">Insert </a>
</div>

<script src="//code.jquery.com/jquery-1.12.3.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script
    src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<script>
  $(document).ready(function() {
    $('#table').DataTable();
} );
 </script>
 <script>
      
               
    </script>
</body>
</html>