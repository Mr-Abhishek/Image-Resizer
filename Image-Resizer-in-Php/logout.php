<?php
session_start();
if(session_destroy())
{
echo"<script>window.location='login.php'</script>";
}
?>