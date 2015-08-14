<?php
    class RepeatCounter
    {
        function countRepeats($first_input, $second_input)
        {
            $number = substr_count($second_input, $first_input);

            if ($first_input == $second_input) {
                return 1;
            } elseif ($first_input != $second_input) {
                return $number;
            }
        }
    }
?>
