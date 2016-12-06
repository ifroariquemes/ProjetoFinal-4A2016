<?php
session_start(); 
session_destroy();  
session_unset(); 
echo "<script>alert('Voce saiu do sistema!');top.location.href='loginpag.php';</script>"; 

