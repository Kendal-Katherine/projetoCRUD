  <?php
  $GLOBALS["page_title"] = "Cadastro de alunos";
  include_once "header.php";
  ?>
  <div class="container" style="max-width: 900px;">
    <?php
    if (isset($_GET["ra"])) :
      include_once "Aluno.php";
      include_once "AlunoDao.php";
      $ra = intval($_GET["ra"]);
      $nome = $_GET["nome"];
      $dataNascimento = $_GET["dataNascimento"];
      $renda = floatval($_GET["renda"]);
      $aluno = new Aluno(
        $ra,
        $nome,
        $dataNascimento,
        $renda
      );
      $dao = new AlunoDao();
      if ($dao->inserir($aluno)) {
        echo "<h1>Aluno inserido</h1>";
      } else {
        echo "<h1>Aluno NÃO inserido</h1>";
      }
    ?>
      <br />
    <?php else : ?>
      <h1>Cadastro de Aluno</h1>
      <form action="cadastro.php" method="get">
        <div class="form-group">
          <label for="formGroupExampleInput">RA:</label>
          <input required type="text" name="ra" class="form-control" placeholder="Ex. 123456" />
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Nome:</label>
          <input required type="text" name="nome" class="form-control" placeholder="Ex. Ana Claudia Silva " />
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Data de nascimento:</label>
          <input required type="date" name="dataNascimento" class="form-control" placeholder="DD/MM/AAAA" />
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput2">Renda:</label>
          <input required type="text" name="renda" class="form-control" placeholder="Ex. 1.000" />
        </div>
        <input type="submit" class="btn btn-outline-success" value="Cadastrar aluno" />

      </form>
    <?php endif; ?>
  </div>
  <?php include_once "footer.php" ?>