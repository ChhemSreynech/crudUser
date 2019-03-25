<div id="users">
<div class="col-md-12">
    <div class="pull-left">
        <input class="search" placeholder="Search" />
    </div>

    <div class="pull-right">
        <a href="index.php?action=addUser"><i class="glyphicon glyphicon-plus-sign" style="font-size:20px;"></i></a> &nbsp;
       
    </div>
</div>
<form action="user.php" method="POST">
    
    <table class="table-bordered col-md-12">
        <th class="sort text-center">ID</th>
        <th class="sort text-center" data-sort="fname">user Name</th>
        <th class="sort text-center" data-sort="age">email</th>
        <th class="sort text-center" data-sort="salary">password</th>
        <th class="sort text-center">Action</th>
        <tbody class="list">
        <?php
            if($data['employee_data'] != "") {
                $i=1;
                foreach ($data['employee_data'] as $rows) {
        ?>
        <tr>
            <td><?php echo $i;  ?></td>
            <td><?php echo $rows['username'];?></td>
            <td><?php echo $rows['email'];  ?></td>
            <td><?php echo $rows['password'];  ?></td>
            <td class="text-center">
                <a href="index.php?action=add&id=<?php echo $rows['id'] ?>">
                <i class="glyphicon glyphicon-eye-open" style="color:green;"></i></a>&nbsp;

                <a href="index.php?action=updateUser&id=<?php echo $rows['id'] ?>">
                <i class="glyphicon glyphicon-edit" style="color:blue;"></i></a>&nbsp;

                <a href="index.php?action=deleteUser&Id=<?php echo $rows['id'] ?>">
                <i class="glyphicon glyphicon-trash" style="color:red"></i></a>&nbsp;
            </td>
        </tr>
        <?php
         $i++;
         }
         } else {
             echo "<tr><td colspan='6'>No record found...!</td></tr>";
         }
         ?>
        </tbody>

    </table>
</form>
</div>