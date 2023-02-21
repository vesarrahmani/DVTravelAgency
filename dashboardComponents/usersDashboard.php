<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css code/dashboard.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <?php 
    include_once 'actionsSidebar.php';
?>
<div class="overview">
    <div class="title">
        <i class="fas fa-users-cog"></i>
        <span class="text">Users</span>
    </div>



    <div class="activity">
        <div class="boxx">
            <a class="submitAdd" href="addUser.php">Add User</a>
        </div>
        <div class="overlay" id="divOne">
            <div class="wrapper">
                <h2>User adding form</h2>
                <div class="content">
                   
                </div>
            </div>
        </div>
        <div class="table">
            <table class="styled-table">
                <thead>
                    <tr>
                        <th class="heads">ID</th>
                        <th class="heads"> Name</th>
                        <th class="heads">Last Name</th>
                        <th class="heads">City</th>
                        <th class="heads">Country</th>
                        <th class="heads">Phone</th>
                        <th class="heads">Username</th>
                        <th class="heads">Email</th>
                        <th class="heads">Password</th>
                        <th class="heads">Role</th>
                        <th class="heads">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require_once '../userMapper.php';
                    $model = new UserMapper();
                    $rows = $model->getAllUsers();
                    foreach ($rows as $row) {
                        ?>
                        <tr>
                            <td class="rows">
                                <?php echo $row['userid'] ?>
                            </td>
                            <td class="rows">
                                <?php echo $row['firstname']; ?>
                            </td>
                            <td class="rows">
                                <?php echo $row['lastname']; ?>
                            </td>
                            
                            <td class="rows">
                                <?php echo $row['city'] ?>
                            </td>
                            <td class="rows">
                                <?php echo $row['country']; ?>
                            </td>
                            <td class="rows">
                                <?php echo $row['phone']; ?>
                            </td>
                            
                            <td class="rows">
                                <?php echo $row['username'] ?>
                            </td>
                            <td class="rows">
                                <?php echo $row['email']; ?>
                            </td>
                            <td class="rows">
                                <?php echo $row['password']; ?>
                            </td>
                            <td class="rows">
                                <?php echo $row['role']; ?>
                            </td>
                            <td class="rows">
                                &nbsp;<a
                                    href="editUser.php?userid=<?php echo $row['userid']; ?>"><i
                                        class="fa fa-pencil-square-o"></i></a> &nbsp;&nbsp;
                                <a
                                    href="deleteUser.php?userid=<?php echo $row['userid']; ?>"><i
                                        class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>

                        <?php
                    }

                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="../javascript code/sidebar.js"></script>
</body>
</html>