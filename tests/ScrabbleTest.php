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
    }

?>
