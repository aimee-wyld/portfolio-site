<?php

/**
 * queries the database, returns the data in an associative array.
 * (Requires database connection so cannot be unit tested)
 * @param $connection PDO represents the connection to the MySQL server (returned from database_connect function)
 * @param $query STRING should be formatted as a SELECT query with required parameters and the table name
 * @return ARRAY returns an indexed array containing associative arrays for each row that is returned from the chosen query parameters
 */
function query_into_array($connection, $query) {
    $result = $connection->query($query);
    $data = $result->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}
/**
 * iterates over an array within an array and, as long as the key 'name' (which is a value in the first array) isn't empty, compound assigns the chosen information from the array,
 * along with some html, into the variable 'data' to be returned.
 * @param $data_array ARRAY array produced by query_into_array function
 * @return STRING string containing values from array concatenated with html (or, if not an array to begin with, returns error message)
 */
function data_iterator($data_array) {
    if (!is_array($data_array)) {
        return 'Input is not an array';
    } else {
        $data = '';
        foreach ($data_array as $key => $value) {
            if (!empty($value['name'])) {
                $data .= '<div class="blog-rows"><h3 class="blog-text"><a href="article.php?blog=' . $value['slug'] . '">' . $value['name'] . '</a></h3><p id="blog-desc" class="blog-text">' . $value['desc'] . '<a class="link" href="article.php?blog=' . $value['slug'] . '"><i>Read more</i></a></p><h5 class="blog-text">' . $value['tags'] . '</h5><h5 class="blog-text">' . $value['date_created'] . '</h5></div>';
            }
        }
        return $data;
    }
}
?>

