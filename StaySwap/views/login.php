
<html>
    <head>
        <title>stayswap sign up</title>
        <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
        <style>
body{
    padding: 0;
    margin: 0;
    background-color: #fefded;
}

.inner-container {
    width: 400px;
    height: 400px;
    position: absolute;
    top: calc(50vh - 200px);
    left: calc(50vw - 200px);
    overflow: hidden;
}

.box {
    position: absolute;
    height: 100%;
    width: 100%;
    font-family: Helvetica;
    color: #000;
    background: rgba(0, 0, 0, 0.13);
    padding: 40px 0px;
}

.box h1 {
    text-align: center;
    margin: 30px 0;
    font-size: 30px;
}

.box input {
    display: block;
    width: 300px;
    margin: 20px auto;
    padding: 15px;
    background: rgba(0, 0, 0, 0.2);
    color: #000;
    border: 0;
}

.box input:focus,
.box input:active,
.box button:focus,
.box button:active {
    outline: none;
}

.box button {
    background: #fa7070;
    border: 3px solid #000;
    border-bottom: 4px solid #000;
    color: #000;
    padding: 10px;
    font-size: 20px;
    width: 330px;
    margin: 20px auto;
    display: block;
    cursor: pointer;
}

.box button:active {
    background: #32343a;
}
    </style>
    </head>
<form method="post" action="login.php">
<br>
<div class="vid-container">
        <div class="inner-container">
            <div class="box">
<!--<label for='U-UN'><b>Username<b></label>-->
<br>
<input
type='text'
id='U-UN'
class='login-input-feild'
name='user-UN'
placeholder="Enter your username ..."
autofocus
/>
<br>

<!--label for='U-pass'><b>Password</b></label>-->
<input
type='password'
id='U-pass'
class='login-input-feild'
name='user-pass'
placeholder='Enter your password ...'
autofocus
/>
<br><br>
<button 
type='submit'
id='U_login_btn'
class='forms-input-btn'
name='U_login_btn'
>
<b>login</b>
</button>

<br><br>
</div></div></div>
</form>
</html>

<?php

require_once '../models/user.php';
require_once '../controllers/authcontroller.php';

if(isset($_POST['user-UN']) && isset($_POST['user-pass'])){
    if(!empty($_POST['user-UN'])&&!empty($_POST['user-pass'])){
        $key = false;
        $User = new user;
        $User->name = $_POST['user-UN'];
        $User->password = $_POST['user-pass'];
        $AuthCon = new authControlers;
        $key = $AuthCon->login($User);
        if($key){
            $state = $_SESSION['state'];
            if($state == 1){
                header('Location:Home.php');
            }
            else if($state == 2){
                header('Location:Home.php');
            }
            else{
                header('Location:notfound.php');
            }
}
    }
    else{
        echo 'fill all feilds';
    }
}?>

