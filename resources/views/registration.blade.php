<html>

<head>
  <title></title>
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

    * {
      box-sizing: border-box;
    }

  
    .container {
      padding-top: 100px;
      padding-right: 400px;
      padding-left: 400px;
      background-color: transparent;
    } 

    
    input[type=text],
    input[type=password] {
      width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      display: inline-block;
      border: none;
      background: white;
    }

    input[type=text]:focus,
    input[type=password]:focus {
      background-color: cyan;
      outline: none;
    }

 
    hr {
      border: 1px solid #f1f1f1;
      margin-bottom: 25px;
    }

    
    .submit {
      background-color: cyan;
      color: black;
      padding: 16px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
      opacity: 1;
      border-radius: 50pt;
    }

    .submit:hover {
      opacity: 1;
    }

    
    a {
      color: white;
    }

    h1 {
      text-align: center;
    }
  </style>
</head>

<body>

  <form action="addtodb" method="post">
    <div class="container">
      <h1>Registration</h1>
      <br>
      @csrf
      <label>Name:</label>
      <input type="text" name="name" />
      <br>
      <label>Address:</label>
      <input type="text" name="address" />
      <br>
      <label>Age:</label>
      <input type="text" name="age" />
      <br>
      <label>Gender:</label>
      <input type="radio" name="gender" value="male"> Male
      <input type="radio" name="gender" value="female"> Female
      <br>
      <br>

      <label for="department">Department:</label>
      <select name="department" id="department">
        <option value=""></option>
        <option value="CCS">CCS</option>
        <option value="CHS">CHS</option>
        <option value="CTHBM">CHTBM</option>
        <option value="CEA">CEA</option>
        <option value="CAS">CAS</option>
        <option value="CTDE">CTDE</option>
      </select>
      <br>
      <br>
      <label>Course:</label>
      <input type="text" name="course">
      <br>
      <input type="submit" class="submit" name="submit" />
      <br>
      <br>
      <button><a href="/view">View</a></button>
    </div>
  </form>
 
</body>

</html>