<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="create.php">Create</a></li>
        </ul>
    </nav>
</header>
<main>
    <form action="create.code.php" method="post">
        <div>
            <label for="username">Gebruikersnaam</label>
            <input type="text" id="username" name="username">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="text" id="email" name="email">
        </div>
        <div>
            <label for="password">Wachtwoord</label>
            <input type="text" id="password" name="password">
        </div>
        <div>
            <button type="submit" value="submit" name="submit">Voeg Toe</button>
        </div>
    </form>
</main>
</body>
</html>