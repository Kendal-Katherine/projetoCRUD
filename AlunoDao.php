<?php
include_once "Aluno.php";
include_once "Conexao.php";
class AlunoDao
{
    function inserir(Aluno $aluno)
    {
        global $conn;
        $sql = $conn->prepare("INSERT INTO ALUNO VALUES(?,?,?,?)");
        $p1 = $aluno->getRa();
        $p2 = $aluno->getNome();
        $p3 = $aluno->getDataNascimento();
        $p4 = $aluno->getRenda();
        $sql->bind_param("issd", $p1, $p2, $p3, $p4);
        $sql->execute();
        if ($sql->affected_rows > 0) {
            return true;
        }
    }
    function excluir(Aluno $aluno)
    {
        global $conn;
        $sql = $conn->prepare("DELETE FROM ALUNO WHERE ra=?");
        $p1 = $aluno->getRa();
        $sql->bind_param("i", $p1);
        $sql->execute();
        if ($sql->affected_rows > 0) {
            return true;
        }
    }
    function alterar(Aluno $aluno)
    {
        global $conn;
        $sqlStr = "UPDATE ALUNO SET NOME=?,DATA_NASCIMENTO=?,RENDA=? WHERE RA=?";
        $sql = $conn->prepare($sqlStr);
        $p1 = $aluno->getRa();
        $p2 = $aluno->getNome();
        $p3 = $aluno->getDataNascimento();
        $p4 = $aluno->getRenda();
        $sql->bind_param("ssdi", $p2, $p3, $p4, $p1);
        $sql->execute();
        if ($sql->affected_rows > 0) {
            return true;
        }
    }
    function lista()
    {
        global $conn;
        $sql = "SELECT * FROM ALUNO";
        $result = $conn->query($sql);
        $lista = array();
        while ($row = $result->fetch_assoc())
            array_push($lista, new Aluno(
                $row["RA"],
                $row["NOME"],
                $row["DATA_NASCIMENTO"],
                $row["RENDA"]
            ));
        return $lista;
    }
    function buscarPeloRa($ra)
    {
        global $conn;
        $nome = "";
        $dataNascimento = "";
        $renda = 0.0;
        $sql = "SELECT * FROM aluno WHERE RA=?";
        $query = $conn->prepare($sql);
        $result = $query->bind_param("i", $ra);
        $query->execute();
        $query->bind_result($ra, $nome, $dataNascimento, $renda);
        if ($query->fetch()) {
            return new Aluno($ra, $nome, $dataNascimento, $renda);
        }
    }
}
