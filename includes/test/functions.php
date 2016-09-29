<?php
require('../functions.php');
class StackTest extends PHPUNIT_Framework_Testcase {

public function test_data_iterator_good() {
    $array = [
        ['slug' => 'bla-bla', 'name' => 'bloo-blaa', 'desc' => 'blaa-bloo', 'tags' => '(bla) (blo)', 'date_created' => '5th June'],
        ['slug' => 'bla-bla', 'name' => 'bloo-blaa', 'desc' => 'blaa-bloo', 'tags' => '(bla) (blo)', 'date_created' => '5th June'],
        ['slug' => 'bla-bla', 'name' => 'bloo-blaa', 'desc' => 'blaa-bloo', 'tags' => '(bla) (blo)', 'date_created' => '5th June'],
    ];
    data_iterator($array);
}

public function test_data_iterator_bad() {
    $array = [];
    data_iterator($array);
}

//public function test_data_iterator_malformed() {
//
//}

}
?>


