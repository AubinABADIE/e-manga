<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Volume extends Model
{
    public static function getAllVolumes(){
        return DB::table('volume')->get();
    }

    public static function getVolumeByID($id){
      return DB::table('volume')->find($id);;
    }

    public static function exists($id){
      return DB::table('volume')->where('volume_id',$id)->exists();
    }
}
