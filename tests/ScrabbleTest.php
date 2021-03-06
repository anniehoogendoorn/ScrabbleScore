<?php

    require_once "src/Scrabble.php";

    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {
        function test_scrabble_singleLetter()
        {
            //Arrange
            $test_single_letter = new Scrabble;
            $user_input = "a";

            //Act
            $result = $test_single_letter->scoreCal($user_input);

            //Assert
            $this->assertEquals(1, $result);
        }

        function test_scrabble_difValue()
        {
            //Arrange
            $test_single_letter = new Scrabble;
            $user_input = "k";

            //Act
            $result = $test_single_letter->scoreCal($user_input);

            //Assert
            $this->assertEquals(5, $result);
        }

        function test_scrabble_word()
        {
            //Arrange
            $test_word = new Scrabble;
            $user_input = "cat";

            //Act
            $result = $test_word->scoreCal($user_input);

            //Assert
            $this->assertEquals(5, $result);
        }

        function test_case_sensitivity()
        {
            //Arrange
            $test_case = new Scrabble;
            $user_input = "cAt";

            //Act
            $result = $test_case->scoreCal($user_input);

            //Assert
            $this->assertEquals(5, $result);
        }


        function test_mix_character()
        {
            //Arrange
            $test_case = new Scrabble;
            $user_input = "c!@#a%$#t";

            //Act
            $result = $test_case->scoreCal($user_input);

            //Assert
            $this->assertEquals(5, $result);
        }
    }

?>
