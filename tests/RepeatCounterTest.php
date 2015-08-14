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

        function test_two_letter_word()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $first_input = "a";
            $second_input = "a wolf";

            //Act
            $result = $test_RepeatCounter->countRepeats($first_input, $second_input);

            //Assert
            $this->assertEquals(1, $result);
        }

        function test_multiple_letter_word()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $first_input = "wolf";
            $second_input = "look at that wolf";

            //Act
            $result = $test_RepeatCounter->countRepeats($first_input, $second_input);

            //Assert
            $this->assertEquals(1, $result);
        }

        function test_multiple_times()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $first_input = "wolf";
            $second_input = "look at that wolf fighting that other wolf while the other wolf watches";

            //Act
            $result = $test_RepeatCounter->countRepeats($first_input, $second_input);

            //Assert
            $this->assertEquals(3, $result);
        }

    }

?>
