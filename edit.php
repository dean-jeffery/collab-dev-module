

<?php

//DB conn, 
$username = "djeffery"; 
$password = "2021509"; 
$database = "djeffery_groupDB"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
 
$main_id = $_GET['main_id']; // get id through query string

$qry = mysqli_query($mysqli,"select * from main_table where main_id='$main_id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $main_property_number = $_POST['main_property_number'];
    $main_property_street = $_POST['main_property_street'];
    $main_property_postcode = $_POST['main_property_postcode'];
    $main_landlord_owner = $_POST['main_landlord_owner'];
    $main_current_tenants = $_POST['main_current_tenants'];
    $main_past_tenants = $_POST['main_past_tenants'];
    $main_action_due = $_POST['main_action_due'];
    $main_action_type = $_POST['main_action_type'];
    $main_inspection_due = $_POST['main_inspection_due'];
    $main_inspection_type = $_POST['main_inspection_type'];

	
    $edit = mysqli_query($mysqli,"update main_table set main_property_number='$main_property_number', main_property_street='$main_property_street', main_property_postcode='$main_property_postcode', main_landlord_owner='$main_landlord_owner', main_current_tenants='$main_current_tenants', main_past_tenants='$main_past_tenants', main_action_due='$main_action_due', main_action_type='$main_action_type', main_inspection_due='$main_inspection_due', main_inspection_type='$main_inspection_type' where main_id='$main_id'");
	
    if($edit)
    {
        mysqli_close($mysqli); // Close connection
        header("location:index.php"); // redirects to home
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>

<h3>Update Property Information</h3>

<form method="POST">
  <input type="text" name="main_property_number" value="<?php echo $data['main_property_number'] ?>" placeholder="Enter Property Number" Required>
  <input type="text" name="main_property_street" value="<?php echo $data['main_property_street'] ?>" placeholder="Enter Property Street" Required>
  <input type="text" name="main_property_postcode" value="<?php echo $data['main_property_postcode'] ?>" placeholder="Enter Property Postcode" Required>
  <input type="text" name="main_landlord_owner" value="<?php echo $data['main_landlord_owner'] ?>" placeholder="Enter Landlord" Required>
  <input type="text" name="main_current_tenants" value="<?php echo $data['main_current_tenants'] ?>" placeholder="Enter Property current tenants" Required>
  <input type="text" name="main_past_tenants" value="<?php echo $data['main_past_tenants'] ?>" placeholder="Enter Past tenants" Required>
  <input type="text" name="main_action_due" value="<?php echo $data['main_action_due'] ?>" placeholder="Enter action due status" Required>
  <input type="text" name="main_action_type" value="<?php echo $data['main_action_type'] ?>" placeholder="Enter Action type" Required>
  <input type="text" name="main_inspection_due" value="<?php echo $data['main_inspection_due'] ?>" placeholder="Enter inspection due status" Required>
  <input type="text" name="main_inspection_type" value="<?php echo $data['main_inspection_type'] ?>" placeholder="Enter inspection type" Required>

 <input type="submit" name="update" value="Update" class="button">
</form>

