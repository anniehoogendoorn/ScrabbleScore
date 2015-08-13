<?php
    class Scrabble
    {
        function scoreCal($user_input)
        {
            /* Lowercases user string then splits it into an array
             and stores it.*/
            $word_as_array = str_split(strtolower($user_input));
            $output = 0;

            // Associative array for scores
            $point_array =
            [
                "a" => 1,
                "e" => 1,
                "i" => 1,
                "o" => 1,
                "u" => 1,
                "l" => 1,
                "n" => 1,
                "r" => 1,
                "s" => 1,
                "t" => 1,
                "d" => 2,
                "g" => 2,
                "b" => 3,
                "c" => 3,
                "m" => 3,
                "p" => 3,
                "f" => 4,
                "h" => 4,
                "v" => 4,
                "w" => 4,
                "y" => 4,
                "k" => 5,
                "j" => 8,
                "x" => 8,
                "q" => 10,
                "z" => 10
            ];

            //Go through each character user array
            foreach ($word_as_array as $letter)
            {

                /* if the character exists in thre point array we then store
                 the value in output */
                if(array_key_exists($letter, $point_array))
                {

                    $output += $point_array[$letter];

                }
            }

            /*Return the total score*/
            return $output;

        }

    }
?>
