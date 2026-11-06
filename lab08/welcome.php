<? php
session_start();
include_once "header.inc"; 
if (isset($_SESSION['user'])) {
echo "Welcome, ". $_SESSION['user'];
} else {
header('Location: login.html');
}
include "footer.inc";
?>



