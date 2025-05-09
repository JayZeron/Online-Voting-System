<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <style>
        body {
            font-family: 'Roboto', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: silver;
        }
        header {
            background-color: #ff5a8b;
            color: #fff;
            padding: 30px 0;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        header h1 {
            margin: 0;
            font-size: 2.5rem;
            font-weight: 700;
        }
        nav {
            background-color: #fff;
            padding: 10px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        nav ul {
            display: flex;
            justify-content: center;
            list-style: none;
            margin: 0;
            padding: 0;
        }
        nav ul li {
            margin: 0 20px;
        }
        nav ul li a {
            text-decoration: none;
            color: #ff5a8b;
            font-size: 1rem;
            font-weight: bold;
            transition: color 0.3s;
        }
        nav ul li a:hover {
            color: #333;
        }
        .container {
            max-width: 1000px;
            margin: 40px auto;
            padding: 20px;
            background: transparent;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            animation: fadeIn 1s ease-in-out;
        }
        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(20px);}
            to {opacity: 1; transform: translateY(0);}
        }
        h2 {
            color: #ffdf00;
            border-left: 5px solid maroon;
            padding-left: 15px;
            margin-bottom: 20px;
            font-size: 1.8rem;
        }
        p, ul {
            line-height: 1.6;
            color: #555;
            font-size: 1.1rem;
        }
        ul {
            padding-left: 40px;
        }
        ul li {
            margin-bottom: 10px;
            position: relative;
        }
        footer {
            background-color: maroon;
            text-align: center;
            padding: 20px 0;
            margin-top: 40px;
            box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.1);
        }
        footer p {
            margin: 0;
            font-size: 1rem;
            color: silver;
        }
    </style>
</head>
<body>
    <?php include('view_banner.php'); ?>
    <div class="container">
    <h2>About</h2>
    <p>
        The BCCI Online Voting System is simple but effective. It handles basic voting tasks and ensures a fair process for students and administrators.
    </p>
    <h2>Purpose</h2>
    <p>
        To provide an easy and reliable voting system for schools and organizations.
    </p>
    <h2>Features</h2>
    <ul>
        <li>Simple login for students and admins.</li>
        <li>Students can only vote once.</li>
        <li>Admins can see total votes for each candidate.</li>
        <li>Admins can add and edit candidates.</li>
        <li>Admins register students to allow voting.</li>
        <li>Students can vote only for positions for their year level.</li>
    </ul>
    <h2>Benefits</h2>
    <p>With BCCI Online Voting System, you can:</p>
    <ul>
        <li>Make voting easy and secure.</li>
        <li>Ensure fairness by restricting duplicate votes.</li>
        <li>Track votes quickly with admin tools.</li>
    </ul>
    <h2>Goal</h2>
    <p>
        To make voting simple, fair, and accessible for everyone.
    </p>
</div>
<footer>
    <p>&copy; 2025 BCCI Online Voting System.</p>
</footer>
