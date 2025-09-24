<?php
function authenticate($user, $pass) {
    $users = ['admin' => '1234', 'user' => 'abcd', 'Karan'=>'Krn30'];
    return isset($users[$user]) && $users[$user] === $pass;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['username'] ?? '';
    $pass = $_POST['password'] ?? '';
    $result = authenticate($user, $pass);
}
?>
<form method="post">
    Username: <input name="username" required>
    Password: <input type="password" name="password" required>
    <button type="submit">Login</button>
</form>
<?php if (isset($result)) echo $result ? "Login successful" : "Invalid credentials"; ?>
