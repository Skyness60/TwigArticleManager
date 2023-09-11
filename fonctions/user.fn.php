<?php 

function connection($db, $username, $password) 
{
    $sql = "SELECT * FROM user WHERE username = :username AND password = :password";
    $statement = $db->prepare($sql);
    $statement->bindParam(':username', $username);
    $statement->bindParam(':password', hash("sha256", $password));
    $statement->execute();
    
    $user = $statement->fetch();

    if ($user) {
        addSession($user);

        return true;
    } else {

        return false;
    }
}

function addSession($user)
{
    setcookie("username", $user['username']);
    setcookie("role", $user['role']);
    setcookie("status", "connected");
}