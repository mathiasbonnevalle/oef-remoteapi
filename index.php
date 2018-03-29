<?php
// configureer php script
date_default_timezone_set('Europe/Brussels');
error_reporting(E_ALL);
ini_set('display_errors', 'On');

require_once('scripts/call_api.php');

$users = CallAPI("GET","http://metamorph.be/datamanagement/demo/api.php/users");

//echo print_r($users);
?>
<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Remote API - Oefening</title>
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="create.php">Add User</a></li>
        </ul>
    </nav>
</header>
<main>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Gebruikersnaam</th>
            <th>Email</th>
            <th>Wachtwoord</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($users as $user) {
            echo "<tr>";
            echo"<td>".$user['userID']."</td>";
            echo"<td>".$user['username']."</td>";
            echo"<td>".$user['email']."</td>";
            echo"<td>".$user['password']."</td>";
            echo"<td><a href='delete.php?userID=".$user['userID']."'>Delete</a><a href='edit.php?userID=".$user['userID']."'>Edit</a></td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</main>
</body>
</html>