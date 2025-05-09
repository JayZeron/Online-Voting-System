<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Voters List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7e1f4; 
        }

        #wrapper {
            width: 80%; 
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);  
        }

        .voters_notice {
            margin-bottom: 20px;
            font-size: 13px;
            color: red; 
            text-align: center; 
        }

        .voters_notice p {
            font-weight: bold;
        }

        h3 {
            font-size: 28px;
            font-weight: bold;
            color: black;  
            margin-bottom: 20px;
            text-align: center;  
        }

        .tables-body {
            display: flex;
            justify-content: center; 
        }

        .table_back {
            width: 100%;
            max-width: 1000px;  
            overflow-x: auto;  
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
        }

        table th, table td {
            padding: 10px;
            text-align: center;
            border: 1px solid #f4a7d8; 
        }

        table th {
            background-color: maroon; 
            color: #fff; 
        }
    </style>
</head>

<body>
    <?php include('view_banner.php'); ?>

    <div id="wrapper">
        <h3><strong>Registered Voters List</strong></h3>
        
        <div class="tables-body">
            <div class="table_back">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example" border="0">
                    <thead class="thead">
                        <tr>
                            <th>Student ID</th>
                            <th>Names</th>
                            <th>Gender</th>
                            <th>Program of Study</th>
                            <th>Year Level</th>
                            <th>Account</th>
                            <th>Status</th>
                            <th>Date Registered</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        require 'admin/dbcon.php';
                        $query = $conn->query("SELECT * FROM voters ORDER BY voters_id DESC");
                        while ($row1 = $query->fetch_array()) {
                            $voters_id = $row1['voters_id'];
                        ?>
                            <tr>
                                <td><?php echo $row1['id_number']; ?></td>
                                <td><?php echo $row1['firstname'] . " " . $row1['lastname']; ?></td>
                                <td><?php echo $row1['gender']; ?></td>
                                <td><?php echo $row1['prog_study']; ?></td>
                                <td><?php echo $row1['year_level']; ?></td>
                                <td><?php echo $row1['account']; ?></td>
                                <td><?php echo $row1['status']; ?></td>
                                <td><?php echo $row1['date']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                
                <div class="voters_notice">
                    <p><strong><i>NOTE</i>:</strong> IF YOUR NAME IS NOT IN THE LIST, YOU CAN'T VOTE IN THIS SYSTEM</p>
                </div>
            </div>
        </div>
    </div>

    <?php include('script.php'); ?>
</body>
</html>
