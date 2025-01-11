<!DOCTYPE html>
<html>
<head>
  <title>Form Search</title>
  <style>
    body {
      font-family: sans-serif;
    }

    .container {
      width: 300px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input[type="text"],
    input[type="email"] {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
    }
  </style>
</head>
<body>

<div class="container">
  <form action="#" method="post">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama" placeholder="Nama">

    <label for="alamat">Alamat:</label>
    <input type="text" id="alamat" name="alamat" placeholder="Alamat">

    <label for="hobi">Hobi:</label>
    <input type="text" id="hobi" name="hobi" placeholder="Hobi">

    <input type="submit" value="SEARCH">
  </form>
</div>

</body>
</html>
