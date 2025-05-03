<?php
    include("database.php");
    include("nav.php");
    include("sessioncheck.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="css\nav.css">
    <link rel="stylesheet" href="css\admin.css">
</head>
<body>
    <div class="main-container">
        <div class="sidebar">
                <ul class="sidebar-container">
                    <li>
                        <a href="admin.php">Dashboard</a>
                        <a href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        PHP CRUD With Database and Bootstrap
                    </h1>
                </div>
            </div>
            <div class="content">
                <h2>List of Records</h2>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>User-ID</th>
                                <th>First Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Registration Date</th>
                            </tr>
                        </thead>
                        <tbody> 
                            <?php
                                $sql = "SELECT * FROM student_tbl";
                                $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

                                // while($row = mysqli_fetch_assoc($result)){
                                //     echo '<tr>';
                                //     echo '<td>' . $row['student_id'] . '</td>';
                                //     echo '<td>' . $row['name'] . '</td>';
                                //     echo '<td>' . $row['email'] . '</td>';
                                //     echo '<td>' . $row['pass'] . '</td>';
                                //     echo '<td>' . $row['date'] . '</td>';
                                //     echo '</tr>';
                                // }
                                while($row = mysqli_fetch_assoc($result)){
                                    echo '<tr>';
                                    echo '<td>'. $row['student_id'] . '</td>';
                                    echo '<td>'. $row['name'] . '</td>';
                                    echo '<td>'. $row['email'] . '</td>';
                                    echo '<td>'. $row['pass'] . '</td>';
                                    echo '<td>'. $row['date'] . '</td>';
                                    echo '</tr>';
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>