<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>






@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        <h2>Employees Details</h2>
        
        <button> <a href="/create">Add User</a></button>
        <br>

        <table>
        <tr>
         <th>Picture</th>
         <th>Employee</th>
         <th>Salary</th>
         <th>Role</th>
         <th>Email</th>
         <th>Edit</th>
         </tr>
         @foreach ($users as $user)

        @if($user->role!='admin')

            <tr>
               <td><img style="width: 150px; height:150px" src="{{asset('storage/images/'.$user->picture)}}"></td>
               <td>{{$user->name}}</td>
                <td>{{$user->salary}}</td>
                <td>{{$user->role}}</td>
                <td>{{$user->email}}</td>
                <!-- <input type="file" class="form-control-file" name="fileToUpload" id="exampleInputFile"> -->
                <td>
                <button> <a href="{{route('admin.edit',$user->id)}}">Edit</a></button>
                    
                  <form action="/admin/{{$user->id}}" method="POST">
                  @csrf
    <input type="hidden" name="_method" value="DELETE">
    <input type="submit" value="DELETE">

</form>
                    
         
               </tr>

         @endif
        

    
    
         
          @endforeach
        </table>        
        
    </div>
</div>
@endsection

</body>
</html>