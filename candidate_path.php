<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search For Candidates</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: silver;
        }
        .banner h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .menu-select {
            margin-bottom: 20px;
        }
        iframe {
            display: block;
            margin-top: 20px;
        }
        h1 {
        text-align: center;
        font-size: 28px; 
        font-family: 'Arial', sans-serif; 
        font-weight: bold;
        color: #333; 
        padding: 15px; 
        margin: 20px 0; 
        }

    </style>
</head>
<body>
    
    <div id="wrapper">
        <?php include('view_banner.php'); ?> 

        <div id="content">
                <h1>Search For Candidates By Position</h1>
                <div class="menu-select" style="text-align: center;">
                    <select onchange="page(this.value)">
                        <option disabled selected>Select Candidate Group</option>
                        <option value="candidates/all.php">ALL CANDIDATES</option>
                        <option value="candidates/pres.php">PRESIDENT</option>
								<option value="candidates/vpres.php">VICE PRESIDENT</option>
								<option value="candidates/secretary.php">SECRETARY</option>
								<option value="candidates/treasurer.php">TREASURER</option>
								<option value="candidates/auditor.php">AUDITOR</option>
								<option value="candidates/pio.php">PIO</option>
                                <option value="candidates/first_rep.php">FIRST YEAR REPRESENTATIVES</option>
                                <option value="candidates/second_rep.php">SECOND YEAR REPRESENTATIVES</option>
                                <option value="candidates/third_rep.php">THIRD YEAR REPRESENTATIVES</option>
                                <option value="candidates/fourth_rep.php">FOURTH YEAR REPRESENTATIVES</option>
                    </select>
            </div>

            <iframe name="content-frame" src="" frameborder="0" width="100%" height="500px"></iframe>
        </div>
    </div>

    <script>
        function page(src) {
            document.querySelector('iframe[name="content-frame"]').src = src;
        }
    </script>
</body>
</html>
