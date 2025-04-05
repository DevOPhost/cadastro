# 🎓 Sistema de Cadastro de Alunos

Este é um sistema web simples para cadastro de alunos de uma faculdade, desenvolvido com PHP e MySQL. O sistema permite registrar, listar, editar, excluir, pesquisar e exportar informações dos alunos em formatos `.xls` e `.json`.

##  Funcionalidades

- ✅ Cadastro de alunos (nome, CPF, matrícula, endereço, telefone)
- ✅ Listagem de todos os alunos cadastrados
- ✅ Edição de dados dos alunos
- ✅ Exclusão de alunos
- ✅ Campo de pesquisa (por nome, CPF ou matrícula)
- ✅ Exportação de dados em `.xls` e `.json`
- ✅ Validação para não permitir cadastros com CPF duplicado

---

##  Tecnologias utilizadas

- **Frontend:** HTML e CSS
- **Backend:** PHP
- **Banco de Dados:** MySQL
- **Servidor local:** XAMPP (Apache + MySQL)

---

##  Como executar localmente

1. Instale o [XAMPP](https://www.apachefriends.org/pt_br/index.html)
2. Inicie o Apache e o MySQL
3. Copie os arquivos para a pasta `htdocs`
4. Crie o banco de dados com a seguinte estrutura:

```sql
CREATE DATABASE faculdade;
USE faculdade;

CREATE TABLE alunos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100),
  cpf VARCHAR(14) UNIQUE,
  matricula VARCHAR(20),
  endereco VARCHAR(200),
  telefone VARCHAR(20)
);

Como executar?
http://localhost/nome-da-pasta/

