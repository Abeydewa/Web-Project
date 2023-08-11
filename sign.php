<!DOCTYPE html>
<html>
<head>
    <title>Sign In</title>
    <style>
        
        body {
            background-color:rgb(25, 114, 162);
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        
        .form-container {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
            width: 400px;
            padding: 40px;
        }

        
        .form-heading {
            font-size: 28px;
            margin-bottom: 20px;
            color: #333333;
        }

        
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        
        .form-button {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .form-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<?php

$id = $name = $phone = $password = '';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $conn = new mysqli('localhost', 'root', '', 'projects');

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    $sql = "INSERT INTO user (id, name, phone, password) VALUES ('$id', '$name', '$phone', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Record added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    
    $conn->close();
}
?>

<h2>Tell Us About You &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</h2>
<form method="post">
    <label for="id">ID:</label><br>
    <input type="varchar" id="id" name="id"><br><br>
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name"><br><br>
    <label for="phone">Phone:</label><br>
    <input type="int" id="phone" name="phone"><br><br>
    <label for="password">password:</label><br>
    <input type="varchar" id="password" name="password"><br><br>
    <input type="submit" value="Submit">
</form>
<br>
<a href="welcome.php"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>Go Back</a>
</body>
</html>
