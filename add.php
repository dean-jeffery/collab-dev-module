<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add | Complete Property Solutions</title>
    <link rel="stylesheet" href="reset.css" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
  <!-- HEADER -->
  <header>
    <div class="wrapper">
      <ul>
        <li>
        <a href="index.php"><h1>Complete Property Solutions</h1></a>
        </li>
      </ul>
    </div>
  </header>
  <!-- BODY -->
  <div class="wrapper">
  <!-- 80% content wrapper -->
  <!-- Button row -->
    <div class="button-space">
      <a href="index.php" class="button">Home</a>
    </div>
      <div class="form-heading">
        <h2>Add New Property</h2>
      </div>
<!-- ADD PROPERTY FORM -->
      <form action="insert.php" method="POST">
      <!-- Property Number -->
        <div class="row">
          <div class="col-25">
            <label for="main_property_number">Property Number:</label>
          </div>
          <div class="col-75">
            <input type="text" id="main_property_number" name="main_property_number" placeholder="Property Number..">
          </div>
        </div>
        <!-- Street -->
        <div class="row">
          <div class="col-25">
            <label for="main_property_street">Property Street</label>
          </div>
          <div class="col-75">
            <input type="text" id="main" name="main_property_street" placeholder="Street name..">
          </div>
        </div>
        
        <!-- Postcode -->
        <div class="row">
          <div class="col-25">
            <label for="main_property_postcode">Postcode</label>
          </div>
          <div class="col-75">
            <input type="text" id="main_property_postcode" name="main_property_postcode" placeholder="Postcode.."/>
          </div>
        </div>
        <!-- Landlord -->
        <div class="row">
          <div class="col-25">
            <label for="main_landlord_owner">Landlord</label>
          </div>
          <div class="col-75">
            <input type="text" id="main_landlord_owner" name="main_landlord_owner" placeholder="Landlord.."/>
          </div>
        </div>
        <!-- Current tenants -->
        <div class="row">
          <div class="col-25">
            <label for="main_current_tenants">Current Tenant(s)</label>
          </div>
          <div class="col-75">
            <input type="text" id="main_current_tenants" name="main_current_tenants" placeholder="Current Tenant(s).."/>
          </div>
        </div>
        <!-- Past Tenants -->
        <div class="row">
          <div class="col-25">
            <label for="main_past_tenants">Past Tenant(s)</label>
          </div>
          <div class="col-75">
            <input type="text" id="main_past_tenants" name="main_past_tenants" placeholder="Past Tenant(s).."/>
          </div>
        </div>
         <!-- Action due -->
         <div class="row">
          <div class="col-25">
            <label for="main_action_due">Action due</label>
          </div>
          <div class="col-75">
            <input type="text" id="main_action_due" name="main_action_due" placeholder="Action Due"/>
          </div>
        </div>
        <!-- Action Type -->
        <div class="row">
          <div class="col-25">
            <label for="main_action_type">Action type</label>
          </div>
          <div class="col-75">
            <input type="text" id="main_action_type" name="main_action_type" placeholder="Action Type.."/>
          </div>
        </div>
        <!-- Inspection due-->
        <div class="row">
          <div class="col-25">
            <label for="main_inspection_due">Inspection due</label>
          </div>
          <div class="col-75">
            <input type="text" id="main_inspection_due" name="main_inspection_due" placeholder="Inspection Due"/>
          </div>
        </div>
        <!-- Inspection type-->
        <div class="row">
          <div class="col-25">
            <label for="main_inspection_type">Inspection Type</label>
          </div>
          <div class="col-75">
            <input type="text" id="main_inspection_type" name="main_inspection_type" placeholder="Inspection Type"/>
          </div>
        </div>
        <div class="row">
          <button type="submit" name="submit" id="submit" >Submit</button>
        </div>
      </form>
  </div>
  </body>
</html>
