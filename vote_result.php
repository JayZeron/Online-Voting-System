<?php 
include('head.php'); 
include('sess.php'); 
?>

<body style="background-color: #f5f7fa; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
<?php include 'side_bar.php'; ?>

<div class="container" style="max-width: 1100px; margin: 60px auto;">
    <?php
    if (isset($_POST['submit'])) {
        $_SESSION['pres_id'] = $_POST['pres_id'] ?? "";
        $_SESSION['vpres_id'] = $_POST['vpres_id'] ?? "";
        $_SESSION['secretary_id'] = $_POST['secretary_id'] ?? "";
        $_SESSION['treasurer_id'] = $_POST['treasurer_id'] ?? "";
        $_SESSION['auditor_id'] = $_POST['auditor_id'] ?? "";
        $_SESSION['pio_id'] = $_POST['pio_id'] ?? "";
        $_SESSION['first_rep_id'] = $_POST['first_rep_id'] ?? "";
        $_SESSION['second_rep_id'] = $_POST['second_rep_id'] ?? "";
        $_SESSION['third_rep_id'] = $_POST['third_rep_id'] ?? "";
        $_SESSION['fourth_rep_id'] = $_POST['fourth_rep_id'] ?? "";
    }
    ?>

    <div style="background: #fff7eb; padding: 40px; border-radius: 18px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
        <h2 style="text-align: center; font-weight: bold; margin-bottom: 40px; color: #800000;">Selected Candidates Summary</h2>
        
        <table class="table table-bordered table-hover" style="background-color: #fffbe6;">
            <thead style="background-color: #800000; color: #fff;">
                <tr>
                    <th style="text-align: center; padding: 18px; font-size: 16px;">Position</th>
                    <th style="text-align: center; padding: 18px; font-size: 16px;">Candidate Name</th>
                    <th style="text-align: center; padding: 18px; font-size: 16px;">Image</th>
                </tr>
            </thead>
            <tbody>
                <?php
                function displayRow($position, $sessionKey, $conn) {
                    if (!empty($_SESSION[$sessionKey])) {
                        echo "<tr style='height: 100px;'>";
                        echo "<td style='text-align: center; font-weight: bold; font-size: 15px; color: #800000; vertical-align: middle;'>$position</td>";
                        $result = $conn->query("SELECT * FROM `candidate` WHERE `candidate_id` = '{$_SESSION[$sessionKey]}'");
                        $fetch = $result->fetch_array();
                        echo "<td style='text-align: center; font-size: 15px; vertical-align: middle;'>{$fetch['firstname']} {$fetch['lastname']}</td>";
                        echo "<td style='text-align: center; vertical-align: middle;'>
                                <img src='admin/{$fetch['img']}' style='height:90px; width:90px; border-radius:50%; border: 4px solid #ffcc00; box-shadow: 0 3px 8px rgba(0,0,0,0.15);' />
                              </td>";
                        echo "</tr>";
                    }
                }

                displayRow("PRESIDENT", "pres_id", $conn);
                displayRow("VICE PRESIDENT", "vpres_id", $conn);
                displayRow("SECRETARY", "secretary_id", $conn);
                displayRow("TREASURER", "treasurer_id", $conn);
                displayRow("AUDITOR", "auditor_id", $conn);
                displayRow("PIO", "pio_id", $conn);
                displayRow("FIRST YEAR REPRESENTATIVES", "first_rep_id", $conn);
                displayRow("SECOND YEAR REPRESENTATIVES", "second_rep_id", $conn);
                displayRow("THIRD YEAR REPRESENTATIVES", "third_rep_id", $conn);
                displayRow("FOURTH YEAR REPRESENTATIVES", "fourth_rep_id", $conn);
                ?>
            </tbody>
        </table>

        <!-- Confirmation Section -->
        <div style="text-align: center; margin-top: 60px;">
            <p style="font-size: 20px; font-weight: bold; color: #5a2d0c;">Are you sure you want to submit your votes?</p>
            <form action="submit_vote.php" method="post" style="display: inline-block; margin-right: 15px;">
                <button type="submit" class="btn" style="background-color: #800000; color: #fff; padding: 12px 30px; font-size: 17px; border-radius: 10px;">Yes</button>
            </form>
            <a href="vote.php" style="text-decoration: none;">
                <button type="button" class="btn" style="background-color: #ffcc00; color: #800000; padding: 12px 30px; font-size: 17px; border-radius: 10px;">Back</button>
            </a>
        </div>
    </div>
</div>

<?php include('script.php'); ?>
</body>
</html>
