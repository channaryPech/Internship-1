<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #D7D7D7;
            background-attachment: fixed;
            background-size: cover;
        }
        table{
            width: 70%;
            margin: 50px auto;
            background-color: #FFCC99;
        }
        table.list{
            text-align: center;
            width: 100%;
        }
        td{
            border: 1px solid white;
            text-align: left;
            padding: 8px 15px;
        }
        tr:nth-child(even), table.list thread> tr{
            background-color: #D7D7D7;
        }
        input[type="text"], input[type="number"]{
                width: 90%;
                padding: 12px 20x;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid white;
                border-radius: 5px;
        }
        input[type="edit"]{
                width: 90%;
                padding: 12px 20x;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid white;
                border-radius: 35px;
                background-color: #0080FF;
                border: none;
        }
        input[type="delete"]{
                width: 90%;
                padding: 12px 20x;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid white;
                border-radius: 35px;
                background-color: #FF3333;
                border: none;
        }
        button{
            background-color: #D7D7D7;
            padding: 6px 12px;
            margin: 15px 0 10px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <td>
                <form action="" autocomplete="off" onsubmit="onFormSubmit()">
                        <div>
                            <label for="name">User ID</label>
                            <input type="number" name="userid" id="userid">
                        </div>
                        <div>
                            <label for="name">Username</label>
                            <input type="text" name="username" id="username">
                        </div>
                        <div>
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email">
                        </div>
                        <div>
                            <label for="role">Role</label>
                            <input type="text" name="role" id="role">
                        </div>

                        <div>
                            <input type="edit" value="Edit" class="form_action_bottom">
                            <input type="delete" value="delete">
                        </div>
                </form>
            </td>
            <td>
                <table class="list" id="user_list">
                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Role</th>
                        </tr>
                    </thead>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>