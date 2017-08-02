<?PHP

session_start();

if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] != '')) {
header ("Location: Mainpage.html");
exit;
}
header("Location: logoutwin.html")

?>