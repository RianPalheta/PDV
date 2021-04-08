<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <form id="form-signup">

        <input type="text" name="name"><br><br>

        <input type="text" name="number" value="<?=$number?>"><br><br>

        <input type="password" name="pass"><br><br>

        <input type="submit" value="Cadastrar">

    </form>

    <?=$render('scripts')?>
</body>
</html>