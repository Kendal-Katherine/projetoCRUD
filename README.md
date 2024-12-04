# 🚀 Projeto CRUD - Gerenciamento de Alunos

Este projeto é um sistema de gerenciamento de alunos utilizando **PHP** 🐘 e **MySQL** 🐬. Ele permite realizar operações de **Cadastro**, **Busca**, **Alteração** e **Exclusão** de registros de alunos.

## 📝 Arquivos do Projeto

Este repositório contém os seguintes arquivos PHP para implementar o CRUD:

- **Aluno.php**: Define a classe `Aluno` com as propriedades e métodos necessários.
- **AlunoDao.php**: Contém as funções de interação com o banco de dados, como inserção, alteração, exclusão e busca.
- **Conexao.php**: Responsável pela conexão com o banco de dados.
- **alterar.php**: Página para alterar informações de um aluno.
- **busca.php**: Página para buscar informações de um aluno pelo RA.
- **cadastro.php**: Página para cadastrar um novo aluno.
- **excluir.php**: Página para excluir um aluno pelo RA.
- **footer.php**: Rodapé do site.
- **header.php**: Cabeçalho do site com o menu de navegação.
- **index.php**: Página inicial.
- **lista.php**: Exibe a lista de todos os alunos cadastrados.

## ⚙️ Funcionalidades

1. **Cadastro de Aluno**: Permite cadastrar novos alunos com informações como RA, nome, data de nascimento e renda.
2. **Busca e Alteração**: Você pode buscar alunos pelo RA e alterar seus dados.
3. **Exclusão**: Exclui registros de alunos com base no RA.
4. **Lista de Alunos**: Exibe uma tabela com todos os alunos cadastrados.

## 📋 Requisitos

Para rodar o projeto, você precisará de:

- **PHP** 🐘 (versão 7.x ou superior)
- **MySQL** 🐬
- Servidor web (como **Apache** 🖥️ ou **Nginx** 🌐)

## 🏃‍♀️ Como Rodar o Projeto Localmente

1. Clone o repositório:

   ```bash
   git clone https://github.com/Kendal-Katherine/projetoCRUD.git
   ```

2. Acesse o diretório do projeto:

   ```bash
   cd projetoCRUD
   ```

3. Crie o banco de dados no MySQL com o seguinte comando:

   ```sql
   CREATE DATABASE crudn;
   ```

4. Configure o banco de dados com a tabela necessária. Você pode usar o seguinte comando SQL para criar a tabela de alunos:

   ```sql
   CREATE TABLE ALUNO (
     RA INT PRIMARY KEY,
     NOME VARCHAR(100),
     DATA_NASCIMENTO DATE,
     RENDA DECIMAL(10, 2)
   );
   ```

5. Altere a conexão no arquivo **`Conexao.php`** para usar as credenciais do seu banco de dados.

6. Inicie seu servidor PHP:

   ```bash
   php -S localhost:8000
   ```

7. Acesse o projeto no navegador: [http://localhost:8000](http://localhost:8000)

## 🛠️ Tecnologias Usadas

- **PHP** 🐘
- **MySQL** 🐬
- **HTML** 🌐
- **CSS** 🎨
- **JavaScript** 📜

## 🧑‍💻 Licença

Este projeto está sob a licença **MIT**. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.
