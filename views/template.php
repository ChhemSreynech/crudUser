
<!DOCTYPE html>
<head>
    <title>Mvc project</title>
    <script src="views/jquery-1.9.1.js"></script>
    <script src="views/list.js"></script>
    <script src="views/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <link href="views/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <link href="views/style.css" rel="stylesheet" type="text/css" media="">
</head>
<body >
    <div class="container">

        <legend class="login">
             <h3 >Emplyee Manager</h3> 
             <form method='post' action="index.php?action=login">
                 <input type="submit" value="Logout" name="but_logout">
             </form>
             <form method='post' action="index.php?action=viewUser">
                 <input type="submit" value="user" >
             </form>
             <!-- <a href="index.php?action=viewUser">user</a> -->
        </legend>

        <?php
        //include "views/employee/view.php";
        include "views/".$data['page'].".php";
        ?>
    </div>
</body>
</html>