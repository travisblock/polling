<?php
include "../../conn.php";
mysqli_query($conn, "DELETE FROM usr WHERE id='$_GET[id]'");
header('location:../home.php?x=user');
?>