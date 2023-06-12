    <?php
    $GLOBALS["page_title"] = "Excluir aluno";
    include_once "header.php";
    ?>
    <div class="container" style="max-width: 900px;">
        <?php
        if (isset($_GET["ra"])) :
            include_once "Aluno.php";
            include_once "AlunoDao.php";

            $dao = new AlunoDao();
            $ra = intval($_GET["ra"]);
            $f = new Aluno($ra, NULL, NULL, NULL);
            if ($dao->excluir($f)) {
                echo "<h1>As informações do aluno foram excluídas</h1>";
            } else {
                echo "<h1>As informações do aluno NÃO foram excluídas</h1>";
            }
        ?>
            <?php if (isset($_GET["mensagem"])) : ?>
                <h1><?php echo $_GET["mensagem"] ?></h1>
            <?php endif; ?>
        <?php else : ?>
            <h2>Excluir informações sobre um aluno</h2>
            <form action="excluir.php">
                <div class="form-group">
                    <label for="formGroupExampleInput">RA:</label>
                    <input required type="text" name="ra" class="form-control" placeholder="Ex. 123456" />
                </div>
                <input type="submit" class="btn btn-outline-danger" value="Excluir aluno" />

            </form>
        <?php endif; ?>
    </div>
    <?php include_once "footer.php" ?>