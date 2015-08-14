<?php

    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        function test_one_letter_word()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $first_input = "a";
            $second_input = "a";

            //Act
            $result = $test_RepeatCounter->countRepeats($first_input, $second_input);

            //Assert
            $this->assertEquals(1, $result);
        }
    }

?>
