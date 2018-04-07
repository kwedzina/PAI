<!DOCTYPE html>
<html lang="en">

<?php include_once "header.php"; ?>

<body>
<div class="container">
<h2>DODAJ UZYTKOWNIKA</h2>

<form action="../Controller/controller.php?method=insertUser" method=post>
    <input type="text" placeholder="imie" name="imie" class="data" required autofocus />
    <input type="text" placeholder="nazwisko" name="nazwisko" class="data" required autofocus />
    <input type="email" placeholder="email" name="email" class="data" required />
    <input type="password" placeholder="haslo" name="haslo" class="data" required />
    <input type="password" placeholder="powtorz haslo" name="haslo2" class="data" required />

    <input type="submit" class="data" value="DODAJ" />
</form>

<?php include_once "footer.php"; ?>
    
</div>
</body>
</html>