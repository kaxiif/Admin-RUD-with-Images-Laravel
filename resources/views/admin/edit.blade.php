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


  <h2>Edit page</h2>

  
   
<form action="/admin/{{$user->id}}" method="POST" files="true" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <table>
        <tr>
         <th>Name</th>
         <th>Picture</th>
         <th>Salary</th>
         <th>Email</th>
         <th>Role</th>
         </tr>

            <tr>
                <td><input type="text" name="name" value="{{$user->name}}" placeholder="{{$user->name}}"></td>
                <td><input type="file" name="picture" value="{{$user->picture}}" ></td>
                <td><input type="text" name="salary" value="{{$user->salary}}" placeholder="{{$user->salary}}"></td>
                <td><input type="text" name="email" value="{{$user->email}}" placeholder="{{$user->email}}"></td>
                <td><input type="text" name="role" value="{{$user->role}}" placeholder="{{$user->role}}"></td>


                <!-- <input type="file" class="form-control-file" name="fileToUpload" id="exampleInputFile"> -->
                <td>
                <input type="submit" name="submit">
                </td>
                <img src="/images/{{ Session::get('path') }}" width="300" />
        </table> 



</form>
</div>
</div>


</body>
</html>


