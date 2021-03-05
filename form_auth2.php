<!Doctype html>
<html>
<head>
</head>
<body>

<h3> Login </h3>
<?php 

session_start();

$userName = $_POST['userName'];
$password = $_POST['password'];
$login = $_POST['login'];

if(isset($_POST['userName'])&& !isset($_SESSION['userName'])){
    // set your user and password
    $users = [
        "bashorun" => '453632',
        "bash" => '4532539',
        "bas" => '12453632'
    ];
    // To check and verify the usernames and the passwords
    if(isset($users[$_POST['userName']])){
        if($users[$_POST['userName']] == $_POST['password']){
            $_SESSION['userName'] = $_POST['userName'];
        }
    }
    if(!isset($_SESSION['userName'])){
        $failed = true;
        echo "Failed login, Please sign up";
    }
}
?>
<form method="post" action="form_auth2.php">
<div>
    userName: <input type="text" name="userName"/>
    </div><br>

    <div>
    password: <input type="password" name="password"/>
    </div>


    <button type="submit" name="submit" value="submit"<?php echo "you are successfully log in " ?>> submit </button>

</form>
</body>
</html>