<head>
    <title>Nyancat</title>
</head>
<body>
<h1>He runs all day</h1>
<form action="/" method="POST">
    Username:<input type="text" name="username">
    Password:<input type="password" name="password">
    <input type="submit">
</form>
<?php
    echo "<h2>Asif</h2> <p>is cool</p>";
    echo "Hello ".$_POST['username'];
    $password = "mypw";
    if ($_POST["password"] == $password) {
        echo "You win!";
    }
?>
</body>