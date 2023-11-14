<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Include Materialize CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: url('../assets/teal.jpg') no-repeat center center fixed;
            margin: 0;
            padding: 0;
        }

        header {
            background: teal;
            color: white;
            text-align: center;

        }

        .container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 1200px;
            margin: 20px auto;
            text-align: center;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        .table th, .table td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        .table th {
            background: teal;
            color: white;
        }

        .table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .table tr:hover {
            background-color: #ddd;
        }

        .btn-group {
            display: flex;
            justify-content: center;
        }

        .btn-group button {
            margin: 5px;
            padding: 8px;
            cursor: pointer;
        }

        .btn-edit {
            background-color: #4CAF50;
            color: white;
        }

        .btn-delete {
            background-color: #f44336;
            color: white;
        }
    </style>
</head>
<body>
    <header>
        <h1>Dashboard</h1>
    </header>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Connect to your database and fetch data from web_tbl
                include "../config/dbconn.php";
                $sql = "SELECT * FROM web_tbl";
                $result = $connection->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['user_id'] . "</td>";
                        echo "<td>" . $row['first_name'] . "</td>";
                        echo "<td>" . $row['last_name'] . "</td>";
                        // Check if the 'email' key exists before displaying it
                        if (isset($row['Email'])) {
                            echo "<td>" . $row['Email'] . "</td>";
                        } else {
                            echo "<td></td>"; // Display an empty cell if 'email' is not set
                        }
                        echo "<td>" . $row['username'] . "</td>";
                        echo "<td class='btn-group'>
                                <button class='btn-edit' onclick='editUser(" . $row['user_id'] . ")'>Edit</button>
                                <button class='btn-delete' onclick='deleteUser(" . $row['user_id'] . ")'>Delete</button>
                              </td>";
                        echo "</tr>";
                    }
                }
                $connection->close();
                ?>
            </tbody>
        </table>
    </div>

    <script>
        function editUser(userId) {
            // Implement your edit logic here
            alert("Edit user with ID: " + userId);
        }

        function deleteUser(userId) {
            // Implement your delete logic here
            alert("Delete user with ID: " + userId);
        }
    </script>
</body>
</html>
