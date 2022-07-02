<?php
require("config/local_connection.php");


/**
 * Insere uma nova sala no banco de dados
 *
 * @param mysqli $con conexão com o banco de dados
 * @param string $nome Nome da sala
 * @param string $tamanho tamanho da sala em m²
 * @param integer $capacidade capacidade da sala em quantidade de pessoas
 * @param string $tipo tipo de sala (auditório, sala de aula, laboratório, etc)
 * @param string $observacoes observações sobre a sala
 * @return mysqli_result|false resultado da inserção ou FALSE, caso uma falha tenha ocorrido
 */
function insertSala(mysqli $con, string $nome, string $tamanho, int $capacidade, string $tipo, string $observacoes) {
    //gera a query
    $query = "INSERT INTO `salas` (nome, tamanho, capacidade, tipo, observacoes) VALUES (?,?,?,?,?)";
    $stmt = $con->prepare($query);

    //associa os parâmetros a serem usados na query e seus tipos
    mysqli_stmt_bind_param($stmt, "ssiss", $nome, $tamanho, $capacidade, $tipo, $observacoes);

    //executa a query
    mysqli_stmt_execute($stmt);

    //retorna o resultado
    return mysqli_stmt_get_result($stmt);
}

/**
 * Exclui uma reserva do banco de dados
 *
 * @param mysqli $con conexão com o banco de dados
 * @param integer $id id da sala a ser excluída
 * @return mysqli_result|false resultado da exclusão ou FALSE, caso uma falha tenha ocorrido 
 */
function deleteSala(mysqli $con, int $id) {
    //gera a query
    $query = "DELETE FROM `salas` WHERE id = ?";
    $stmt = $con->prepare($query);

    //associa os parâmetros a serem usados na query e seus tipos
    mysqli_stmt_bind_param($stmt, "i", $id);

    //executa a query
    mysqli_stmt_execute($stmt);

    //retorna o resultado
    return mysqli_stmt_get_result($stmt);
}

/**
 * Busca todas as salas do banco de dados
 *
 * @param mysqli $con conexão com o banco de dados
 * @return array array com todas as salas
 */
function getSalas(mysqli $con) {
    //gera a query
    $query = "SELECT * FROM `salas`";
    $stmt = $con->prepare($query);

    //executa a query
    mysqli_stmt_execute($stmt);

    //retorna o resultado
    return mysqli_stmt_get_result($stmt);
}

/**
 * Busca os dados de uma sala no banco de dados usando seu id como chave de pesquisa
 *
 * @param mysqli $con conexão com o banco de dados
 * @param int $id id da sala a ser buscada
 * @return mysqli_result|false dados da sala em um array ou FALSE, caso não tenha sido encontrada ou uma falha tenha ocorrido
 */
function getSalaById(mysqli $con, int $id) {
    //gera a query
    $query = "SELECT (nome, tamanho, capacidade, tipo, observacoes) FROM `salas`  WHERE id = ?";
    $stmt = $con->prepare($query);

    //associa os parâmetros a serem usados na query e seus tipos
    mysqli_stmt_bind_param($stmt, "i", $id);

    //executa a query
    mysqli_stmt_execute($stmt);

    //retorna o resultado
    return mysqli_stmt_get_result($stmt);
}

/**
 * Busca salas no banco de dados que contenham o nome do parâmetro
 *
 * @param mysqli $con conexão com o banco de dados
 * @param string $nome nome pelo qual será feita a busca
 * @return mysqli_result|false dados das salas em um array ou FALSE, caso não haja salas com esse nome ou uma falha tenha ocorrido
 */
function getSalasbyName(mysqli $con, string $nome) {
    //gera a query
    $query = "SELECT * FROM `salas` WHERE nome LIKE '%?%'";
    $stmt = $con->prepare($query);

    //associa os parâmetros a serem usados na query e seus tipos
    mysqli_stmt_bind_param($stmt, "s", $nome);

    //executa a query
    mysqli_stmt_execute($stmt);

    //retorna o resultado
    return mysqli_stmt_get_result($stmt);
}

?>