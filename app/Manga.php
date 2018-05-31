<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Manga extends Model
{
    public static function getAllMangas(){
        return DB::table('manga')->get();
    }

    public static function getMangaByID($id){
      return DB::table('manga')->find($id);;
    }

    public static function getVolumesOfManga($id){
      return DB::table('manga')->where('manga.manga_id', '=', $id)
        ->join('volume','volume.manga_id','=','manga.manga_id')
        ->get();
    }

    public static function exists($id){
      return DB::table('manga')->where('manga_id',$id)->exists();
    }
}
