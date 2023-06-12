<?php
$GLOBALS["page_title"] = "Lista de alunos";
include_once "header.php" ?>
<div class="container" style="max-width: 900px;">
    <table class="table table-striped">
        <caption>Lista de Alunos</caption>
        <thead class="thead-dark">
            <tr>
                <th>RA</th>
                <th>Nome do Aluno</th>
                <th>Data de Nascimento</th>
                <th>Renda</th>
            </tr>
        </thead>
        <?php
        include_once "AlunoDao.php";
        include_once "Aluno.php";
        $dao = new AlunoDao();
        $lista = $dao->lista();
        $formato = "Y-m-d";
        foreach ($lista as $f) {
            $dataNascimento = DateTime::createFromFormat(
                $formato,
                $f->getDataNascimento()
            );
            echo "<tr><td>" . $f->getRa() . "</td>";
            echo "<td>" . $f->getNome() . "</td>";
            echo "<td>" . $dataNascimento->format("d/m/Y") . "</td>";
            echo "<td>" . $f->getRenda(), "BRL" .
                "</td></tr>";
        }
        ?>
    </table>
</div>
<?php include_once "footer.php" ?>