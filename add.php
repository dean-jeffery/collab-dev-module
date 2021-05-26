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
      <a href="edit.php" class="button">Edit</a>
    </div>
      <div class="form-heading">
        <h2>Add New Property</h2>
      </div>
<!-- ADD PROPERTY FORM -->
      <form action="insert.php" method="POST">
      <!-- Property Name -->
        <div class="row">
          <div class="col-25">
            <label for="propertyName">Property Name:</label>
          </div>
          <div class="col-75">
            <input type="text" id="propertyName" name="propertyName" placeholder="Property Name..">
          </div>
        </div>
        <!-- Landlord -->
        <div class="row">
          <div class="col-25">
            <label for="landlord">Landlord</label>
          </div>
          <div class="col-75">
            <input type="text" id="landlord" name="landlord" placeholder="Landlord name..">
          </div>
        </div>
        <!-- KEEP THIS FOR LATER -->
        <!--  -->
        <!-- <div class="row">
        <div class="col-25">
        <label for="country">Country</label>
        </div>
        <div class="col-75">
        <select id="country" name="country">
        <option value="australia">Australia</option>
        <option value="canada">Canada</option>
        <option value="usa">USA</option>
        </select>
        </div>
        </div>
        <div class="row">
        <div class="col-25">
        <label for="tenants">Tenant(s)</label>
        </div>
        <div class="col-75">
        <textarea id="tenants" name="tenants" placeholder="Tenants names.." style="height:200px"></textarea>
        </div>
        </div>
        -->
        <!--  -->
        <!--  -->
        <!-- Tenants -->
        <div class="row">
          <div class="col-25">
            <label for="tenants">Tenant(s)</label>
          </div>
          <div class="col-75">
            <input type="text" id="tenants" name="tenants" placeholder="Tenants names.."/>
          </div>
        </div>
        <!-- Actions Due -->
        <div class="row">
          <div class="col-25">
            <label for="actionsDue">Actions Due</label>
          </div>
          <div class="col-75">
            <input type="text" id="actionsDue" name="actionsDue" placeholder="Actions Due"/>
          </div>
        </div>
        <!-- Actions Type -->
        <div class="row">
          <div class="col-25">
            <label for="actionType">Action Type</label>
          </div>
          <div class="col-75">
            <input type="text" id="actionType" name="actionType" placeholder="Action Type"/>
          </div>
        </div>
        <!-- Inspections Due -->
        <div class="row">
          <div class="col-25">
            <label for="inspectionsDue">Inspections Due</label>
          </div>
          <div class="col-75">
            <input type="text" id="inspectionsDue" name="inspectionsDue" placeholder="Inspections Due"/>
          </div>
        </div>
         <!-- Inspection Type -->
         <div class="row">
          <div class="col-25">
            <label for="inspectionType">Inspection Type</label>
          </div>
          <div class="col-75">
            <input type="text" id="inspectionType" name="inspectionType" placeholder="Inspection Type"/>
          </div>
        </div>
        <!-- Notes -->
        <div class="row">
          <div class="col-25">
            <label for="notes">notes</label>
          </div>
          <div class="col-75">
            <input type="text" id="notes" name="notes" placeholder="Notes.."/>
          </div>
        </div>
        <div class="row">
          <button type="submit" name="submit">Submit</button>
        </div>
      </form>
  </div>
  </body>
</html>
