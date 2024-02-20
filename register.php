<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php
require_once 'core/init.php';
if(Input::exists()){
    $validate = new $Validation();
    $validation = $validate->check($_POST, array(
        'username' => array(
            'required' => true,
            'min' => 2,
            'max' => 20,
            'unique' => 'users'
        ),

        'password' => array(
            'required' => true,
            'min' => 6
            
        ),

        'password_again' => array(
            'required' => true,
            'matches' => 'password'
        ),
        'name' => array(
            'required' => true,
            'min' => 2,
            'max' => 50
        )
    ));
/*if($validation->passed()){

}*/
}
?>
<form action="" method="post">
    <div class = "field">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="" autocomplete="off">
    </div>

    <div class = "field">
    <label for="password">Choose a Password</label>
        <input type="password" name="password" id="password" value="" autocomplete="off">
    </div>

    <div class = "field">
    <label for="password_again"> Enter your password again</label>
        <input type="password" name="password_again" id="password_again" value="" autocomplete="off">
    </div>

    <div class = "field">
    <label for="name">Enter your name</label>
        <input type="text" name="name" id="name" value="" autocomplete="off">
    </div>
    <input type="submit" value="Register">
</form>
<?php

?>
</body>
</html>