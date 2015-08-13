<?php
    class Scrabble
    {
        function scoreCal($user_input)
        {
            $point_array = ["a" => 1];

            if(array_key_exists($user_input, $point_array))
            {
                return $point_array[$user_input];
            }










        }

    }
?>
