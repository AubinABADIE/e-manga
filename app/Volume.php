<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Volume extends Model
{
    public static function getAllVolumes(){
        return DB::table('volume')
          ->join('manga', 'volume.manga_id', '=', 'manga.manga_id')
          ->get();
    }

    public static function getVolumeByID($id){
      return DB::table('volume')
        ->where('volume_isbn',$id)
        ->first();
    }

    public static function getVolumeOfManga($id, $id2){
      return DB::table('manga')
        ->where('manga.manga_id', '=', $id)
        ->join('volume','volume.manga_id','=','manga.manga_id')
        ->where('volume.volume_isbn', '=', $id2)
        ->first();
    }

    public static function getRecentVolumes(){
      return DB::table('volume')
        ->where('volume.volume_publish_date', '>', 'CURRENT_DATE()')
        ->join('volume','volume.manga_id','=','manga.manga_id')
        ->get();
    }

    public static function exists($id){
      return DB::table('volume')
        ->where('volume_isbn',$id)
        ->exists();
    }
}
