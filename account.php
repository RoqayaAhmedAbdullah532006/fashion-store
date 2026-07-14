<?php

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // الحالة الأولى: Login
    if (isset($_POST["login"])) {

        $email = trim($_POST["email"]);
        $password = trim($_POST["password"]);

        if (empty($email)) {
            $errors[] = "Email is required";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid Email";
        }

        if (empty($password)) {
            $errors[] = "Password is required";
        } elseif (strlen($password) < 8) {
            $errors[] = "Password must be at least 8 characters";
        }

        if (empty($errors)) {

            $_SESSION["email"] = $email;
            $_SESSION["password"] = $password;

            header("Location: products.php");
            exit();
        }
    }

    // الحالة الثانية: Profile
    if (isset($_POST["profile"])) {

        $username = trim($_POST["username"]);
        $password = trim($_POST["password"]);
        $email = trim($_POST["email"]);
        $phone = trim($_POST["phone"]);
        $facebook = trim($_POST["facebook"]);
        $twitter = trim($_POST["twitter"]);
        $instagram = trim($_POST["instagram"]);

        if (empty($username))
            $errors[] = "Username is required";

        if (strlen($password) < 8)
            $errors[] = "Password must be at least 8 characters";

        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            $errors[] = "Invalid Email";

        if (!preg_match('/^[0-9]{11}$/', $phone))
            $errors[] = "Phone must be 11 digits";

        if (!filter_var($facebook, FILTER_VALIDATE_URL))
            $errors[] = "Invalid Facebook URL";

        if (!filter_var($twitter, FILTER_VALIDATE_URL))
            $errors[] = "Invalid Twitter URL";

        if (!filter_var($instagram, FILTER_VALIDATE_URL))
            $errors[] = "Invalid Instagram URL";

        if (empty($errors)) {

            $_SESSION["username"] = $username;
            $_SESSION["phone"] = $phone;
            $_SESSION["facebook"] = $facebook;
            $_SESSION["twitter"] = $twitter;
            $_SESSION["instagram"] = $instagram;

            header("Location: index.php");
            exit();
        }
    }
}

include("navbar.php");
?>

<div class="container mt-5">

<?php

if(!empty($errors)){

    foreach($errors as $error){

        echo "<div class='alert alert-danger'>$error</div>";

    }

}

?>

<?php if(!isset($_SESSION["email"])) { ?>

<h2 class="text-center mb-4">Login</h2>

<form method="POST">

<div class="form-group">

<label>Email</label>

<input
type="email"
name="email"
class="form-control">

</div>

<div class="form-group">

<label>Password</label>

<input
type="password"
name="password"
class="form-control">

</div>

<input
type="submit"
name="login"
value="Login"
class="btn btn-primary">

</form>

<?php } else { ?>

<h2 class="text-center mb-4">
Complete Your Profile
</h2>

<form method="POST">

<div class="form-group">
<label>Username</label>
<input type="text" name="username" class="form-control">
</div>

<div class="form-group">
<label>Password</label>
<input type="password" name="password" class="form-control">
</div>

<div class="form-group">
<label>Email</label>
<input type="email" name="email" class="form-control">
</div>

<div class="form-group">
<label>Phone</label>
<input type="text" name="phone" class="form-control">
</div>

<div class="form-group">
<label>Facebook URL</label>
<input type="text" name="facebook" class="form-control">
</div>

<div class="form-group">
<label>Twitter URL</label>
<input type="text" name="twitter" class="form-control">
</div>

<div class="form-group">
<label>Instagram URL</label>
<input type="text" name="instagram" class="form-control">
</div>

<input
type="submit"
name="profile"
value="Save"
class="btn btn-success">

</form>

<?php } ?>

</div>

</body>
</html>