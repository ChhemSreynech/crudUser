
<?php
$data = array();
flexible_function($data);

function flexible_function(&$data) {
    $function = 'register';
    if(isset($_GET['action'])) {
        $action = $_GET['action'];
        $function = $action;
    }

    $function($data);
}

// view user
function viewuser(&$data){
    $data['employee_data'] = get_user_data();
    $data['page'] = "employee/viewUser";
}
function addUser(&$data) {
    $data['page'] = "employee/addUser";
}

function view(&$data) {
    $data['employee_data'] = m_get_data();
    $data['page'] = "employee/view";
   // echo "view.php";
}
function add(&$data) {
    $data['page'] = "employee/add";
}
function update(&$data) {
    $data['Employee_data'] = get_data_form();
    $data['page'] = "employee/update";
}


function edit(&$data){
    $data = m_update_employee($_POST);
    if($data){
        $action ='view';
    } else {
        $action = 'edit&id=$id';
    }
    header("location:index.php?action=$action");
 }

 // update user

//  function updateUser(&$data) {
//     $data['Employee_data'] = updateUser($_POST);
//     $data['page'] = "employee/updateUser";
// }


// function editUser(&$data){
//     $data =updateUser($_POST);
//     if($data){
//         $action ='view';
//     } else {
//         $action = 'editUser&id=$id';
//     }
//     header("location:index.php?action=$action");
//  }


// function delete(&$data) {
//     $data_delete=m_delete_employee();
//     if($data_delete){
//         header('location:index.php?action=view');
//     } else{
//         echo "cannot delete this pages";
//     }
// }

// delete user
function deleteUser(&$data) {
    $data_delete=delete_user();
    if($data_delete){
        header('location:index.php?action=viewUser');
    } else{
        echo "cannot delete this pages";
    }
}


function login(&$data) {
    $data['page'] = 'login';
}

function loginValidate(){
    loginRegister();
}

function logout(){
    include "config.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: index.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: index.php');
}
}


function register(&$data){
    $data['page'] ='register';
}
function registerValidate(&$data){
    $data['employee_data']= validateRegister();
    if($data['employee_data']){
        $action = 'view';
    }else{
        header("location:index.php?action=$action");
    }
   
    header("location:index.php?action=register");
   
}



?>