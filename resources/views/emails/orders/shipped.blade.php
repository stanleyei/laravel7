<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <style>
        table{
            font-size: 20px;
            background-color: rgb(11, 155, 221);
            
        }

        th,td{
            border: 1px solid white;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>姓名</th>
                <th>E-mail</th>
                <th>電話</th>
                <th>內文</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$name}}</td>
                <td>{{$email}}</td>
                <td>{{$phone}}</td>
                <td>{{$content}}</td>
            </tr>
        </tbody>
    </table>
</body>

</html>