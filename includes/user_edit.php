<?php

$id = $_GET['id'];

$select_user = "SELECT * FROM users WHERE id = '$id'";
$result_user = $connect -> query($select_user);
$row_user = $result_user -> fetch_assoc();

?>
<form method="post" action="functions/edit_user.php" style="margin:10px;">
<input type="hidden" name="id" value="<?php echo$id; ?>">
  <div class="form-group">

    <label for="exampleInputEmail1">username</label>
    <input type="text" name="username" value="<?php echo$row_user['username'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Username">
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">password</label>
    <input type="password" name="password" value="<?php echo$row_user['password'] ?>"  class="form-control" id="exampleInputEmail1" placeholder="password">
  </div>

    <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" value="<?php echo$row_user['email'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1"> Address</label>
    <input type="text" name="address" value="<?php echo$row_user['address'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Address">
  </div>

      <div class="form-group">
    <label for="exampleInputEmail1">Phone</label>
    <input type="text" name="phone" value="<?php echo$row_user['phone'] ?>" class="form-control" id="exampleInputEmail1" placeholder="Phone">
  </div>

  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio"  name="gender" id="inlineRadio1" value="0" 
  <?php if($row_user['gender'] ==  0){echo "checked";} ?>>
  <label class="form-check-label" for="inlineRadio1">Male</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="1" 
  <?php if($row_user['gender'] ==  1){echo "checked";} ?>>
  <label class="form-check-label" for="inlineRadio2">Female</label>
</div>

<br>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Privliges</label>
    <select name="privileges" class="form-control" id="exampleFormControlSelect1">
      <option value="0" <?php if($row_user['privileges'] ==  0){echo "selected";} ?>>Admin</option>
      <option value="1" <?php if($row_user['privileges'] ==  1){echo "selected";} ?>>Editor</option>

    </select>
  </div>

  <input type="submit" name="submit" class="btn btn-primary" value="Submit">
<!--   <button type="submit" class="btn btn-primary">Submit</button> -->
<a href="users.php" class="btn btn-link">Back to users</a>
</form>
