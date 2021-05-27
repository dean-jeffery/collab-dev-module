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
      
<!-- TABLE -->

    <table id="properties">

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
        <th>Edit</th>
<?php

    $username = "djeffery"; 
    $password = "2021509"; 
    $database = "djeffery_collab-dev-module"; 
    $mysqli = new mysqli("localhost", $username, $password, $database); 
       
$records = mysqli_query($mysqli,"select * from tbl_properties"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['propertyname']; ?></td>
    <td><?php echo $data['landlord']; ?></td>
    <td><?php echo $data['tenants']; ?></td>
    <td><?php echo $data['actionsdue']; ?></td>
    <td><?php echo $data['actiontype']; ?></td>
    <td><?php echo $data['inspectionsdue']; ?></td>
    <td><?php echo $data['inspectiontype']; ?></td>
    <td><?php echo $data['notes']; ?></td>
    <td><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
    <!-- <td><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td> -->
  </tr>	
<?php
}
?>


    </table>





    </div>
  </body>
</html>