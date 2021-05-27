

<?php

//DB conn, 
$username = "djeffery"; 
$password = "2021509"; 
$database = "djeffery_collab-dev-module"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
 
$id = $_GET['id']; // get id through query string

$qry = mysqli_query($mysqli,"select * from tbl_properties where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $propertyname = $_POST['propertyname'];
    $landlord = $_POST['landlord'];
    $tenants = $_POST['tenants'];
    $actionsdue = $_POST['actionsdue'];
    $actiontype = $_POST['actiontype'];
    $inspectionsdue = $_POST['inspectionsdue'];
    $inspectiontype = $_POST['inspectiontype'];
    $notes = $_POST['notes'];
	
    $edit = mysqli_query($mysqli,"update tbl_properties set propertyname='$propertyname', landlord='$landlord', tenants='$tenants', actionsdue='$actionsdue', inspectionsdue='$inspectionsdue', inspectiontype='$inspectiontype', notes='$notes' where id='$id'");
	
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
  <input type="text" name="propertyname" value="<?php echo $data['propertyname'] ?>" placeholder="Enter Property Name" Required>
  <input type="text" name="landlord" value="<?php echo $data['landlord'] ?>" placeholder="Enter Landlord" Required>
  <input type="text" name="tenants" value="<?php echo $data['tenants'] ?>" placeholder="Enter tenants" Required>
  <input type="text" name="actionsdue" value="<?php echo $data['actionsdue'] ?>" placeholder="Enter actions due status" Required>
  <input type="text" name="actiontype" value="<?php echo $data['actiontype'] ?>" placeholder="Enter any actions due" Required>
  <input type="text" name="inspectionsdue" value="<?php echo $data['inspectionsdue'] ?>" placeholder="Enter inspections due status" Required>
  <input type="text" name="inspectiontype" value="<?php echo $data['inspectiontype'] ?>" placeholder="Enter any inspections due" Required>
  <input type="text" name="notes" value="<?php echo $data['notes'] ?>" placeholder="Enter notes" Required>
  <input type="submit" name="update" value="Update">
</form>

