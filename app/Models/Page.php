<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Page extends Model
{
    use HasFactory;
    public static function insertData($data){

        $value=DB::table('pages')->where('user_name', $data['user_name'])->get();
        if($value->count() == 0){
            DB::table('pages')->insert($data);
        }
    }
}
