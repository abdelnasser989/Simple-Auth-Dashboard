<a href="?do=add" class="btn btn-primary m-3">Add User</a>
<table class="table table-hover table-bordered table-striped" style="width: 95%;margin:auto;">
    <thead>
        <tr>
            <th>id</th>
            <th>username</th>
            <th>email</th>
            <th>address</th>
            <th>phone</th>
            <th>gender</th>
            <th>privileges</th>
            <th>Controls</th>
        </tr>
    </thead>
    <tbody>
        <?php
    
        $select_user = "SELECT * FROM users";
        $result_user = $connect->query($select_user);
        $counter = 0;
        foreach($result_user as $row_user){
             
       
        ?>


        <tr>
            <td><?php echo++$counter; ?></td>
            <td><?php echo$row_user['username'] ?></td>
            <td><?php echo$row_user['email'] ?></td>
            <td><?php echo$row_user['address'] ?></td>
            <td><?php echo$row_user['phone'] ?></td>
            <td><?php if($row_user['gender'] == 0){echo "Male";}else{echo "Female";} ?></td>
            <td><?php if($row_user['privileges'] == 0){echo "Admin";}else{echo "Editor";} ?></td>
            <td>
                <a href="?do=edit&id=<?php echo$row_user['id'] ?>" class="btn btn-primary">Edit</a>

                <!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo$row_user['id'] ?>">
 Delete  
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo$row_user['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete <span style="color: red;"><?php echo$row_user['username'] ?></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are You Sure to delete <span style="color: red;"><?php echo$row_user['username'] ?></span> ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="functions/delete_user.php?id=<?php echo$row_user['id'] ?>" class="btn btn-danger">Confirm</a>
      </div>
    </div>
  </div>
</div>
            


            </td>
        </tr>
        <?php  } ?>
    </tbody>
</table>