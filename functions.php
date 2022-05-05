<?php
include "connection.php";
ReadCookie();

//Registration Start:
function Register(){
  if(isset($_POST['register'])){
    $email = strip_tags(trim($_POST['email']));
    $username = $_POST['username'];
    $password = sha1($_POST['password']);

    if($_POST['email']=="" or $_POST['password']=="" or $_POST['username']="" or !isset( $_POST['agree'])) //if empty
    {   echo '<div class="msgdiplay">';
      echo "<br>";
        echo "Fill out all Fields!";
        echo '</div>';
    }
    elseif(strlen($_POST['password']) < 5) //if password length
    {
      echo '<div class="msgdiplay">';
      echo "The Password Is Too Short!";
      echo '</div>';
    }
    else if (strlen($username) > 10 || strlen($username) < 4 )
    {
          echo '<div class="msgdiplay">';
          echo "Username Length Between (4-10)!";
          echo '</div>';
    }
    else //write to db
    {
      $link=open_database_connection();
      $sql_user = "SELECT Username FROM Users WHERE Username='$username'";
      $sql_email = "SELECT Email FROM Users WHERE Email='$email'";
      $res_u = mysqli_query($link, $sql_user);
      $res_e = mysqli_query($link, $sql_email);

      if (mysqli_num_rows($res_u) > 0)
      {
            echo '<div class="msgdiplay">';
            echo  "Username already taken";
            echo '</div>';
      }
      else if(mysqli_num_rows($res_e) > 0)
      {
            echo '<div class="msgdiplay">';
            echo  "Email already taken";
            echo '</div>';
      }
      else
      {    $date = date('y-m-d');
           $sql = "INSERT INTO Users (Email, Username, Password, Register) VALUES ('$email','$username','$password','$date')";
           $link=open_database_connection();
           if (!mysqli_query($link,$sql))
           {
              echo("Error description: " . mysqli_error($link));
           }
           else
           {  header('Location: index.php?stran=login');
              echo '<div class="msgdiplay">';
              echo "Registration Sucessful.";
              echo '</div>';
        }
      }
    }
  }
}
//Registration End

//Login Start
function Login()
{
  if(isset($_POST['login']))
  {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($_POST['username']=="" || $_POST['password']=="")
    {
     echo '<div class="msgdiplay">';
     echo "Fill out all Fields!";
     echo '</div>';
    }
    else //Trim + encrypt
    {
      $password = sha1($_POST['password']);
      //Check Db
      $sql = "SELECT ID FROM Users WHERE Username='$username' AND Password='$password'";
      $link=open_database_connection();
      if (!mysqli_query($link,$sql))
      {
            echo("Error description: " . mysqli_error($link));
      }
      else
      {
        $result = mysqli_query($link,$sql);
        $rowcount=mysqli_num_rows($result);
        if ($rowcount == 0)
        {
             echo '<div class="msgdiplay">';
             echo "The User Does not Exist!";
             echo '</div>';
        }
        else
        {
          #$logintime="UPDATE Users SET LastLogin = GETDATE() where Username='$username'";
          $OnOff = "UPDATE users SET OnOff = '1' where Username ='$username'";
          mysqli_query($link,$OnOff);
          //Create session
          $_SESSION['user'] = $username;
          $row = $result -> fetch_assoc();
          $_SESSION['ID'] = $row["ID"];
          if (isset($_POST['staylogged']))
          {
                setcookie("keks", $email, time()+86400);
          }
          header('Location: index.php');
        }
      }
       close_database_connection($link);
    }
  }
}
//Login end


//COOKIES Start
function ReadCookie(){
  if (isset($_COOKIE['keks'])){
    $_SESSION['user'] = $_COOKIE['keks'];
  }
}
//Cookies end

/*ODJAVA*/
function Logout(){
  $username = $_SESSION['user'];
  $link= open_database_connection();
  $OnOff = "UPDATE users SET OnOff = '0' where Username ='$username'";
  mysqli_query($link,$OnOff);
  close_database_connection($link);
  session_destroy();
  setcookie("keks", "podatki", time()-1);
  header('Location: index.php');
}
/*---------------------*/

