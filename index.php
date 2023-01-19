<html lang="fr">
<head>
    <title>Formulaire mail</title>
</head>
<body>
<form method="post" action="email.php" style="display: flex; flex-direction: column; width: 100%; text-align: center; align-items: center">
    <label for="id-email">Mail</label>
    <input type="email" id="id-email" name="email">
    <label for="id-message">Message</label>
    <textarea name="message" id="id-message" cols="30" rows="10"></textarea>

    <input type="submit" value="Envoyer" name="submit">
</form>
</body>
</html>
