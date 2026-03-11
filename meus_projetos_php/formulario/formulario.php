<form action = "" method = "get">
    <?php for($i = 0; $i < 10; $i++) {?>

        <label for = "nome">CAMPO DE TEXTO</label>
        <input type = "text" id = "nome" name= "nomes[]" >
        <br>

        <?php } ?>
        <input type = "submit" value = "enviar">
    </form>

