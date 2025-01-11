<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Nama</title>
    <style>
        .form-container {
            width: 250px;
            border: 1px solid black;
            padding: 15px;
            text-align: left;
            margin: 0 auto;
        }
        .form-container label {
            display: inline-block;
            width: 100px;
            text-align: left;
        }
        .form-container input[type="text"] {
            width: 130px;
        }
        .form-container button {
            margin-top: 10px;
            padding: 5px 15px;
            display: block;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form action="form_umur.php" method="get">
            <label for="nama">Nama Anda:</label>
            <input type="text" id="nama" name="nama" required>
            <button type="submit">SUBMIT</button>
        </form>
    </div>
</body>
</html>
