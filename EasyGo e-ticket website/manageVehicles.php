<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Admin Dashboard | Korsat X Parmaga</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
table {
  border-collapse: collapse;
}
tr{
    min-width: 60%;
}
th, td {
  text-align: left;
  padding: 8px;
}
th{
    background-color: #0eeff0;
}

tr:nth-child(even){background-color: #0eeff0;}

th {
  background-color: #04AA6D;
  color: white;
}
</style>
</head>

<body>
        <!-- =============== Navigation ================ -->
     <div class="container">
        <div class="navigation">
            <ul>
            <div class="logo-img">
                   <img src="icons/ritco.jpg" alt="">
                </div>

                <li>
                    <a href="adminPanel.html">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="generalSetting.html">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">General</span>
                    </a>
                </li>
                <div class="dropdown">
                <a href="">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                    </span>
                    <span class="title">Routes</span>
                </a> 
                    <div class="dropdown_content">
                        <li><a href="manageRoute.html">Manage Routes</a></li>
                        <li><a href="route.html">Add Routes</a></li>
                    </div>
                </div>
        
                <li>
                    <a href="dashboard.html">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Users</span>
                    </a>
                </li>

                <li>
                    <a href="vehicles.html">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class="title">Vehicles</span>
                    </a>
                </li>

                <li>
                    <a href="d">
                        <span class="icon">
                            
                        </span>
                        <span class="title">Tarrifs</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class="title">Notifications</span>
                    </a>
                </li>

                <li>
                    <a href="dashboard.html">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                 <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                 <label>
                     <input type="text" placeholder="Search here">
                     <ion-icon name="search-outline"></ion-icon>
                 </label>
               </div>

               <div class="user">
                  <img src="assets/imgs/customer01.jpg" alt="">
               </div>
            </div>
            <!-----php-->
            <?php
            
            echo '<table border="0" cellspacing="0" cellpadding="2"> 
            <thead>
            <tr> 
            <th><font face="Arial">PLATE NUMBER</font> </th>
            <th> <font face="Arial">VEHICLE NAME</font> </th>
            <th><font face="Arial">VEHICLE TYPE</font></th>
            <th><font face="Arial">CAPACITY</font></th>
         </tr>
         </thead>';
                    
                  
            require("server.php");
            $result = mysqli_query ($con, "SELECT *FROM vehicles");
              echo "<tbody>";
            
            while($row = mysqli_fetch_assoc($result))
            {
            echo "<tr><td>".$row['PlateNumber']."</td>"."<td>".$row['VehicleName']."</td>"." <td>".$row['VehicleType']."</td>"."<td>".$row['VehicleCapacity']."</td>"."</tr>";
            }
            
                  
                    echo "</tbody>";
                echo "</table>";
                ?>
        <tbody>
        </tbody>
    </table>
            
    </div>
   

    

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>