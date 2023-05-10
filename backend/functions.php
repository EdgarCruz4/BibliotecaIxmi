<?php
/**
 * Load the external configuration file
 */
require_once('config.php');
// Sets the global variable for root path
define('ROOT_PATH', dirname(dirname(__FILE__)));
/**
 * @param string $query
 * init the connection and
 * Performs a query against the database.
 */
function db_query($query)
{
    # PHP error reporting. supported values are given below.
    # 0 - Turn off all error reporting
    # 1 - Running errors
    # 2 - Running errors + notices
    # 3 - All errors except notices and warnings
    # 4 - All errors except notices
    # 5 - All errors
    error_reporting(5);
    @session_start();
    global $host;
    global $username;
    global $password;
    global $dbname;
    global $port;
    global $conn;
    if (isset($_SESSION["username"]) && isset($_SESSION["password"]))
    {
        $username = $_SESSION["username"];
        $password = $_SESSION["password"];
    }
    /*
     If mysqli error reporting is enabled (MYSQLI_REPORT_ERROR) and the requested operation fails, a warning is generated.
     If, in addition, the mode is set to MYSQLI_REPORT_STRICT, a mysqli_sql_exception is thrown instead.
     */
    // mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    // mysqli_report(MYSQLI_REPORT_OFF);
    $conn = @mysqli_connect($host, $username, $password, $dbname, $port);
    // mysqli_autocommit($conn, false);
    if (!$conn)
        return null;
    $result = @mysqli_query($conn, $query);
    return $result;
}
/**
 * @param string $table
 * @param array $array_data
 * Insert a row into a table from an key/value array
 */
function insert($table, $array_data)
{
    $fields = array_keys($array_data);
    $sql = 'INSERT INTO ' . $table . '(' . implode(',', $fields) . ")  VALUES('" . implode("','", $array_data) . "')";
    return db_query($sql);
}
/**
 * @param array $array_data
 * creates a new string from an key/value array 
 */
function buildString($array_data)
{
    $string = '';
    foreach ($array_data as $key => $value)
    {
        $string .= $key . "='" . $value . "', ";
    }
    return rtrim($string, ', ');
}
/**
 * @param string $table
 * @param array $array_data
 * @param string $condition
 * updates a table from an key/value array with the especified condition
 */
function update($table, $array_data, $condition)
{
    $sql = 'UPDATE ' . $table . ' SET ' . buildString($array_data) . ' WHERE ' . $condition;
    $db = db_query($sql);
    return $db;
}
/**
 * @param string $table
 * @param string $field_name
 * @param string $field_value
 * Excecutes a query with the especified condition: $field_name = $field_value
 * Returns the current row of a result set as an object
 */
function delete($table, $field_name, $field_value)
{
    $sql = 'DELETE FROM ' . $table . ' WHERE ' . $field_name . ' = "' . $field_value . '"';
    $db = db_query($sql);
    return $db;
}
/**
 * @param string $table
 * @param string $id
 * Deletes a row with the especified condition: id = $id
 * Returns the current row of a result set as an object
 */
function deleteByID($table, $id)
{
    $sql = 'DELETE FROM ' . $table . ' WHERE id = "' . $id . '"';
    $db = db_query($sql);
    return $db;
}
/**
 * @param string $table
 * @param string $field_name
 * @param string $field_value
 * Excecutes a query with the especified condition: $field_name = $field_value
 * Returns the current row of a result set as an object
 */
function query($table, $field_name, $field_value)
{
    $sql = 'SELECT * FROM ' . $table . ' WHERE ' . $field_name . ' = "' . $field_value . '"';
    $db = db_query($sql);
    return @mysqli_fetch_object($db);
}
/**
 * @param string $table
 * @param string $flags
 * Performs a query against the database.
 * then returns each row as a set of objects
 */
function queryAll($table, $flags = '')
{
    $sql = 'SELECT * FROM ' . $table . ' ' . $flags;
    $db = db_query($sql);
    return $db;
}
/*  */
function commit()
{
    global $conn;
    return $conn->commit();
}
?>