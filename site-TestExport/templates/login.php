<h1>LOGGING IN, PLEASE WAIT</h1>
<?php

$wachtwoord = "wachtwoord";
/*
if($_POST['ww'] == $wachtwoord){
  setcookie("user", "kk", time() + (86400 * 30), "/"); // 86400 = 1 day
  setcookie("success", "kk", time() + (86400 * 30), "/");
}else{
  setcookie("error", "kk", time() + (86400 * 30), "/");
}
*/

  $session->loggedout = "kk";
  $session->loginSuccess = "kk";
  $session->loginError = "kk";
  $session->loggedIn = "kk";
  
  echo $session->loggedout . " logout<br />";
  echo $session->loginSuccess . " success<br />";
  echo $session->loginError . " error<br />";
  echo $session->loggedIn . " logged in<br />";
/*
if($_POST['ww'] == $wachtwoord){
  $session->login = "kk";
  $session->success = "kk";
}else{
  $session->error = "kk";
}
*/
//header('Location: ' . $_SERVER['HTTP_REFERER']);
print <<<EDO
<script>
window.location.replace("http://cms-davidruhe-5.c9.io/");
</script>


EDO;
?>