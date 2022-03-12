<?php
 session_start();
  if(isset($_COOKIE['user_id']))
 setcookie("user_id", "", time()-60*60*2);
  if(isset($_COOKIE['user_name']))
 setcookie("user_name", "", time()-60*60*2);
  if(isset($_COOKIE['user_rights']))
 setcookie("user_rights", "", time()-60*60*2);
  if(isset($_COOKIE['user_photo']))
 setcookie("user_photo", "", time()-60*60*2);
  if(isset($_COOKIE[session_name()]))// ф-ция session_name возвращает идентификатор названия сессии
  {
      setcookie(session_name(), "", time()-60*60*2);
  }
  $_SESSION = array();
  session_destroy();
  header("location: ../index.php");