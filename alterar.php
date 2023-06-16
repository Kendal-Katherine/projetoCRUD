  <?php
  $GLOBALS["page_title"] = "Alterar informações dos alunos";
  include_once "header.php";
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
  $alteracao = $dao->alterar($aluno);
  $mensagem = $alteracao ? "Dados atualizados com sucesso!" : "Os dados NÃO foram atualizados!";
  $mensagemCodificada = urlencode($mensagem);
  header("location: busca.php?ra=$ra&mensagem=$mensagemCodificada");
  include_once "footer.php";
  ?>
 