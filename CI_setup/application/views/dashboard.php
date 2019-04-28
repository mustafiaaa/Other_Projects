<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Page</title>
    <!-- importing jquery and semantic ui by cdn. -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
</head>
    <h1 class="ui success message"><?php echo 'Welcome '.$name.'. You are successfully logged in. Your email id is : '.$email; ?></h1>
    <p><a  href="<?php echo('http://localhost/CI_setup/');?>">Login Again !!! </a></p>
</html>