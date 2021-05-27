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
      </div>
      
<!-- TABLE -->

    <table id="properties">

    <tr> 
        <th>ID</th>
        <th>Property Number</th>
        <th>Property Street name</th>
        <th>Property Postcode</th>
        <th>Landlord</th>
        <th>Current Tenant(s)</th>
        <th>Previous Tenant(s)</th>
        <th>Actions Due</th>
        <th>Action Type</th>
        <th>Inspections Due</th>
        <th>Inspection Type</th>
        <th>Edit</th>
<?php

    $username = "djeffery"; 
    $password = "2021509"; 
    $database = "djeffery_groupDB"; 
    $mysqli = new mysqli("localhost", $username, $password, $database); 
       
$records = mysqli_query($mysqli,"select * from main_table"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['main_id']; ?></td>
    <td><?php echo $data['main_property_number']; ?></td>
    <td><?php echo $data['main_property_street']; ?></td>
    <td><?php echo $data['main_property_postcode']; ?></td>
    <td><?php echo $data['main_landlord_owner']; ?></td>
    <td><?php echo $data['main_current_tenants']; ?></td>
    <td><?php echo $data['main_past_tenants']; ?></td>
    <td><?php echo $data['main_action_due']; ?></td>
    <td><?php echo $data['main_action_type']; ?></td>
    <td><?php echo $data['main_inspection_due']; ?></td>
    <td><?php echo $data['main_inspection_type']; ?></td>
    <td><a href="edit.php?id=<?php echo $data['main_id']; ?>" class="edit">Edit</a></td>
    <!-- <td><a href="delete.php?id=<?php echo $data['main_id']; ?>">Delete</a></td> -->
  </tr>	
<?php
}
?>


    </table>





    </div>
  </body>
</html>