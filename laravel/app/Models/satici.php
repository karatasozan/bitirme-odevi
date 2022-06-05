<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class satici extends Model
{
    protected $guarded = [];
    static function getField($id, $field)
    {
        $c = satici::where('id', '=', $id)->count();
        if ($c != 0) {

            $w = satici::where('id', '=', $id)->get();
            return $w[0][$field];
        } else {
            return "Satıcı Silinmiş..";
        }

    }
    use HasFactory;
}
