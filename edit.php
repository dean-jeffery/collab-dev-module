<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit | Complete Property Solutions</title>
    <link rel="stylesheet" href="reset.css" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
  <!-- HEADER -->
  <header>
    <div class="wrapper">
      <ul>
        <li>
        <a href="index.html"><h1>Complete Property Solutions</h1></a>
        </li>
      </ul>
    </div>
  </header>
  <!-- BODY -->
  <div class="wrapper">
  <!-- 80% content wrapper -->
  <!-- Button row -->
    <div class="button-space">
      <a href="index.html" class="button">Home</a>
      <a href="add.html" class="button">Add</a>
    </div>
      <div class="form-heading">
        <h2>Edit Property</h2>
      </div>
      <!-- TEMP -->
      <form action="#">
      <!-- Address -->
        <div class="row">
          <div class="col-25">
            <label for="adress">Address</label>
          </div>
          <div class="col-75">
            <input type="text" id="adress" name="address" placeholder="Property address..">
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
        <!-- Inspection Required -->
        <div class="row">
          <div class="col-25">
            <label for="inspection">Inspection Required</label>
          </div>
          <div class="col-75">
            <input type="text" id="inspection" name="inspection" placeholder="Inspection Required?"/>
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
          <input type="submit" value="Submit">
        </div>
      </form>
  </div>
  </body>
</html>
