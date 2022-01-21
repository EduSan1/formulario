<?php 

    $idiomaPortugues = null;
    $idiomaIngles = null;
    $idiomaEspanhol = null;
    $idiomaJorge = null;

    if (isset($_GET['btnJorge'])) {
    $nome = $_GET['txtNome'];
    $cidade = $_GET['sltCidade'];
    $sexo = $_GET['rdoSexo'];
    $obs = $_GET['txaObs'];
    echo('<b>Nome: </b>' . $nome . '<br>');
    echo('<b>Cidade: </b>' . $cidade . '<br>');
    echo('<b>Sexo: </b>' . $sexo . '<br>');
    echo('<b>Observações: </b>' . $obs . '<br>');
    echo('<b>Linguas: </b>'); 

    if (isset($_GET['chkPtBr'])) {
        $idiomaPortugues = $_GET['chkPtBr'];
    }
    if (isset($_GET['chkEn'])) {
        $idiomaIngles = $_GET['chkEn'];
    }
    if (isset($_GET['chkEs'])) {
        $idiomaEspanhol = $_GET['chkEs'];
    }
    if (isset($_GET['chkJo'])) {
        $idiomaJorge = $_GET['chkJo'];
    }

    echo($idiomaPortugues . " " . $idiomaIngles . " " . $idiomaEspanhol . " " . $idiomaJorge);

}




?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

    <form name="frmCadastro" method="GET" action="index.php">
        <p>Nome:</p>
        <input type="text" value="Jorge" name="txtNome" size="50" maxlength="10 ">
        <p>Cidade:</p>
        <select name="sltCidade" id="">
            <option value="jorge"selected>Jorge</option>
            <option value="jandira">Jandira</option>
            <option value="osasco">Osasco</option>
            <option value="carapicuiba">Carapicuiba</option>
            <option value="barueri">Barueri</option>
            <option value="itapevi">Itapevi</option>
        </select>

        <p>Sexo:</p>
        <input type="radio" name="rdoSexo" value="F">Feminino
        <input type="radio" name="rdoSexo" value="M">Masculino
        <input type="radio" name="rdoSexo" value="N">Não Binario
        <input type="radio" name="rdoSexo" value="O">Outro
        <input type="radio" name="rdoSexo" value="J" >Jorge
        <input type="radio" name="rdoSexo" value="P">Prefiro não informar

        <p>Idioma:</p>
        <input type="checkbox" name="chkPtBr" value="PT "> Português
        <input type="checkbox" name="chkEn" value="IN "> Inglês
        <input type="checkbox" name="chkEs" value="ES "> Espanhol
        <input type="checkbox" name="chkJo" value="Jorge " > Jorge
    
        <p>Faça observações sobre o Jorge</p>
        <textarea name="txaObs" cols="40" rows="5"></textarea>

        <input type="submit" name="btnJorge" value="Jorge">

    </form>

</body>

</html>