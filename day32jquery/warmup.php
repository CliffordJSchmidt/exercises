<?php

//1
$user_id = 4;



//2

session_start();


//3

var_dump($_SESSION);


//4

//$_SESSION['user_id']=$user_id;


//5  comment out the 4th question


//6
$username = "johndoe";

//7

$user = array(
        'user_id'  => $user_id,
        'username' => $username
);


//8 

class Auth
{
    protected static $users = array();

    //9
  public static function addUser($user)
  {
        static::$users[] =$user;
  }

    //10
    public static function getUsers()
    {
        return static::$users;
    }   

    //13  //14
    protected static function getCurrentUserId()
    {
        if (!empty($_SESSION['user_id']))
        {
            return:: $_SESSION['user_id'];
        }else{
            return:: null;
        }

    }

    //15
    public static function getCurrentUser()
    {
        $user_id = static::getCurrentUserId();
        foreeach(static::$users as $user)
        {
            if($user_id == $user['user_id'])
            {
                return $user;
            }
        }
    }







}

//11
Auth::addUser(array('user_id' => 1, 'username' => 'Kevin'));
Auth::addUser(array('user_id' => 2, 'username' => 'Stuart'));
Auth::addUser(array('user_id' => 3, 'username' => 'Bob'));

//var_dump(Auth::getUsers());


//12

Auth::addUser(array('user_id' =>4, 'username' => 'Jack'));

var_dump(auth::getUsers());



//13




//14


phpinfo()