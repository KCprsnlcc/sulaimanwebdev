<?php
include "../config/dbcon.php";

$registrationMessage = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_POST['user_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password']; // Store the password as plain text

    // TODO: Validate and sanitize user input

    $sql = "INSERT INTO `web_tbl` (`user_id`, `first_name`, `last_name`, `username`, `email`, `password`) VALUES
    ('$user_id', '$first_name', '$last_name', '$username', '$email', '$password')";

    if ($connection->query($sql) === TRUE) {
        $registrationMessage = "Registered Successfully";
    } else {
        echo "Error: " . $connection->error;
    }
    $connection->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <!-- Include Materialize CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: url('../assets/teal.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 500px; /* Increase the max-width */
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
            width: 100%; /* Full width for buttons */
            padding: 10px;
            margin-top: 20px;
            background-color: teal;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .container button.register-button {
            margin-top: 10px;
            background-color: gray;
        }

        .container button:hover {
            background-color: #005e5e;
        }

        .container button.register-button:hover {
            background-color: #555;
        }

        .button-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Registration Form</h2>

        <form method="post" action="register.php">
            <div class="input-field">
                <input type="text" id="user_id" name="user_id" class="validate" required>
                <label for="user_id">User ID:</label>
            </div>

            <div class="input-field">
                <input type="text" id="first_name" name="first_name" class="validate" required>
                <label for="first_name">First Name:</label>
            </div>

            <div class="input-field">
                <input type="text" id="last_name" name="last_name" class="validate" required>
                <label for="last_name">Last Name:</label>
            </div>

            <div class="input-field">
                <input type="text" id="username" name="username" class="validate" required>
                <label for="username">Username:</label>
            </div>

            <div class="input-field">
                <input type="email" id="email" name="email" class="validate" required>
                <label for="email">Email:</label>
            </div>

            <div class="input-field">
                <input type="password" id="password" name="password" class="validate" required>
                <label for="password">Password:</label>
            </div>

            <div class="button-container">
                <button type="submit" class="btn waves-effect waves-light teal">Register</button>
                <button type="button" class="btn waves-effect waves-light register-button grey darken-1" onclick="redirectToLogin()">Login</button>
            </div>
        </form>
        
        <!-- JavaScript for displaying the registration message and redirecting -->
        <script>
            <?php if (!empty($registrationMessage)) { ?>
                alert('<?php echo $registrationMessage; ?>');
                window.location.href = '../index.php'; // Redirect to the login page
            <?php } ?>
            
            function redirectToLogin() {
                window.location.href = '../index.php';
            }
        </script>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script>
        // Initialize Materialize components
        document.addEventListener('DOMContentLoaded', function() {
            M.AutoInit();
        });
    </script>
</body>
</html>
