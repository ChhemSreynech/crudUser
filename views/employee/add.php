<!-- 
<div class="contaier">
<a href="index.php" class="btn btn-primary">Back</a>
    <div class="card bg-warning">
        <div class="card-header bg-warning text-center">
            <h3>Add user</h3>
        </div>
        <div class="card-body">
        <form action="#" method="POST">
        <?php                    
             foreach( $data['employee_data'] as $result):
         ?>
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
             <?php endforeach ?>
        </div>
    </div>
    <button name="add" type="submit" class="btn btn-success">Add roow</button>
    <a href="#" type="button" class="btn btn-success">Save</a>
</form>
</div> -->

<?php
// include_once "connection.php";
// if(isset($_POST['add'])) {
//     $firstname = $_POST['firstname'];
//     $lastname = $_POST['lastname'];
//     $salary = $_POST['salary'];
//     $age = $_POST['age'];

// $query = "INSERT INTO employee (firstname,lastname,age, salary ) VALUE('$firstname','$lastname','$age','$salary')";
// $result = mysqli_query($connect, $query);

// if($result) {
//     header("location:index.php");
// }else {
//     echo "Cannot Add";
// }
// }
?>



