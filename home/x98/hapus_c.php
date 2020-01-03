<?php
include "../../conn.php";
mysqli_query($conn, "DELETE FROM polling WHERE id='$_GET[id]'");
header('location:../home.php?x=pemilu');
?>