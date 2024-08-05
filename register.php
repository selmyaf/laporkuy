<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Register</title>
</head>
<body>
    <h1>Form Register</h1>
    <form action="add.php" method="post">
        <label for="id_user">ID User:</label>
        <input type="text" name="id_user" placeholder="ID User" required><br>

        <label for="username">Username:</label>
        <input type="text" name="username" placeholder="Username" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" placeholder="Email" required><br>

        <label for="psword">Password:</label>
        <input type="password" name="psword" placeholder="Password" required><br>

        <br><br>

        <input type="submit" value="Kirim">
    </form>
</body>
</html>
