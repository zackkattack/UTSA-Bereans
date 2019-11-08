<?php

function db_open($url, $db, $user, $pw)
{
    $db_link = mysqli_connect($url, $user, $pwd);
    mysqli_select_link($db_link, $db);
    mysqli_query($db_link, 'SET NAMES UTF8');
    return $db_link;
}

function db_close($db_link)
{
    mysqli_close($db_link);
}

function db_error($db_link)
{
    return mysqli_error($db_link);
}

function db_errno($db_link)
{
    return mysqli_errno($db_link);
}
function db_query($db_link, $query)
{
    $result = mysqli_query($db_link, $query);
    if ($result === FALSE) die(mysqli_error($db_link));
    return $result;
}

function db_fetch($query)
{
    return mysqli_fetch_array($query);
}

function db_num_rows($array)
{
    return mysqli_num_rows($array);
}

function db_load_data($db_link, $file, $table)
{
    $query = "LOAD DATA LOCAL INFILE '" . $file . "' INTO TABLE " . $table . 
                " FIELDS TERMINATED BY ',' ENCLOSED BY '\"' ESCAPED BY '\\\\' LINES TERMINATES BY '\\r\\n' IGNORE 1 LINES";
    $results = mysqli_query($db_link, $query);
    if ($results === FALSE ) die(mysqli_error($db_link));
    return mysqli_affected_rows($db_link);
}

?>