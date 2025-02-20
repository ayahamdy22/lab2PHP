<?php
function register()
{
    return  '<form action="server.php" method="post">
    <input type="text" name="fname" id="" placeholder="Enter your name"><br /><br />
    <input type="text" name="lname" id="" placeholder="Enter your last name"><br /><br />
    <label for="">Address</label>
    <textarea name="address" id=""></textarea><br /><br />
    <button type="submit" name="register_fun" >register</button>
</form>';
}

function logIn()
{
    return '<form action="server.php" method="post">
    <input type="text" name="email" id="" placeholder="Enter your email"><br /><br />
    <input type="text" name="pass" id="" placeholder="Enter your last pass"><br /><br />
    <button type="submit" name="logIn_fun" >LOgin</button>
</form>';
}

echo '<h1>Page Register </h1><br>';
echo register();

echo '<br><br>';
echo '<h1>Page Login</h1><br>';
echo logIn();