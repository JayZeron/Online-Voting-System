<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BCCI Online Voting System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
        }

        .navbar {
            background: #0022ff;
            padding: 10px 20px;
            color: white;
        }

        .navbar .brand {
            font-size: 20px;
            font-weight: bold;
            color: white;
        }

        .navbar ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .navbar ul li {
            margin-left: 20px;
        }

        .navbar ul li a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            padding: 5px 10px;
            border-radius: 4px;
        }

        .navbar ul li a:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .banner {
            text-align: center;
            padding: 50px 20px;
            background-color: white;
            margin: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .banner h1 {
            font-size: 36px;
            color: #5e35b1;
        }

        .banner p {
            font-size: 18px;
            color: #777;
            margin: 10px 0;
        }

        .banner img {
            max-width: 100%;
            height: auto;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="brand">CAMPUS Voting System</div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="candidate_path.php">Candidates</a></li>
            <li><a href="voters.php">Voter List</a></li>
            <li><a href="register/index.php">Register</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </div>
</body>
</html>
