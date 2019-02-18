<?php

namespace PHP\Badge\Font;

class GdWidthCalculator implements WidthCalculatorInterface
{
    public function getWidth($text, Font $font)
    {
        $box = imagettfbbox($font->getSize(), 0, $font->getPath(), $text);

        return round(abs($box[2] - $box[0]), 1);
    }

    public function getHeight($text, Font $font)
    {
        $box = imagettfbbox($font->getSize(), 0, $font->getPath(), $text);

        return round(abs($box[7]) - abs($box[1]), 1);
    }
}
