<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Include Materialize CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: url('assets/teal.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9); /* Fallback color for browsers that do not support rgba */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 300px;
            width: 100%;
            text-align: center;
            margin-top: 50px;
        }

        .container h2 {
            margin-bottom: 20px;
            color: teal;
        }

        .container .input-field {
            position: relative;
            margin-bottom: 20px;
        }

        .container input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .container label {
            position: absolute;
            top: 0;
            left: 10px;
            padding: 10px;
            color: #9e9e9e;
            pointer-events: none;
            transition: 0.2s ease-out;
        }

        .container input:focus + label,
        .container input:not(:placeholder-shown) + label {
            transform: translateY(-18px);
            font-size: 12px;
            color: teal;
        }

        .container button {
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            background-color: teal;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .container button:hover {
            background-color: #005e5e;
        }

        .container button.register-button {
            margin-top: 10px;
            background-color: gray;
        }

        .container button.register-button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Login</h2>
    <form action="index.php" method="post">
        <div class="input-field">
            <input type="text" id="email" name="email" class="validate" required>
            <label for="email">Email:</label>
        </div>

        <div class="input-field">
            <input type="password" id="password" name="password" class="validate" required>
            <label for="password">Password:</label>
        </div>

        <button type="submit" name="login" class="btn waves-effect waves-light teal">Login</button>
        <button type="button" class="btn waves-effect waves-light register-button grey darken-1" onclick="redirectToRegistration()">Register</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script>
    // Initialize Materialize components
    document.addEventListener('DOMContentLoaded', function() {
        M.AutoInit();
    });

    function redirectToRegistration() {
        window.location.href = 'register/register.php';
    }
</script>
</body>
</html>

<?php
include "../config/dbcon.php";
?>