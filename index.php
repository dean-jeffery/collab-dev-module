<?php
?>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Complete Property Solutions</title>
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <!-- HEADER -->
    <header>
      <div class="wrapper">
        <ul>
          <li><a href="index.php"><h1>Complete Property Solutions</h1></a></li>
        </ul>
      </div>
    </header>
    <!-- BODY -->
    <div class="wrapper"> <!-- 80% content wrapper -->
      <!-- Button row -->
      <div class="button-space">
        <a href="add.php" class="button">Add</a>
        <a href="edit.php" class="button">Edit</a>
      </div>
      <!-- Property table -->
      <?php 
        $username = "djeffery"; 
        $password = "2021509"; 
        $database = "djeffery_collab-dev-module"; 
        $mysqli = new mysqli("localhost", $username, $password, $database); 
        $query = "SELECT * FROM tbl_properties";


        echo '<table id="properties"> 
            <tr> 
                <th>ID</th>
                <th>Property Name</th>
                <th>Landlord</th>
                <th>Tenant(s)</th>
                <th>Actions Due</th>
                <th>Action Type</th>
                <th>Inspections Due</th>
                <th>Inspection Type</th>
                <th>Notes</th>
            </tr>';

        if ($result = $mysqli->query($query)) {
            while ($row = $result->fetch_assoc()) {
                $id = $row["id"];
                $propertyName = $row["property name"];
                $landlord = $row["landlord"];
                $tenants = $row["tenants"];
                $actionsDue = $row["actions due"];
                $actionType = $row["action type"];
                $inspectionsDue = $row["inspections due"];
                $inspectionType = $row["inspection type"];
                $notes = $row["notes"];

                echo '<tr> 
                        <td>'.$id.'</td> 
                        <td>'.$propertyName.'</td> 
                        <td>'.$landlord.'</td> 
                        <td>'.$tenants.'</td> 
                        <td>'.$actionsDue.'</td> 
                        <td>'.$actionType.'</td> 
                        <td>'.$inspectionsDue.'</td> 
                        <td>'.$inspectionType.'</td> 
                        <td>'.$notes.'</td> 

                    </tr>';
            }
            $result->free();
        } 
        ?>

    </div>
  </body>
</html>