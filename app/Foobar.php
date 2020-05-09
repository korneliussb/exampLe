<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Foobar extends Model
{
    public function name()
    {
        $val = ['one', 'two'];
        if ($val) {
            return 'good';
        }

        // $names = ['one', 'two', 'three'];
        // return "laracast";


        // return request()->redirect('/somewhere');
    }
}
