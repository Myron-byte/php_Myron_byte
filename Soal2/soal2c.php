<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Hobi</title>
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
            width: 90px;
        }
        .form-container button {
            margin-top: 10px;
            padding: 5px 15px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form action="hasil.php" method="get">
            <label for="hobi">Hobi Anda:</label>
            <input type="text" id="hobi" name="hobi" required>
            <input type="hidden" name="nama" value="<?php echo htmlspecialchars($_GET['nama']); ?>">
            <input type="hidden" name="umur" value="<?php echo htmlspecialchars($_GET['umur']); ?>">
            <button type="submit">SUBMIT</button>
        </form>
    </div>
</body>
</html>
