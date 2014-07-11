<?php

include 'dropInfo.php';

?>
<p>
    <h3>Customer Information</h3>
   <form role="form">
  <div class="form-group">
    <label >customerID</label>
    <input type="text" name="cus" class="form-control" id="cus" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label>LastName</label>
    <input type="text" name="last" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
  </div>
    <div class="form-group">
    <label >FirstName</label>
    <input type="text" name="first" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
  </div>
    <div class="form-group">
    <label >Street</label>
    <input type="text" name="street" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
  </div>
    <div class="form-group">
    <label >Area</label>
    <input type="text" name="area" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
  </div>
    <div class="form-group">
    <label >City</label>
    <input type="text" name="city" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label>Region</label>
    <input type="text" name="Region" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
  </div>
    <div class="form-group">
    <label >Phone Number</label>
    <input type="text" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
  </div>
    <div class="form-group">
    <label >Cellphone Number</label>
    <input type="text" name="cell" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
  </div>
    <div class="form-group">
    <label >Plan</label>
    <select class="form-control">
<?php
  print("$outputDrop");
?>
    </select> 
    </div>
    <button type="submit" value="submit" class="btn btn-default">Submit</button>
</form>
  </p>