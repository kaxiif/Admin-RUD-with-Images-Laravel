
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

  
   
<form action="/admin" method="POST" files="true" enctype="multipart/form-data">
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
                <td><input type="file" name="picture"  ></td>
                <td><input type="text" name="salary"  placeholder="5000"></td>
                <td><input type="text" name="email"  placeholder="abc@gmail.com"></td>
                <td><select id="role" name="role" type="text" >
                  <option value="Employee">Employee</option>
                  <option value="IT">IT</option>
                  <option value="HR">HR</option>
                  <option value="Finance">Finance</option>
              </select></td>
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


