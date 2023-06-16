  <?php
  $GLOBALS["page_title"] = "Busca de alunos";
  include_once "header.php";
  ?>
  <div class="container" style="max-width: 900px;">
    <?php
    if (isset($_GET["ra"])) :
      include_once "Aluno.php";
      include_once "AlunoDao.php";
      $ra = intval($_GET["ra"]);
      $dao = new AlunoDao();
      $f = $dao->buscarPeloRa($ra);
      if ($f == true) :
        $formato = "Y-m-d";
        $dataNascimento = DateTime::createFromFormat($formato, $f->getDataNascimento());
    ?>
        <?php if (isset($_GET["mensagem"])) : ?>
          <h1><?php echo $_GET["mensagem"] ?></h1>
        <?php endif; ?>
        <form action="alterar.php" method="get">
          <div class="form-group">
            <label for="formGroupExampleInput">RA:</label>
            <input type="text" name="ra" class="form-control" value="<?php echo $f->getRa() ?>" />
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Nome:</label>
            <input type="text" name="nome" class="form-control" value="<?php echo $f->getNome() ?>" />
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Data de nascimento:</label>
            <input type="date" name="dataNascimento" class="form-control" value="<?php echo $f->getDataNascimento() ?>" />
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Renda:</label>
            <input type="text" name="renda" class="form-control" value="<?php echo $f->getRenda() ?>" />
          </div>
          <input type="submit" class="btn btn-outline-success" value="alterar" />
        </form>
      <?php else : ?>
        <h1>As informações do aluno não foram encontradas!</h1>
      <?php endif; ?>
    <?php else : ?>
      <h2>Buscar informações sobre um aluno</h2>
      <form action="busca.php">
        <div class="form-group">
          <label for="formGroupExampleInput">RA:</label>
          <input required type="text" name="ra" class="form-control" placeholder="Ex. 123456" />
        </div>
        <input type="submit" class="btn btn-outline-success" value="Buscar aluno" />


      </form>

    <?php endif; ?>
  </div>
  <?php include_once "footer.php" ?>