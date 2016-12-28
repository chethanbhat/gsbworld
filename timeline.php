<?php ob_start(); ?>
<?php

error_reporting(E_ALL);

include('templates/header.html');

$email = "";
$password = "";

if((isset($_POST['email']) && !empty($_POST['email'])) && (isset($_POST['password']) && !empty($_POST['password'])))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($email === "chethanbhat@gmail.com" && $password === "swordfish")
    {
        echo "Welcome back " . $email ;
        echo "<br />";
    }
    else
    {
        $link = "<a href='signup.php'>link</a>";
        echo "Who are you?";
        echo "<br />";
        echo "please signup " . $link;
    }

} else {
    header("Location: login.php");
}


?>


<?php include('templates/footer.html'); ?>

<?php ob_end_flush(); ?>
