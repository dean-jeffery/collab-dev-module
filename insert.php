<?php
$username = "djeffery"; 
$password = "2021509"; 
$database = "djeffery_groupDB"; 
$conn = mysqli_connect('localhost', $username, $password, $database);

if(isset($_POST ['submit'])){

    if(isset($_POST['submit'])){

        if(!empty($_POST['main_property_number']) && !empty($_POST['main_property_street']) && !empty($_POST['main_property_postcode']) && !empty($_POST['main_landlord_owner']) && !empty($_POST['main_current_tenants']) && !empty($_POST['main_past_tenants']) && !empty($_POST['main_action_due']) && !empty($_POST['main_action_type']) && !empty($_POST['main_inspection_due']) && !empty($_POST['main_inspection_type'])) {

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


            $query = "INSERT INTO main_table (main_property_number, main_property_street, main_property_postcode, main_landlord_owner, main_current_tenants, main_past_tenants, main_action_due, main_action_type, main_inspection_due, main_inspection_type)
            VALUES ('{$main_property_number}','{$main_property_street}','{$main_property_postcode }','{$main_landlord_owner}','{$main_current_tenants}','{$main_past_tenants}','{$main_action_due}','{$main_action_type}','{$main_inspection_due}','{$main_inspection_type}')";

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
