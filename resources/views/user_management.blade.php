<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <style>
            body{
                background-color:lightgray;
                font-size: large;
                row-gap: 8;
                justify-content: center;
                background-color:#D7D7D7;  
            }
                        table{
                            width:100%;
                        }
                        td form {
                            margin:0;padding:0;
                        }
                        td form button.button{
                            padding:0.25em;margin:0.25em;
                            background:none;
                            color:blue;
                        }
                        td form button.button:hover{
                        background:none;
                            color:steelblue;
                        }
                        .btn{
                            background:#2ecc71;
                            width:85px;
                            padding-top:5px;
                            padding-bottom:5px;
                            color:white;
                            border-radius:4px;
                            border: #27ae60 1px solid;
                            margin-top: 50px;
                            font-size: 14px;
                            font-weight: 600;
                            text-decoration: none;
                            float: right;
            }
                        .btn1{
                            margin: 10px;
                            float: right;
                            background:#FF3333;
                            width:85px;
                            padding-top:5px;
                            padding-bottom:5px;
                            color:white;
                            border-radius:4px;
                            border: #27ae60 1px solid;
                            margin-top: 50px;
                            font-size: 14px;
                            font-weight: 600;
                            text-decoration: none;
                        }
    </style>
</head>

<body>
<div class="row">
  <div class="large-12 columns">
		<h1>User Management</h1>
		<a href="#" class="btn">Add User</a>
        <a href="#" class="btn1">Delete User</a>
    <table id="test-table" style="margin: auto;">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Role</th>
          <!-- <th>Member Since</th>
          <th>Last Login</th> -->
	      <th>Action</th>
        </tr>
      </thead>

        <table id="test-table">
        <tr>
          <td>1</td>
          <td>Test</td>
          <td>Admin</td>
          <!-- <td>27/05/2021</td>
          <td>29/08/2022</td> -->
          <td>Active</td>

        </tr>
        <tr>
          <td>lorem1</td>
          <td>lorem2</td>
          <td>lorem3</td>
          <td>lorem4</td>
          <td>lorem5</td>
        </tr>
        <tr>
          <td>lorem1</td>
          <td>lorem2</td>
          <td>lorem3</td>
          <td>lorem4</td>
          <td>lorem5</td>
        </tr>
        <tr>
          <td>lorem1</td>
          <td>lorem2</td>
          <td>lorem3</td>
          <td>lorem4</td>
          <td>lorem5</td>
        </tr>
      <!-- </tbody> -->
    </table>

  </div>
</div>
</body>
</html>