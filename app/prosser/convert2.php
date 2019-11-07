<?php

namespace App\prosser;

class convert2 extends convert
{


    public function convert_to_outputs($users)
    {
        return [
            'name' => $users['name'],
        ];
    }
}
