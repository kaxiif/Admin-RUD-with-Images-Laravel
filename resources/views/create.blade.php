
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


  <h2>Add User</h2>

  
   
<form action="/admin" method="POST">
    @csrf
    
    <table>
        <tr>
         <th>Name</th>
         <th>Picture</th>
         <th>Salary</th>
         <th>Email</th>
         <th>Role</th>
         <th>Password</th>
         </tr>

            <tr>
                <td><input type="text" name="name"  placeholder="name"></td>
                <td><input type="text" name="picture"  placeholder="pic.png"></td>
                <td><input type="text" name="salary"  placeholder="5000"></td>
                <td><input type="text" name="email"  placeholder="abc@gmail.com"></td>
                <td><input type="text" name="role" placeholder="Employee"></td>
                <td><input type="password" name="password" placeholder="Password"></td>


                <!-- <input type="file" class="form-control-file" name="fileToUpload" id="exampleInputFile"> -->
                <td>
                <input type="submit" name="submit">
                </td>
        </table> 



</form>
</div>
</div>


</body>
</html>


