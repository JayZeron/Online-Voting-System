<?php include('head.php'); ?>
<body>
    <?php include('login_sidebar.php'); ?>

    <div class="container">
        <div class="row">
            <div class="menue">
            </div>

            <div class="col-md-4 col-md-offset-4">
                <form role="form" method="post" enctype="multipart/form-data" class="index-form">
                    <div class="form-heading"></div>
                    <p style="text-align: center; font-weight: bold; font-size: 24px;">Voter/Student</p>

                    <!-- Student ID Field -->
                    <div class="form-field">
                        <label for="idno">Student ID:</label><br />
                        <input class="form-control" placeholder="Enter Student ID" name="idno" type="text" required autofocus>
                    </div>

                    <!-- Password Field -->
                    <div class="form-field">
                        <label for="password">Password:</label>
                        <input class="form-control" placeholder="Enter Password" name="password" type="password" required>
                    </div>

                    <!-- Error Message Display -->
                    <div id="error-message" style="color: red; "></div>
                    <br />

                    <button class="btn btn-lg btn-success btn-block" name="login" style="background-color: maroon; color: white; margin-bottom: 0px;">Login</button>
                    
                    <?php include('login_query.php'); ?>
                </form>
            </div>
        </div>
    </div>

    <?php include('script.php'); ?>

    <script type="text/javascript">
        function displayError(message) {
            document.getElementById('error-message').innerText = message;
        }
    </script>

    <!-- Adding CSS for professional styling -->
    <style>
         body {
            font-family: 'Roboto', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: white;
        }
        .form-control {
            border: 1px solid maroon;
            padding: 10px;
            border-radius: 4px;
        }

        .form-control:focus {
            border-color: maroon;
            box-shadow: 0 0 10px rgba(242, 138, 178, 0.5);
        }

        .btn {
            border-radius: 4px;
            padding: 10px 15px;
            font-size: 16px;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #d9629e;
        }

        .container {
            margin-top: 50px;
        }

        .index-form {
            background-color: #f8f9fa;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            max-width: 400px; 
            margin-left: calc(30% - 200px);
        }

        .index-form .form-heading {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }
    </style>
</body>
</html>
