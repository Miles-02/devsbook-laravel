<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Notes extends Model
{
    public static function get_all_notes(){
        return DB::table('notes')->get();
    }

    public static function get_single_note($id){
        return DB::table('notes')->where('id', $id)->get();
    }

    public static function insert_note($title, $body){
        $id = DB::table('notes')->insertGetId(
            [
                'title' => $title, 
                'body'  => $body,
            ]
        );
        return $id;

    }

    public static function update_note($id, $title, $body){
        DB::table('notes')->where('id', $id)->update([
            'title' => $title,
            'body' => $body
        ]);

    }

    public static function delete_note($id){
        DB::table('notes')->where('id', $id)->delete();
    }
}
