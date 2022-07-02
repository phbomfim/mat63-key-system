<?php
require("config/local_connection.php");

/**
 * Insere um novo usuário no banco de dados
 *
 * @param mysqli $con conexão com o banco de dados
 * @param string $nome Nome do usuário
 * @param string $email email do usuário
 * @param string $apelido apelido para login do usuário
 * @param string $senha senha para login do usuário
 * @param integer $nivel nível de hierarquia do usuário:
 * 0 - Administrador;
 * 1 - Docente;
 * 2 - Zelador;
 * 3 - Discente;
 * 4 - Visitante;
 * 99 - Porteiro;
 * @return mysqli_result|false resultado da inserção ou FALSE, caso uma falha tenha ocorrido
 */
function insertUsuario(mysqli $con, string $nome, string $email, string $apelido, string $senha, int $nivel) {
    //gera a query
    $query = "INSERT (nome, email, apelido, senha, nivel) INTO `usuarios` VALUES (?,?,?,?,?)";
    $stmt = $con->prepare($query);

    //associa os parâmetros a serem usados na query e seus tipos
    mysqli_stmt_bind_param($stmt, "ssssi", $nome, $email, $apelido, $senha, $nivel);

    //executa a query
    mysqli_stmt_execute($stmt);

    //retorna o resultado
    return mysqli_stmt_get_result($stmt);
}

/**
 * Exclui um usuário do banco de dados
 *
 * @param mysqli $con conexão com o banco de dados
 * @param integer $id id do usuário a ser excluído
 * @return mysqli_result|false resultado da exclusão ou FALSE, caso uma falha tenha ocorrido 
 */
function deleteUsuario(mysqli $con, int $id) {
    //gera a query
    $query = "DELETE FROM `usuarios` WHERE id = ?";
    $stmt = $con->prepare($query);

    //associa os parâmetros a serem usados na query e seus tipos
    mysqli_stmt_bind_param($stmt, "i", $id);

    //executa a query
    mysqli_stmt_execute($stmt);

    //retorna o resultado
    return mysqli_stmt_get_result($stmt);
}

/**
 * Busca todos os usuários do banco de dados
 *
 * @param mysqli $con conexão com o banco de dados
 * @return array array com todos os usuários
 */
function getUsuarios(mysqli $con) {
    //gera a query
    $query = "SELECT * FROM `usuarios`";
    $stmt = $con->prepare($query);

    //executa a query
    mysqli_stmt_execute($stmt);

    //retorna o resultado
    return mysqli_stmt_get_result($stmt);
}

/**
 * Busca os dados de um usuário no banco de dados usando seu id como chave de pesquisa
 *
 * @param mysqli $con conexão com o banco de dados
 * @param integer $id id do usuário a ser buscado
 * @return mysqli_result|false dados do usuário em um array ou FALSE, caso uma falha tenha ocorrido 
 */
function getUsuarioById(mysqli $con, int $id) {
    //gera a query
    $query = "SELECT (nome, email, apelido, senha, nivel) FROM `usuarios` WHERE id = ?";
    $stmt = $con->prepare($query);

    //associa os parâmetros a serem usados na query e seus tipos
    mysqli_stmt_bind_param($stmt, "i", $id);

    //executa a query
    mysqli_stmt_execute($stmt);

    //retorna o resultado
    return mysqli_stmt_get_result($stmt);
}

?>