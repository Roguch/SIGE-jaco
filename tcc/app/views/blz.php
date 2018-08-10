<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>
    <?php foreach ($materiais as $material):?>
        <?php echo 'Nome: '.$material->getNome()." "?>
        <?php echo 'Descricao: '.$material->getDescricao()." "?>
        <?php echo 'Especificacoes: '.$material->getEspecificacao()." "?>
        <?php echo 'Historico: '.$material->getHistorico()." "?>
        <?php echo 'Quantidade: '.$material->getQtd()." "?>
    <?php endforeach;?>
</h1>
</body>
</html>