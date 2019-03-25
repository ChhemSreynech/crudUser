
<div class="contaier">
<a href="index.php" class="btn btn-primary">Back</a>
    <div class="card bg-warning">
        <div class="card-header bg-warning text-center">
            <h3>Add user</h3>
        </div>
        <div class="card-body">
        <?php
            // $data = array();                       
            foreach( $data['Employee_data'] as $result):
            // $data = $result;
        ?>
        <form action="index.php?action=editUser&id=<?php echo $result['id'] ?>" method="POST">
      
            <div class="form-group">
                <input type="text" name="username" placeholder="username" class="form-control"
                value="<?php echo $result['username']; ?>">
                <input type="text" name="email" placeholder="email" class="form-control"
                value="<?php echo $result['email']; ?>">
                <input type="number" name="password" placeholder="password" class="form-control"
                value="<?php echo $result['password']; ?>">
             </div>
         
             <button type="submit" class="btn btn-success">Save</button>
        </form>
        <?php endforeach ?>
        </div>
    </div>
    <!-- <a href="#" type="submit" class="btn btn-success"></a> -->
</div> 

<?php


?> 