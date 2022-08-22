<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pref extends Model
{
    protected $fillable = [
        'code'
        , 'name'
    ];

// 以下を追記
public static function selectlist()
{
    $prefs = Pref::all();
    $list = array();
    $list += array( "" => "選択してください" );
    foreach ($prefs as $pref) {
       $list += array( $pref->name => $pref->name );
    }
    return $list;
}

}
