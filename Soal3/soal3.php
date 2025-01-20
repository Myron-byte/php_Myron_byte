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

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      border: 1px solid #ccc;
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
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

<div class="container">
  <h2>Registered Users</h2>
  <table>
    <tr>
      <th>Nama</th>
      <th>Alamat</th>
      <th>Hobi</th>
    </tr>
    <?php
    // Database connection
    $servername = "localhost"; 
    $username = "username"; 
    $password = "password"; 
    $dbname = "dba1";

    $conn = new mysqli($servername, $username, $password, $dba1);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT nama, alamat, hobi FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["nama"] . "</td><td>" . $row["alamat"] . "</td><td>" . $row["hobi"] . "</td></tr>";
        }
    } else {
        echo "<tr><td colspan='3'>No records found</td></tr>";
    }

    $conn->close();
    ?>
  </table>
</div>

</body>
</html>