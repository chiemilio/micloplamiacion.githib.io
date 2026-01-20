<?php
session_start();
session_destroy();
// Redirect to index.php in the same public folder to avoid duplicate /public/public/ paths
header("Location: index.php");
exit;
