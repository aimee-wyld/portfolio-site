<?php
require('../functions.php');
class StackTest extends PHPUNIT_Framework_Testcase {

    /**
     * tests the function by passing in an array within an array with the correct keys and comparing output with expected output
     */
    public function test_data_iterator_good() {
        $array = [
            ['slug' => 'bla-bla', 'name' => 'bloo-blaa', 'desc' => 'blaa-bloo', 'tags' => '(bla) (blo)', 'date_created' => '5th June'],
            ['slug' => 'bla-bla', 'name' => 'bloo-blaa', 'desc' => 'blaa-bloo', 'tags' => '(bla) (blo)', 'date_created' => '5th June'],
            ['slug' => 'bla-bla', 'name' => 'bloo-blaa', 'desc' => 'blaa-bloo', 'tags' => '(bla) (blo)', 'date_created' => '5th June'],
        ];
        $data = data_iterator($array);
        $this->assertEquals($data, '<div class="blog-rows">' .
                                        '<h3 class="blog-text"><a href=article.php?blog=bla-bla>bloo-blaa</a></h3>' .
                                        '<p id="blog-desc" class="blog-text">blaa-bloo<a href=article.php?blog=bla-bla><i>Read more</i></a></p>' .
                                        '<h5 class="blog-text">(bla) (blo)</h5>' .
                                        '<h5 class="blog-text">5th June</h5>' .
                                    '</div>' .
                                    '<div class="blog-rows">' .
                                        '<h3 class="blog-text"><a href=article.php?blog=bla-bla>bloo-blaa</a></h3>' .
                                        '<p id="blog-desc" class="blog-text">blaa-bloo<a href=article.php?blog=bla-bla><i>Read more</i></a></p>' .
                                        '<h5 class="blog-text">(bla) (blo)</h5>' .
                                        '<h5 class="blog-text">5th June</h5>' .
                                    '</div>' .
                                    '<div class="blog-rows">' .
                                        '<h3 class="blog-text"><a href=article.php?blog=bla-bla>bloo-blaa</a></h3>' .
                                        '<p id="blog-desc" class="blog-text">blaa-bloo<a href=article.php?blog=bla-bla><i>Read more</i></a></p>' .
                                        '<h5 class="blog-text">(bla) (blo)</h5>' .
                                        '<h5 class="blog-text">5th June</h5>' .
                                    '</div>');
}

    /**
     * tests the function by passing in an empty array and comparing output with expected output
     */
    public function test_data_iterator_bad() {
        $array = [];
        $data = data_iterator($array);
        $this->assertEquals($data, '');
    }

    /**
     * tests the function by passing something in other than an array and comparing the output
     */
    public function test_data_iterator_malformed() {
        $string = 'blablooo';
        $output = data_iterator($string);
        $this->assertEquals($output, 'Input is not an array');
    }
}
?>


