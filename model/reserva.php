<?php
require("../config/local_connection.php");

/**
 * Insere uma reserva no banco de dados
 *
 * @param mysqli $con conexão com o banco de dados
 * @param int $user id do usuário que fez a reserva
 * @param int $sala id da sala reservada
 * @param string $data data que foi reservada
 * @param string $horario horário que foi reservado
 * @param string $data_registro timestamp de quando foi feita a solicitação
 * @return mysqli_result|false resultado da inserção ou FALSE, caso uma falha tenha ocorrido
 */
function insertReserva(mysqli $con, int $user, int $sala, string $data, string $horario, string $data_registro) {
    //gera a query
    $query = "INSERT INTO `reservas` (id_user, id_sala, data, horário, data_registro) VALUES (?,?,?,?,?)";
    $stmt = $con->prepare($query);

    //associa os parâmetros a serem usados na query e seus tipos
    mysqli_stmt_bind_param($stmt, "iisss", $user, $sala, $data, $horario, $data_registro);

    //executa a query
    mysqli_stmt_execute($stmt);

    //retorna o resultado
    return mysqli_stmt_get_result($stmt);
}

/**
 * Exclui uma reserva do banco de dados
 *
 * @param mysqli $con conexão com o banco de dados
 * @param integer $id id da reserva a ser excluída
 * @return mysqli_result|false resultado da exclusão ou FALSE, caso uma falha tenha ocorrido 
 */
function deleteReserva(mysqli $con, int $id) {
    //gera a query
    $query = "DELETE FROM `reservas` WHERE id = ?";
    $stmt = $con->prepare($query);

    //associa os parâmetros a serem usados na query e seus tipos
    mysqli_stmt_bind_param($stmt, "i", $id);

    //executa a query
    mysqli_stmt_execute($stmt);

    //retorna o resultado
    return mysqli_stmt_get_result($stmt);
}

/**
 * Busca todas as reservas do banco de dados
 *
 * @param mysqli $con conexão com o banco de dados
 * @return array array com todas as reservas
 */
function getReservas(mysqli $con) {
    //gera a query
    $query = "SELECT * FROM `reservas`";
    $stmt = $con->prepare($query);

    //executa a query
    mysqli_stmt_execute($stmt);

    //retorna o resultado
    return mysqli_stmt_get_result($stmt);
}

/**
 * Busca os dados de uma reserva no banco de dados usando seu id como chave de pesquisa
 *
 * @param mysqli $con conexão com o banco de dados
 * @param integer $id id da reserva a ser buscada
 * @return mysqli_result|false dados da reserva em um array ou FALSE, caso não tenha sido encontrada ou uma falha tenha ocorrido
 */
function getReservaById(mysqli $con, int $id) {
    //gera a query
    $query = "SELECT (id_user, id_sala, `data`, horário, data_registro) FROM `reservas` WHERE id = ?";
    $stmt = $con->prepare($query);

    //associa os parâmetros a serem usados na query e seus tipos
    mysqli_stmt_bind_param($stmt, "i", $id);

    //executa a query
    mysqli_stmt_execute($stmt);

    //retorna o resultado
    return mysqli_stmt_get_result($stmt);
}

/**
 * Busca reservas no banco de dados usando com base em na data
 *
 * @param mysqli $con conexão com o banco de dados
 * @param string $date data em que serão buscadas as reservas
 * @return mysqli_result|false array com as reservas na data especificada ou FALSE, caso não haja reservas na data ou uma falha tenha ocorrido
 */
function getReservasByDate(mysqli $con, string $date) {
    //gera a query
    $query = "SELECT * FROM `reservas` WHERE `data` = ?";
    $stmt = $con->prepare($query);

    //associa os parâmetros a serem usados na query e seus tipos
    mysqli_stmt_bind_param($stmt, "s", $date);

    //executa a query
    mysqli_stmt_execute($stmt);

    //retorna o resultado
    return mysqli_stmt_get_result($stmt);
}
?>