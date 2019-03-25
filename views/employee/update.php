

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
        <form action="index.php?action=edit&id=<?php echo $result['id'] ?>" method="POST">
      
            <div class="form-group">
                <input type="text" name="firstname" placeholder="First name" class="form-control"
                value="<?php echo $result['firstname']; ?>">
                <input type="text" name="lastname" placeholder="Last name" class="form-control"
                value="<?php echo $result['lastname']; ?>">
                <input type="number" name="age" placeholder="Your age" class="form-control"
                value="<?php echo $result['age']; ?>">
                <input type="number" name="salary" placeholder="Salary" class="form-control" 
                value="<?php echo $result['salary']; ?>">
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