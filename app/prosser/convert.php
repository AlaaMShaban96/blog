<?php

namespace App\prosser;

abstract class convert
{
    public function convert(array $item)
    {
        return array_map([$this, 'convert_to_outputs'], $item);
    }
    abstract function convert_to_outputs($item);
}
