


<?php
function m_get_data() {
    $query = "select * from employee";
    include "connection.php";
    $result = mysqli_query($connect, $query);
    $rows = [];
    if($result && mysqli_num_rows($result)>0) {
        while ($get_result_to_array = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $rows[] = $get_result_to_array;
        }
    }
    return $rows;
}

function m_delete_employee(){
    include "connection.php";
    $query = "DELETE FROM employee WHERE id=".$_GET['Id'];
    $results = mysqli_query($connect, $query);
    return $results;

}

function get_data_form(){
    include_once "connection.php";
    $id = $_GET['id'];
    $query = "SELECT * FROM employee where id= $id";

    $data = mysqli_query($connect, $query);
    // var_dump($data);die();
    return $data;
}


// delete user
function delete_user(){
    include "connection.php";
    $query = "DELETE FROM user WHERE id=".$_GET['Id'];
    $results = mysqli_query($connect, $query);
    return $results;

}

function get_data_user(){
    include_once "connection.php";
    $id = $_GET['id'];
    $query = "SELECT * FROM user where id= $id";

    $data = mysqli_query($connect, $query);
    // var_dump($data);die();
    return $data;
}


function c_update(){
    include "connection.php";
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $salary = $_POST['salary'];
    $age = $_POST['age'];


    $query = "UPDATE employee SET firstname='$firstname', 
        lastname='$lastname', 
        salary='$salary',
        age='$age' WHERE id ".$_GET['id'];
}



function m_update_employee(&$data){
    include "connection.php";
    $id=$_GET['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $salary = $_POST['salary'];
    $age = $_POST['age'];

    $query = "UPDATE employee set firstname='$firstname', lastname='$lastname', salary='$salary', age='$age'";
    $query .="WHERE id='$id' ";
    $result = mysqli_query($connect,$query);
    return $result;
    // var_dump($result);die();
}



// update user

// function update_user(){
//     include "connection.php";
//     $username = $_POST['username'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];


//     $query = "UPDATE user SET username='$username', 
//         email='$email',
//         password='$password' WHERE id ".$_GET['id'];
// }



// function updateUser(&$data){
//     include "connection.php";
//     $id=$_GET['id'];
//     $username = $_POST['username'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];

//     $query = "UPDATE employee set username='$username', email='$email', password='$password'";
//     $query .="WHERE id='$id' ";
//     $result = mysqli_query($connect,$query);
//     return $result;
//     // var_dump($result);die();
// }




function loginRegister(){
    include "connection.php";


        $uname = mysqli_real_escape_string($connect,$_POST['txt_uname']);
        $password = mysqli_real_escape_string($connect,$_POST['txt_pwd']);
        if ($uname != "" && $password != ""){
    
            $sql_query = "SELECT count(*) as cntUser from user where username='".$uname."' and password='".$password."'";
            $result = mysqli_query($connect,$sql_query);
            $row = mysqli_fetch_array($result);
    
            $count = $row['cntUser'];
    
            if($count > 0){
                $_SESSION['uname'] = $uname;
                header('location:index.php ?action=view');
            }else{
                header('location:index.php ?action=view');
            }
    
        }
}


function validateRegister(){
    include 'connection.php';

    if(isset($_POST['reg_user'])){

        $username = $_POST['username'];
        $fullname = $_POST['email'];
        $password = $_POST['password_1'];
       
            $sql_query = "INSERT into user(username,email,password) values('$username','$fullname','$password')";
            $result =mysqli_query($connect,$sql_query);
        // var_dump($result);die;
            return $result;
       
    }
}


function get_user_data() {
    $query = "select * from user";
    include "connection.php";
    $result = mysqli_query($connect, $query);
    $rows = [];
    if($result && mysqli_num_rows($result)>0) {
        while ($get_result_to_array = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $rows[] = $get_result_to_array;
        }
    }
    return $rows;
}


