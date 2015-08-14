<?php
    class RepeatCounter
    {
        function countRepeats($first_input, $second_input)
        {
            $phrase_array = explode(" ", $second_input);
            if (in_array($first_input, $phrase_array)){
                return "1";
            }
        }
    }
?>
