<html>

<head>
    <title>Update Records</title>
    <style>
        body {
      overflow: auto;
      background-image: url("https://i.pinimg.com/originals/9f/c3/48/9fc348296d65884f53a7d82ca54afa13.jpg");
      background-repeat: no-repeat;
      background-position: fixed;
      -webkit-background-size: cover;
      -webkit-filter: cover;
      color: black;
      margin: 0;
      padding: 0;
      
      font-family: Arial, Helvetica, sans-serif;

    }
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
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
    <table border="1">
    <h1>View Records</h1>
        @foreach($student as $key)
        <tr>

        </tr>
        <tr>
            <td>{{$key->name}}</td>
            <td>{{$key->address}}</td>
            <td>{{$key->age}}</td>
            <td>{{$key->gender}}</td>
            <td>{{$key->department}}</td>
            <td>{{$key->course}}</td>
            <td><a href="/edit/{{$key->id}}">Edit</a></td>
            <td><a href="/delete/{{$key->id}}">Delete</a></td>
        </tr>

        @endforeach
    </table>
    <br>
    <button> <a href="/registration">Register</a></button>

</body>

</html>