<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Umur</title>
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
            display: block; 
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form action="form_hobi.php" method="get">
            <label for="umur">Umur Anda:</label>
            <input type="text" id="umur" name="umur" required>
            <input type="hidden" name="nama" value="<?php echo htmlspecialchars($_GET['nama']); ?>">
            <button type="submit">SUBMIT</button>
        </form>
    </div>
</body>
</html>
