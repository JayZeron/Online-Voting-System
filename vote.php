<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('head.php'); ?>
</head>
<body>
    <?php include("sess.php"); ?>
    <?php include('side_bar.php'); ?>

    <div id="wrapper">
        <form method="POST" action="vote_result.php">
           <br>
           <div class="col-lg-6">
    <div class="panel panel-primary" style="border: 2px solid #800000; border-radius: 10px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);">
        <div class="panel-heading" style="background-color: #800000; color: #FFD700; text-align: center; font-size: 1.5rem; font-weight: bold; padding: 15px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
            PRESIDENT
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th style="background-color: #FFD700; color: #800000; text-align: center;">Image</th>
                        <th style="background-color: #FFD700; color: #800000; text-align: center;">Name</th>
                        <th style="background-color: #FFD700; color: #800000; text-align: center;">Gender</th>
                        <th style="background-color: #FFD700; color: #800000; text-align: center;">Level</th>
                        <th style="background-color: #FFD700; color: #800000; text-align: center;">Party</th>
                        <th style="background-color: #FFD700; color: #800000; text-align: center;">Vote</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'PRESIDENT'") or die(mysqli_error($conn));
                    while ($fetch = $query->fetch_array()) {
                    ?>
                        <tr>
                            <td style="text-align: center;">
                                <img src="admin/<?php echo $fetch['img']; ?>" 
                                    alt="Candidate Image" 
                                    style="border-radius: 8px; object-fit: cover; height: 100px; width: 100px; border: 2px solid #800000; box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.15);">
                            </td>
                            <td style="text-align: center;"><?php echo $fetch['firstname'] . " " . $fetch['lastname']; ?></td>
                            <td style="text-align: center;"><?php echo $fetch['gender']; ?></td>
                            <td style="text-align: center;"><?php echo $fetch['year_level']; ?></td>
                            <td style="text-align: center;"><?php echo $fetch['party']; ?></td>
                            <td style="text-align: center;">
                            <input type="checkbox" 
                                           value="<?php echo $fetch['candidate_id']; ?>" 
                                           name="pres_id" 
                                           class="position-checkbox pres"> Give Vote
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<div class="col-lg-6">
    <div class="panel panel-primary" style="border: 2px solid #800000; border-radius: 10px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);">
        <div class="panel-heading" style="background-color: #800000; color: #FFD700; text-align: center; font-size: 1.5rem; font-weight: bold; padding: 15px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
           VICE PRESIDENT
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th style="background-color: #FFD700; color: #800000; text-align: center;">Image</th>
                        <th style="background-color: #FFD700; color: #800000; text-align: center;">Name</th>
                        <th style="background-color: #FFD700; color: #800000; text-align: center;">Gender</th>
                        <th style="background-color: #FFD700; color: #800000; text-align: center;">Level</th>
                        <th style="background-color: #FFD700; color: #800000; text-align: center;">Party</th>
                        <th style="background-color: #FFD700; color: #800000; text-align: center;">Vote</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'VICE PRESIDENT'") or die(mysqli_error($conn));
                    while ($fetch = $query->fetch_array()) {
                    ?>
                        <tr>
                            <td style="text-align: center;">
                                <img src="admin/<?php echo $fetch['img']; ?>" 
                                    alt="Candidate Image" 
                                    style="border-radius: 8px; object-fit: cover; height: 100px; width: 100px; border: 2px solid #800000; box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.15);">
                            </td>
                            <td style="text-align: center;"><?php echo $fetch['firstname'] . " " . $fetch['lastname']; ?></td>
                            <td style="text-align: center;"><?php echo $fetch['gender']; ?></td>
                            <td style="text-align: center;"><?php echo $fetch['year_level']; ?></td>
                            <td style="text-align: center;"><?php echo $fetch['party']; ?></td>
                            <td style="text-align: center;">
                            <input type="checkbox" 
                                           value="<?php echo $fetch['candidate_id']; ?>" 
                                           name="vpres_id" 
                                           class="position-checkbox vpres"> Give Vote
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<div class="col-lg-6">
    <div class="panel panel-primary" style="border: 2px solid #800000; border-radius: 10px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);">
        <div class="panel-heading" style="background-color: #800000; color: #FFD700; text-align: center; font-size: 1.5rem; font-weight: bold; padding: 15px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
            SECRETARY
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th style="background-color: #FFD700; color: #800000; text-align: center;">Image</th>
                        <th style="background-color: #FFD700; color: #800000; text-align: center;">Name</th>
                        <th style="background-color: #FFD700; color: #800000; text-align: center;">Gender</th>
                        <th style="background-color: #FFD700; color: #800000; text-align: center;">Level</th>
                        <th style="background-color: #FFD700; color: #800000; text-align: center;">Party</th>
                        <th style="background-color: #FFD700; color: #800000; text-align: center;">Vote</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'SECRETARY'") or die(mysqli_error($conn));
                    while ($fetch = $query->fetch_array()) {
                    ?>
                        <tr>
                            <td style="text-align: center;">
                                <img src="admin/<?php echo $fetch['img']; ?>" 
                                    alt="Candidate Image" 
                                    style="border-radius: 8px; object-fit: cover; height: 100px; width: 100px; border: 2px solid #800000; box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.15);">
                            </td>
                            <td style="text-align: center;"><?php echo $fetch['firstname'] . " " . $fetch['lastname']; ?></td>
                            <td style="text-align: center;"><?php echo $fetch['gender']; ?></td>
                            <td style="text-align: center;"><?php echo $fetch['year_level']; ?></td>
                            <td style="text-align: center;"><?php echo $fetch['party']; ?></td>
                            <td style="text-align: center;">
                                <input type="checkbox" 
                                    value="<?php echo $fetch['candidate_id']; ?>" 
                                    name="secretary_id" 
                                    class="position-checkbox secretary"> Give Vote
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="col-lg-6">
    <div class="panel panel-primary" style="border: 2px solid #800000; border-radius: 10px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);">
        <div class="panel-heading" style="background-color: #800000; color: #FFD700; text-align: center; font-size: 1.5rem; font-weight: bold; padding: 15px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
            TREASURER
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th style="background-color: #FFD700; color: #800000; text-align: center;">Image</th>
                        <th style="background-color: #FFD700; color: #800000; text-align: center;">Name</th>
                        <th style="background-color: #FFD700; color: #800000; text-align: center;">Gender</th>
                        <th style="background-color: #FFD700; color: #800000; text-align: center;">Level</th>
                        <th style="background-color: #FFD700; color: #800000; text-align: center;">Party</th>
                        <th style="background-color: #FFD700; color: #800000; text-align: center;">Vote</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'TREASURER'") or die(mysqli_error($conn));
                    while ($fetch = $query->fetch_array()) {
                    ?>
                        <tr>
                            <td style="text-align: center;">
                                <img src="admin/<?php echo $fetch['img']; ?>" 
                                    alt="Candidate Image" 
                                    style="border-radius: 8px; object-fit: cover; height: 100px; width: 100px; border: 2px solid #800000; box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.15);">
                            </td>
                            <td style="text-align: center;"><?php echo $fetch['firstname'] . " " . $fetch['lastname']; ?></td>
                            <td style="text-align: center;"><?php echo $fetch['gender']; ?></td>
                            <td style="text-align: center;"><?php echo $fetch['year_level']; ?></td>
                            <td style="text-align: center;"><?php echo $fetch['party']; ?></td>
                            <td style="text-align: center;">
                                <input type="checkbox" 
                                value="<?php echo $fetch['candidate_id']; ?>" 
                                name="treasurer_id" 
                                class="position-checkbox treasurer"> Give Vote
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="col-lg-6">
    <div class="panel panel-primary" style="border: 2px solid #800000; border-radius: 10px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);">
        <div class="panel-heading" style="background-color: #800000; color: #FFD700; text-align: center; font-size: 1.5rem; font-weight: bold; padding: 15px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
            AUDITOR
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th style="background-color: #FFD700; color: #800000; text-align: center;">Image</th>
                        <th style="background-color: #FFD700; color: #800000; text-align: center;">Name</th>
                        <th style="background-color: #FFD700; color: #800000; text-align: center;">Gender</th>
                        <th style="background-color: #FFD700; color: #800000; text-align: center;">Level</th>
                        <th style="background-color: #FFD700; color: #800000; text-align: center;">Party</th>
                        <th style="background-color: #FFD700; color: #800000; text-align: center;">Vote</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'AUDITOR'") or die(mysqli_error($conn));
                    while ($fetch = $query->fetch_array()) {
                    ?>
                        <tr>
                            <td style="text-align: center;">
                                <img src="admin/<?php echo $fetch['img']; ?>" 
                                    alt="Candidate Image" 
                                    style="border-radius: 8px; object-fit: cover; height: 100px; width: 100px; border: 2px solid #800000; box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.15);">
                            </td>
                            <td style="text-align: center;"><?php echo $fetch['firstname'] . " " . $fetch['lastname']; ?></td>
                            <td style="text-align: center;"><?php echo $fetch['gender']; ?></td>
                            <td style="text-align: center;"><?php echo $fetch['year_level']; ?></td>
                            <td style="text-align: center;"><?php echo $fetch['party']; ?></td>
                            <td style="text-align: center;">
                                <input type="checkbox" 
                                value="<?php echo $fetch['candidate_id']; ?>" 
                                name="auditor_id" 
                                class="position-checkbox auditor"> Give Vote
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

<div class="col-lg-6">
    <div class="panel panel-primary" style="border: 2px solid #800000; border-radius: 10px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);">
        <div class="panel-heading" style="background-color: #800000; color: #FFD700; text-align: center; font-size: 1.5rem; font-weight: bold; padding: 15px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
            PIO
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th style="background-color: #FFD700; color: #800000; text-align: center;">Image</th>
                        <th style="background-color: #FFD700; color: #800000; text-align: center;">Name</th>
                        <th style="background-color: #FFD700; color: #800000; text-align: center;">Gender</th>
                        <th style="background-color: #FFD700; color: #800000; text-align: center;">Level</th>
                        <th style="background-color: #FFD700; color: #800000; text-align: center;">Party</th>
                        <th style="background-color: #FFD700; color: #800000; text-align: center;">Vote</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'PIO'") or die(mysqli_error($conn));
                    while ($fetch = $query->fetch_array()) {
                    ?>
                        <tr>
                            <td style="text-align: center;">
                                <img src="admin/<?php echo $fetch['img']; ?>" 
                                    alt="Candidate Image" 
                                    style="border-radius: 8px; object-fit: cover; height: 100px; width: 100px; border: 2px solid #800000; box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.15);">
                            </td>
                            <td style="text-align: center;"><?php echo $fetch['firstname'] . " " . $fetch['lastname']; ?></td>
                            <td style="text-align: center;"><?php echo $fetch['gender']; ?></td>
                            <td style="text-align: center;"><?php echo $fetch['year_level']; ?></td>
                            <td style="text-align: center;"><?php echo $fetch['party']; ?></td>
                            <td style="text-align: center;">
                                <input type="checkbox" 
                                value="<?php echo $fetch['candidate_id']; ?>" 
                                name="pio_id" 
                                class="position-checkbox pio"> Give Vote
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="col-lg-6">
    <div class="panel panel-primary" style="border: 2px solid #800000; border-radius: 10px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);">
        <div class="panel-heading" style="background-color: #800000; color: #FFD700; text-align: center; font-size: 1.5rem; font-weight: bold; padding: 15px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
            FIRST YEAR REPRESENTATIVES
        </div>
        <div class="panel-body">
            <?php
                $voters_id = $_SESSION['voters_id'];

                $stmt = $conn->prepare("SELECT `year_level` FROM `voters` WHERE `voters_id` = ?");
                $stmt->bind_param("i", $voters_id); 
                $stmt->execute();
                $result = $stmt->get_result();
                $voter = $result->fetch_assoc();

                if ($voter['year_level'] == '1st Year') {
                    $candidate_query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'FIRST YEAR REPRESENTATIVES'");
                    
                    if ($candidate_query->num_rows > 0) {
            ?>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="background-color: #FFD700; color: #800000; text-align: center;">Image</th>
                                    <th style="background-color: #FFD700; color: #800000; text-align: center;">Name</th>
                                    <th style="background-color: #FFD700; color: #800000; text-align: center;">Gender</th>
                                    <th style="background-color: #FFD700; color: #800000; text-align: center;">Level</th>
                                    <th style="background-color: #FFD700; color: #800000; text-align: center;">Party</th>
                                    <th style="background-color: #FFD700; color: #800000; text-align: center;">Vote</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($candidate = $candidate_query->fetch_array()) { ?>
                                    <tr>
                                        <td style="text-align: center;">
                                            <img src="admin/<?php echo htmlspecialchars($candidate['img']); ?>" 
                                                 alt="Candidate Image" 
                                                 style="border-radius: 8px; object-fit: cover; height: 100px; width: 100px; border: 2px solid #800000; box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.15);">
                                        </td>
                                        <td style="text-align: center;"><?php echo htmlspecialchars($candidate['firstname']) . " " . htmlspecialchars($candidate['lastname']); ?></td>
                                        <td style="text-align: center;"><?php echo htmlspecialchars($candidate['gender']); ?></td>
                                        <td style="text-align: center;"><?php echo htmlspecialchars($candidate['year_level']); ?></td>
                                        <td style="text-align: center;"><?php echo htmlspecialchars($candidate['party']); ?></td>
                                        <td style="text-align: center;">
                                            <input type="checkbox" 
                                                   value="<?php echo htmlspecialchars($candidate['candidate_id']); ?>" 
                                                   name="first_rep_id" 
                                                   class="position-checkbox first_rep"> Give Vote
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
            <?php 
                    } else { 
                        echo "<p style='text-align: center;'>No candidates available for your year level.</p>";
                    }
                } else {
                    echo "<p style='text-align: center;'>You are not a first-year student.</p>";
                }
            ?>
        </div>
    </div>
</div>



<div class="col-lg-6">
    <div class="panel panel-primary" style="border: 2px solid #800000; border-radius: 10px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);">
        <div class="panel-heading" style="background-color: #800000; color: #FFD700; text-align: center; font-size: 1.5rem; font-weight: bold; padding: 15px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
            SECOND YEAR REPRESENTATIVES
        </div>
        <div class="panel-body">
            <?php
                $voters_id = $_SESSION['voters_id']; 

                $stmt = $conn->prepare("SELECT `year_level` FROM `voters` WHERE `voters_id` = ?");
                $stmt->bind_param("i", $voters_id); 
                $stmt->execute();
                $result = $stmt->get_result();
                $voter = $result->fetch_assoc();

                if ($voter['year_level'] == '2nd Year') {
                    $candidate_query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'SECOND YEAR REPRESENTATIVES'");
                    
                    if ($candidate_query->num_rows > 0) {
            ?>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="background-color: #FFD700; color: #800000; text-align: center;">Image</th>
                                    <th style="background-color: #FFD700; color: #800000; text-align: center;">Name</th>
                                    <th style="background-color: #FFD700; color: #800000; text-align: center;">Gender</th>
                                    <th style="background-color: #FFD700; color: #800000; text-align: center;">Level</th>
                                    <th style="background-color: #FFD700; color: #800000; text-align: center;">Party</th>
                                    <th style="background-color: #FFD700; color: #800000; text-align: center;">Vote</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($candidate = $candidate_query->fetch_array()) { ?>
                                    <tr>
                                        <td style="text-align: center;">
                                            <img src="admin/<?php echo htmlspecialchars($candidate['img']); ?>" 
                                                 alt="Candidate Image" 
                                                 style="border-radius: 8px; object-fit: cover; height: 100px; width: 100px; border: 2px solid #800000; box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.15);">
                                        </td>
                                        <td style="text-align: center;"><?php echo htmlspecialchars($candidate['firstname']) . " " . htmlspecialchars($candidate['lastname']); ?></td>
                                        <td style="text-align: center;"><?php echo htmlspecialchars($candidate['gender']); ?></td>
                                        <td style="text-align: center;"><?php echo htmlspecialchars($candidate['year_level']); ?></td>
                                        <td style="text-align: center;"><?php echo htmlspecialchars($candidate['party']); ?></td>
                                        <td style="text-align: center;">
                                            <input type="checkbox" 
                                                   value="<?php echo htmlspecialchars($candidate['candidate_id']); ?>" 
                                                   name="second_rep_id" 
                                                   class="position-checkbox second_rep"> Give Vote
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
            <?php 
                    } else { 
                        echo "<p style='text-align: center;'>No candidates available for your year level.</p>";
                    }
                } else {
                    echo "<p style='text-align: center;'>You are not a second-year student.</p>";
                }
            ?>
        </div>
    </div>
</div>

<!-- THIRD YEAR REPRESENTATIVES -->
<div class="col-lg-6">
    <div class="panel panel-primary" style="border: 2px solid #800000; border-radius: 10px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);">
        <div class="panel-heading" style="background-color: #800000; color: #FFD700; text-align: center; font-size: 1.5rem; font-weight: bold; padding: 15px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
            THIRD YEAR REPRESENTATIVES
        </div>
        <div class="panel-body">
            <?php
                $voters_id = $_SESSION['voters_id']; 

                $stmt = $conn->prepare("SELECT `year_level` FROM `voters` WHERE `voters_id` = ?");
                $stmt->bind_param("i", $voters_id); 
                $stmt->execute();
                $result = $stmt->get_result();
                $voter = $result->fetch_assoc();

                if ($voter['year_level'] == '3rd Year') {
                    $candidate_query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'THIRD YEAR REPRESENTATIVES'");
                    
                    if ($candidate_query->num_rows > 0) {
            ?>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="background-color: #FFD700; color: #800000; text-align: center;">Image</th>
                                    <th style="background-color: #FFD700; color: #800000; text-align: center;">Name</th>
                                    <th style="background-color: #FFD700; color: #800000; text-align: center;">Gender</th>
                                    <th style="background-color: #FFD700; color: #800000; text-align: center;">Level</th>
                                    <th style="background-color: #FFD700; color: #800000; text-align: center;">Party</th>
                                    <th style="background-color: #FFD700; color: #800000; text-align: center;">Vote</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($candidate = $candidate_query->fetch_array()) { ?>
                                    <tr>
                                        <td style="text-align: center;">
                                            <img src="admin/<?php echo htmlspecialchars($candidate['img']); ?>" 
                                                 alt="Candidate Image" 
                                                 style="border-radius: 8px; object-fit: cover; height: 100px; width: 100px; border: 2px solid #800000; box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.15);">
                                        </td>
                                        <td style="text-align: center;"><?php echo htmlspecialchars($candidate['firstname']) . " " . htmlspecialchars($candidate['lastname']); ?></td>
                                        <td style="text-align: center;"><?php echo htmlspecialchars($candidate['gender']); ?></td>
                                        <td style="text-align: center;"><?php echo htmlspecialchars($candidate['year_level']); ?></td>
                                        <td style="text-align: center;"><?php echo htmlspecialchars($candidate['party']); ?></td>
                                        <td style="text-align: center;">
                                            <input type="checkbox" 
                                                   value="<?php echo htmlspecialchars($candidate['candidate_id']); ?>" 
                                                   name="third_rep_id" 
                                                   class="position-checkbox third_rep"> Give Vote
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
            <?php 
                    } else { 
                        echo "<p style='text-align: center;'>No candidates available for your year level.</p>";
                    }
                } else {
                    echo "<p style='text-align: center;'>You are not a third-year student.</p>";
                }
            ?>
        </div>
    </div>
</div>

<!-- FOURTH YEAR REPRESENTATIVES -->
<div class="col-lg-6">
    <div class="panel panel-primary" style="border: 2px solid #800000; border-radius: 10px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);">
        <div class="panel-heading" style="background-color: #800000; color: #FFD700; text-align: center; font-size: 1.5rem; font-weight: bold; padding: 15px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
            FOURTH YEAR REPRESENTATIVES
        </div>
        <div class="panel-body">
            <?php
                $voters_id = $_SESSION['voters_id']; 

                $stmt = $conn->prepare("SELECT `year_level` FROM `voters` WHERE `voters_id` = ?");
                $stmt->bind_param("i", $voters_id);
                $stmt->execute();
                $result = $stmt->get_result();
                $voter = $result->fetch_assoc();

                if ($voter['year_level'] == '4th Year') {
                    $candidate_query = $conn->query("SELECT * FROM `candidate` WHERE `position` = 'FOURTH YEAR REPRESENTATIVES'");
                    
                    if ($candidate_query->num_rows > 0) {
            ?>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="background-color: #FFD700; color: #800000; text-align: center;">Image</th>
                                    <th style="background-color: #FFD700; color: #800000; text-align: center;">Name</th>
                                    <th style="background-color: #FFD700; color: #800000; text-align: center;">Gender</th>
                                    <th style="background-color: #FFD700; color: #800000; text-align: center;">Level</th>
                                    <th style="background-color: #FFD700; color: #800000; text-align: center;">Party</th>
                                    <th style="background-color: #FFD700; color: #800000; text-align: center;">Vote</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($candidate = $candidate_query->fetch_array()) { ?>
                                    <tr>
                                        <td style="text-align: center;">
                                            <img src="admin/<?php echo htmlspecialchars($candidate['img']); ?>" 
                                                 alt="Candidate Image" 
                                                 style="border-radius: 8px; object-fit: cover; height: 100px; width: 100px; border: 2px solid #800000; box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.15);">
                                        </td>
                                        <td style="text-align: center;"><?php echo htmlspecialchars($candidate['firstname']) . " " . htmlspecialchars($candidate['lastname']); ?></td>
                                        <td style="text-align: center;"><?php echo htmlspecialchars($candidate['gender']); ?></td>
                                        <td style="text-align: center;"><?php echo htmlspecialchars($candidate['year_level']); ?></td>
                                        <td style="text-align: center;"><?php echo htmlspecialchars($candidate['party']); ?></td>
                                        <td style="text-align: center;">
                                            <input type="checkbox" 
                                                   value="<?php echo htmlspecialchars($candidate['candidate_id']); ?>" 
                                                   name="fourth_rep_id" 
                                                   class="position-checkbox fourth_rep"> Give Vote
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
            <?php 
                    } else { 
                        echo "<p style='text-align: center;'>No candidates available for your year level.</p>";
                    }
                } else {
                    echo "<p style='text-align: center;'>You are not a fourth-year student.</p>";
                }
            ?>
            <div style="display: flex; justify-content: center; align-items: center; margin-top: 20px;">
                <button class="btn btn-success ballot" type="submit" name="submit" style="background-color: #800000; color: white; font-weight: bold; border-radius: 8px; padding: 10px 20px;">Submit Ballot</button>
            </div>
        </div>
    </div>
</div>


    <?php include('script.php'); ?>

    <script type="text/javascript">
        $(document).ready(function () {
            function toggleCheckboxes(selector) {
                $(selector).on("change", function () {
                    if ($(selector + ":checked").length === 1) {
                        $(selector).attr("disabled", true);
                        $(selector + ":checked").removeAttr("disabled");
                    } else {
                        $(selector).removeAttr("disabled");
                    }
                });
            }


            toggleCheckboxes(".pres");
            toggleCheckboxes(".vpres");
            toggleCheckboxes(".secretary");
            toggleCheckboxes(".treasurer");
            toggleCheckboxes(".auditor");
            toggleCheckboxes(".pio");
            toggleCheckboxes(".first_rep");
            toggleCheckboxes(".second_rep");
            toggleCheckboxes(".third_rep");
            toggleCheckboxes(".fourth_rep");
        });
    </script>
</body>
</html>
