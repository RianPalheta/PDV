<?php $render('header'); ?>

<body>
    oi <br><br>
    <a href="<?=$base?>/logout">Sair</a>

    <br></br>

    <table id="product-table" border="1" width="100%">
        <tr>
            <th>Cod.</th>
            <th>Nome</th>
            <th>Preço Unit.</th>
            <th>Qth.</th>
            <th>Ações</th>
        </tr>
    </table>

    <script>
        const base = "<?=$base?>";
    </script>
    <script src="<?=$base?>/assets/js/jquery.js"></script>
    <script src="<?=$base?>/assets/js/ajax.js"></script>
</body>
</html>