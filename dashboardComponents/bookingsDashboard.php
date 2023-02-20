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
        <span class="text">Bookings</span>
    </div>



    <div class="activity">
        <div class="boxx">
            <a class="submitAdd" href="addBooking.php">Add new Booking</a>
        </div>
        <div class="overlay" id="divOne">
            <div class="wrapper">
                <h2>Bookings adding form</h2>
                <div class="content">
                   
                </div>
            </div>
        </div>
        <div class="table">
            <table class="styled-table">
                <thead>
                    <tr>
                        <th class="heads">ID</th>
                        <th class="heads">Name</th>
                        <th class="heads">Email</th>
                        <th class="heads">Phone</th>
                        <th class="heads">Address</th>
                        <th class="heads">Destination</th>
                        <th class="heads">Guest Number</th>
                        <th class="heads">Check in date</th>
                        <th class="heads">Check out date</th>
                        <th class="heads">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require_once '../bookingsMapper.php';
                    $model = new BookingsMapper();
                    $rows = $model->getAllBookings();
                    foreach ($rows as $row) {
                        ?>
                        <tr>
                            <td class="rows">
                                <?php echo $row['booking_ID'] ?>
                            </td>
                            <td class="rows">
                                <?php echo $row['name']; ?>
                            </td>
                            <td class="rows">
                                <?php echo $row['email']; ?>
                            </td>
                            
                            <td class="rows">
                                <?php echo $row['phone'] ?>
                            </td>
                            <td class="rows">
                                <?php echo $row['address']; ?>
                            </td>
                            <td class="rows">
                                <?php echo $row['destination']; ?>
                            </td>
                            
                            <td class="rows">
                                <?php echo $row['guestNumber'] ?>
                            </td>
                            <td class="rows">
                                <?php echo $row['check_In_date']; ?>
                            </td>
                            <td class="rows">
                                <?php echo $row['check_out_date']; ?>
                            </td>
                            <td class="rows">
                                &nbsp;<a
                                    href="editBooking.php?booking_ID=<?php echo $row['booking_ID']; ?>"><i
                                        class="fa fa-pencil-square-o"></i></a> &nbsp;&nbsp;
                                <a
                                    href="deleteBooking.php?booking_ID=<?php echo $row['booking_ID']; ?>"><i
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