<?php 
//include('dbconnection.php');
$action='';
if(isset($_REQUEST['action'])){
    $action=$_REQUEST['action'];
}else{
    
}
switch($action){
    case 'change-password':
        changePassword();
        break;
    case 'add-visitor':
        addVisitor();
    break;
    case 'contact':
        contact();
    break;
    case 'login':
        login();
    break;
    case 'account':
        account();
    break;
    case 'delete-visitor':
        deleteVisitor();
    break;
    case 'delete-user':
        deleteUser();
    break;
    case 'edit-user':
        editUser();
    break;
    case 'edit-visitor':
        editVisitor();
    break;
    case 'add-user':
        addUser();
    break;
    case 'logout':
        logout();
    break;
    case 'add-feedback':
        addFeedback();
    break;
    case 'add-purpose':
        addPurpose();
    break;
    default:
        echo "not valid url";
        exit;
        break;
}
function changePassword(){
    $con=connection();
    if($con){
        session_start(); 
        $password=$_REQUEST['new_password'];
        $query=mysqli_query($con,"update users set password='".md5($password)."' where id='1'");
        if($query){
            $_SESSION['success']="password changed";
            echo '<script>window.location.href="../change-password.php"</script>';
        }else{
            $_SESSION['error']="something went wrong";
            echo '<script>window.location.href="../change-password.php"</script>';
        }

    }else{
        $_SESSION['error']="connection failed";
        echo '<script>window.location.href="../change-password.php"</script>';
    }
}
function addVisitor(){
    $con=connection();
    if($con){
        session_start(); 
        $target_path = "../uploads/";  
       
        $real_name=explode('.',$_FILES['file']['name']);
        
        $file_name=strtotime(date('Y-m-d')).'.'.$real_name[1];
        $target_path = $target_path.basename( $file_name);   

        if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {  
            $_SESSION['success']="File uploaded successfully!";  
        } else{  
            $_SESSION['error']="Sorry, file not uploaded, please try again!";  
        }  

        $query=mysqli_query($con,"insert into visitors(name,email,phone,company,full_address,checkin,purpose,id_image,created_at) values('".$_REQUEST['name']."','".$_REQUEST['email']."','".$_REQUEST['phone']."','".$_REQUEST['company']."','".$_REQUEST['address']."','".$_REQUEST['checkin']."','".$_REQUEST['purpose']."','".$file_name."','now()')");
        if($query){
            $_SESSION['success']="visitor added";
            echo '<script>window.location.href="../add-visitor.php"</script>';
        }else{
            $_SESSION['error']="something went wrong";
            echo '<script>window.location.href="../add-visitor.php"</script>';
        }

    }else{
        $_SESSION['error']= "connection failed";
        echo '<script>window.location.href="../add-visitor.php"</script>';
    }
}
function editVisitor(){
    $con=connection();
    if($con){
        session_start(); 
        $upload_data='name="'.$_REQUEST['name'].'" , email="'.$_REQUEST['email'].'" ,phone="'.$_REQUEST['phone'].'", company ="'.$_REQUEST['company'].'", full_address="'.$_REQUEST['address'].'", checkin="'.$_REQUEST['checkin'].'", checkout="'.$_REQUEST['checkout'].'", purpose="'.$_REQUEST['purpose'].'"';

        if(isset($_FILES['file']['name']) && !empty($_FILES['file']['name'])){
            $target_path = "../uploads/";  
        
            $real_name=explode('.',$_FILES['file']['name']);
            
            $file_name=strtotime(date('Y-m-d h:i:s')).'.'.$real_name[1];
            $target_path = $target_path.basename( $file_name);   

            if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {  
        
                $upload_data .=', id_image="'.$file_name.'"';
            }
        }
        $query=mysqli_query($con,"update visitors set ".$upload_data." where id='".$_REQUEST['id']."'");
        if($query){
            $_SESSION['success']= "visitor updated";
            echo '<script>window.location.href="../visitor-report.php"</script>';
        }else{
            $_SESSION['error']= "something went wrong";
            echo '<script>window.location.href="../visitor-report.php"</script>';
        }

    }else{
        $_SESSION['error']= "connection failed";
        echo '<script>window.location.href="../visitor-report.php"</script>';
    }
}
function addFeedback(){
    $con=connection();
    if($con){
        session_start(); 
        $upload_data='checkout="'.$_REQUEST['checkout'].'" , feedback="'.$_REQUEST['feedback'].'"';

        
        $query=mysqli_query($con,"update visitors set ".$upload_data." where id='".$_REQUEST['id']."'");
        if($query){
            $_SESSION['success']= "visitor updated";
            echo '<script>window.location.href="../visitor-report.php"</script>';
        }else{
            $_SESSION['error']= "something went wrong";
            echo '<script>window.location.href="../visitor-report.php"</script>';
        }

    }else{
        $_SESSION['error']= "connection failed";
        echo '<script>window.location.href="../visitor-report.php"</script>';
    }
}
function addPurpose(){
    $con=connection();
    if($con){
        session_start(); 
        $upload_data='checkin="'.$_REQUEST['checkout'].'" , purpose="'.$_REQUEST['feedback'].'"';

        
        $query=mysqli_query($con,"update visitors set ".$upload_data." where id='".$_REQUEST['id']."'");
        if($query){
            $_SESSION['success']= "visitor updated";
            echo '<script>window.location.href="../visitor-report.php"</script>';
        }else{
            $_SESSION['error']= "something went wrong";
            echo '<script>window.location.href="../visitor-report.php"</script>';
        }

    }else{
        $_SESSION['error']= "connection failed";
        echo '<script>window.location.href="../visitor-report.php"</script>';
    }
}
function deleteVisitor(){
    $con=connection();
    session_start(); 
    $query=mysqli_query($con,'delete from visitors where id="'.$_REQUEST['id'].'"');
    if($query){
        $_SESSION['success']= "visitor deleted";
        echo '<script>window.location.href="../visitor-report.php"</script>';
    }else{
        $_SESSION['error']= "something went wrong";
        echo '<script>window.location.href="../visitor-report.php"</script>';
    }
}
function contact(){
    $con=connection();
    if($con){

        session_start(); 
        $query=mysqli_query($con,"insert into contacts(name,email,phone,company,message,created_at) values('".$_REQUEST['name']."','".$_REQUEST['email']."','".$_REQUEST['phone']."','".$_REQUEST['company']."','".$_REQUEST['message']."','".date('Y-m-d')."')");
        if($query){
            $_SESSION['success']= "contact added";
            echo '<script>window.location.href="../contact.php"</script>';
        }else{
            $_SESSION['error']= "something went wrong";
            echo '<script>window.location.href="../contact.php"</script>';
        }

    }else{
        $_SESSION['error']= "connection failed";
        echo '<script>window.location.href="../contact.php"</script>';
    }
}
function account(){
    $con=connection();
    if($con){
        session_start(); 
        $upload_data='name="'.$_REQUEST['name'].'"  , phone="'.$_REQUEST['phone'].'" , username ="'.$_REQUEST['username'].'" , address1="'.$_REQUEST['address1'].'"  , dob ="'.$_REQUEST['dob'].'" , address2="'.$_REQUEST['address2'].'" , city ="'.$_REQUEST['city'].'" , state="'.$_REQUEST['state'].'" , country ="'.$_REQUEST['country'].'"';
 
        if(isset($_FILES['file']['name']) && !empty($_FILES['file']['name'])){
            $target_path = "../uploads/";  
        
            $real_name=explode('.',$_FILES['file']['name']);
            
            $file_name=strtotime(date('Y-m-d')).'.'.$real_name[1];
            $target_path = $target_path.basename( $file_name);   

            if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {  
               
                $upload_data .=' , image="'.$file_name.'"';
            }
        }
      
        $query=mysqli_query($con,"update users set ".$upload_data." where id='".$_REQUEST['id']."'");
        if($query){
            $_SESSION['success']= "account updated";
            echo '<script>window.location.href="../account.php"</script>';
        }else{
            $_SESSION['error']= "something went wrong";
            echo '<script>window.location.href="../account.php"</script>';
        }

    }else{
        $_SESSION['error']= "connection failed";
        echo '<script>window.location.href="../account.php"</script>';
    }
}
function editUser(){
    $con=connection();
    if($con){
        session_start(); 
        $upload_data='name="'.$_REQUEST['name'].'"  , phone="'.$_REQUEST['phone'].'" , password ="'.md5($_REQUEST['password']).'" , address1="'.$_REQUEST['address1'].'"  , dob ="'.$_REQUEST['dob'].'" , address2="'.$_REQUEST['address2'].'" , city ="'.$_REQUEST['city'].'" , state="'.$_REQUEST['state'].'" , country ="'.$_REQUEST['country'].'"';
 
        if(isset($_FILES['file']['name']) && !empty($_FILES['file']['name'])){
            $target_path = "../uploads/";  
        
            $real_name=explode('.',$_FILES['file']['name']);
            
            $file_name=strtotime(date('Y-m-d')).'.'.$real_name[1];
            $target_path = $target_path.basename( $file_name);   

            if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {  
               
                $upload_data .=' , image="'.$file_name.'"';
            }
        }
      
        $query=mysqli_query($con,"update users set ".$upload_data." where id='".$_REQUEST['id']."'");
        if($query){
            $_SESSION['success']= "user updated";
            echo '<script>window.location.href="../user-report.php"</script>';
        }else{
            $_SESSION['error']= "something went wrong";
            echo '<script>window.location.href="../user-report.php"</script>';
        }

    }else{
        $_SESSION['error']= "connection failed";
        echo '<script>window.location.href="../user-report.php"</script>';
    }
}
function login(){

    $connection=connection();
    session_start(); 
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    // Establishing Connection with Server by passing server_name, user_id and password as a parameter

    // To protect MySQL injection for Security purpose
    $email = stripslashes($email);
    $password = stripslashes($password);
    $email = mysqli_real_escape_string($connection, $email);
    $password = mysqli_real_escape_string($connection, $password);

    // Selecting Database

    // SQL query to fetch information of registerd users and finds user match.
    $query=mysqli_query($connection,'Select *from users where email="'.$_REQUEST['email'].'" and password="'.md5($_REQUEST['password']).'"');
    
    $rows = mysqli_num_rows($query);
  
    if ($rows == 1) {
        $row_data=mysqli_fetch_assoc($query);
        $_SESSION=$row_data;
        $_SESSION['login_user'] = $email; // Initializing Session
        // echo "<pre>";
        // print_r($_SESSION);
        // exit;
        header("location: ../add-visitor.php"); // Redirecting To Other Page
    } else {
        $_SESSION['error'] = "credentials are invalid";
        echo '<script>window.location.href="../login.php"</script>';
    }
    mysqli_close($connection); // Closing Connection
}
function addUser(){
    $con=connection();
    if($con){
        session_start(); 
        $upload_data='name="'.$_REQUEST['name'].'"  , phone="'.$_REQUEST['phone'].'"  , address1="'.$_REQUEST['address1'].'"  , dob ="'.$_REQUEST['dob'].'" , address2="'.$_REQUEST['address2'].'" , city ="'.$_REQUEST['city'].'" , state="'.$_REQUEST['state'].'" , country ="'.$_REQUEST['country'].'"';
 
        if(isset($_FILES['file']['name']) && !empty($_FILES['file']['name'])){
            $target_path = "../uploads/";  
        
            $real_name=explode('.',$_FILES['file']['name']);
            
            $file_name=strtotime(date('Y-m-d')).'.'.$real_name[1];
            $target_path = $target_path.basename( $file_name);   

            if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {  
               
                $upload_data .=' , image="'.$file_name.'"';
            }else{
                $file_name='';
            }
        }
       $query=mysqli_query($con,'insert into users(name,email,phone,address1,address2,dob,city,state,country,image,password) values("'.$_REQUEST['name'].'","'.$_REQUEST['email'].'","'.$_REQUEST['phone'].'","'.$_REQUEST['address1'].'","'.$_REQUEST['address2'].'","'.$_REQUEST['dob'].'","'.$_REQUEST['city'].'","'.$_REQUEST['state'].'","'.$_REQUEST['country'].'","'.$file_name.'","'.md5($_REQUEST['password']).'" )');
        if($query){
            $_SESSION['success']= "User added";
           
            echo '<script>window.location.href="../user-report.php"</script>';
        }else{
            
            $_SESSION['error']= "something went wrong";
           echo '<script>window.location.href="../user-report.php"</script>';
        }

    }else{
        
        $_SESSION['error']= "connection failed";
        echo '<script>window.location.href="../user-report.php"</script>';
    }
}
function deleteUser(){
    $con=connection();
    session_start(); 
    $query=mysqli_query($con,'delete from users where id="'.$_REQUEST['id'].'"');
    if($query){
        $_SESSION['success']= "user deleted";
        echo '<script>window.location.href="../user-report.php"</script>';
    }else{
        $_SESSION['error']= "something went wrong";
        echo '<script>window.location.href="../user-report.php"</script>';
    }
}
function logout(){
    session_start();
    if(session_destroy()) // Destroying All Sessions
    {
    header("Location:../index.php"); // Redirecting To Home Page
    }
}
function connection(){
    $con=mysqli_connect("localhost", "root", "", "visitor_management");
    if(mysqli_connect_errno()){
        echo "Connection Fail".mysqli_connect_error();
    }
    return $con;
}

?>