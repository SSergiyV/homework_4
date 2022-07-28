<?php


class ValueObject {

    private int $red;
    private int $green;
    private int $blue;

    /**
     * @throws Exception
     */
    public function __construct($red, $green, $blue) {
        $this -> setRed($red);
        $this -> setGreen($green);
        $this -> setBlue($blue);
    }

    public function getRed(): int {

        return $this->red;
    }

    /**
     * @throws Exception
     */
    private function setRed(int $red): void {

        if ($red < 0 || $red > 255) {
            throw new Exception ("Out of range Red");
    }
        $this->red = $red;
    }

    public function getGreen(): int {

        return $this->green;
    }

    /**
     * @throws Exception
     */
    private function setGreen(int $green): void {

        if ($green < 0 || $green > 255) {
            throw new Exception ("Out of range Green");
        }
        $this->green = $green;
    }

    public function getBlue(): int {

        return $this->blue;
    }

    /**
     * @throws Exception
     */
    private function setBlue(int $blue): void {

        if ($blue < 0 || $blue > 255) {
            throw new Exception ("Out of range Blue");
        }
        $this->blue = $blue;
    }

    public function equals($qbj_first, $obj_second): bool {

        return $obj_second == $qbj_first;

    }

    /**
     * @throws Exception
     */
    public static function random(): object {

        return new ValueObject(
           $red = random_int(0, 255),
           $green = random_int(0, 255),
           $blue = random_int(0, 255),
        );

    }

    /**
     * @throws Exception
     */
    public function mix($objMix): void {

        $this -> setRed(($this -> red + $objMix -> red) / 2);
        $this -> setGreen(($this -> green + $objMix -> green) / 2);
        $this -> setBlue(($this -> blue + $objMix -> blue) / 2);

    }

}