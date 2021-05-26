<?php
$username = "djeffery"; 
$password = "2021509"; 
$database = "djeffery_collab-dev-module"; 
$conn = mysqli_connect('localhost', $username, $password, $database);

if(isset($_POST ['submit'])){

    if(isset($_POST['submit'])){

        if(!empty($_POST['propertyName']) && !empty($_POST['landlord']) && !empty($_POST['tenants']) && !empty($_POST['actionsDue']) && !empty($_POST['actionType']) && !empty($_POST['inspectionsDue']) && !empty($_POST['inspectionType']) && !empty($_POST['notes'])) {

            $propertyName = $_POST['propertyName'];
            $landlord = $_POST['landlord'];
            $tenants = $_POST['tenants'];
            $actionsDue = $_POST['actionsDue'];
            $actionType = $_POST['actionType'];
            $inspectionsDue = $_POST['inspectionsDue'];
            $inspectionType = $_POST['inspectionType'];
            $notes = $_POST['notes'];


            $query = "INSERT INTO tbl_properties (propertyname, landlord, tenants, actionsdue, actiontype, inspectionsdue, inspectiontype, notes)
            VALUES ('{$propertyName}','{$landlord}','{$tenants}','{$actionsDue}','{$actionType}','{$inspectionsDue}','{$inspectionType}','{$notes}')";

            $run = mysqli_query($conn, $query) or die(mysqli_error());

            if($run){
                echo "Added property successfully!";
            }
            else{
                echo "Error! Property was not submitted!";
            }

        }
        else{
            echo "Please enter something in each field";
        }

    }

}

?>
