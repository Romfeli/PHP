<?php 
    //recuperar el comentario escapando los caracteres especiales
    $comentario = $_POST['comentarios'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <input type="text" value="<?php echo htmlspecialchars($comentario); ?>">
    <input type="text" value="<?=$comentario?>">
</body>
</html>
