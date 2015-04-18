<?php
session_start();
if($_POST)
{
  $captcha = trim($_POST["captcha"]);
  if($captcha == $_SESSION["captcha"])
  {
    echo "Basarili";
  }
  else
  {
    echo "Basarisiz";
  }
  /* Debug Mode Session
  echo "<pre>";
  print_r($_SESSION);
  echo "</pre>";
  */
} else {
?>
<form action="" method="post">
<img src="resim.php"><br />
<label for="captcha">Captcha : </label>
<input type="text" name="captcha" /><br />
<input type="submit" name="gonder" value="Send"> 
</form>
<?php
}
?>
