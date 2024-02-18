<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php

require_once 'core/init.php';
$user = DB::getInstance()->get('users', array('username', '=',"marko"));

if(!$user->count()){
   echo "ERROR";
}else {
    //echo $user->first()->name;
    foreach($user->result() as $user) {
        echo $user->username,"<br>" ;
    }
}

?>
</body>
</html>