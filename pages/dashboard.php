<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/dashboard.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.0/css/all.min.css">
    <title>Admin Panel</title>
</head>


<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>Hi, Admin</h1>
        </div>
        <ul>
            <li> <a href="dashboard.php" ><i class="fa fa-home"></i> Dashboard</a></li>
            <li><a href="../dashboardComponents/usersDashboard.php"  ><i class="fa fa-users"></i> Users</a></li>
            <li><a href="../dashboardComponents/bookingsDashboard.php" ><i class="fa fa-calendar"></i> Bookings</a></li>
            <li><a href="index.php" ><i class="fa fa-home"></i>Home</a></li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                
                
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>2194</h1>
                        <h3>Visitors</h3>
                    </div>
                    <div class="icon-case">
                        <img src="students.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>53</h1>
                        <h3>Bookings</h3>
                    </div>
                    <div class="icon-case">
                        <img src="teachers.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>5</h1>
                        <h3>Customers</h3>
                    </div>
                    <div class="icon-case">
                        <img src="schools.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>350000</h1>
                        <h3>Income</h3>
                    </div>
                    <div class="icon-case">
                        <img src="income.png" alt="">
                    </div>
                </div>
            </div>
            
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Recent Payments</h2>
                       <!-- <a href="#" class="btn">View All</a>-->
                    </div>
                    <table>
                        <tr>
                            <th>Name</th>
                            <th>Country</th>
                            <th>Amount</th>
                          <!--  <th>Option</th>-->
                        </tr>
                        <tr>
                            <td>Bleona</td>
                            <td>Gjermani</td>
                            <td>$1500</td>
                          <!--  <td><a href="#" class="btn">View</a></td>-->
                        </tr>
                        <tr>
                            <td>Deniz</td>
                            <td>Finland</td>
                            <td>$2000</td>
                           <!-- <td><a href="#" class="btn">View</a></td>-->
                        </tr>
                        <tr>
                            <td>Bleron</td>
                            <td>Venecia</td>
                            <td>$2500</td>
                          <!--  <td><a href="#" class="btn">View</a></td>-->
                        </tr>
                        <tr>
                            <td>Eron</td>
                            <td>Zvicer</td>
                            <td>$1200</td>
                           <!-- <td><a href="#" class="btn">View</a></td>-->
                        </tr>
                        <tr>
                            <td>Dijane</td>
                            <td>France</td>
                            <td>$3000</td>
                           <!-- <td><a href="#" class="btn">View</a></td>-->
                        </tr>
                        <tr>
                            <td>Vesa</td>
                            <td>Barcelone</td>
                            <td>$5000</td>
                         <!--   <td><a href="#" class="btn">View</a></td>-->
                        </tr>
                    </table>
                </div>
                <div class="new-students">
                    <div class="title">
                        <h2>New users</h2>
                        <a href="../dashboardComponents/usersDashboard.php" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>Profile</th>
                            <th>Name</th>
                            <!--<th>option</th>-->
                        </tr>
                        <tr>
                            <td><img src="../img/vesaa.jpg" alt=""></td>
                            <td>Vesa updated</td>
                            <td><img src="info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="../img/dijanaa.jpg" alt=""></td>
                            <td>Dijane</td>
                            <td><img src="info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="../img/dijanaa.jpg" alt=""></td>
                            <td>dijane updated	</td>
                            <td><img src="info.png" alt=""></td>
                        </tr>
                        <tr>
                            <td><img src="../img/dijanaa.jpg" alt=""></td>
                            <td>dijane updated2	</td>
                            <td><img src="info.png" alt=""></td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>