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
      return DB::table('manga')
        ->where('manga.manga_id', '=', $id)
        ->first();
    }

    public static function getPublisherOfManga($id){
      return DB::table('manga')
        ->where('manga.manga_id', '=', $id)
        ->join('publisher', 'manga.publisher_id', '=', 'publisher.publisher_id')
        ->select('publisher.publisher_name')
        ->first();
    }

    public static function getMangakaOfManga($id){
      return DB::table('manga')
        ->where('manga.manga_id', '=', $id)
        ->join('mangaka', 'manga.mangaka_id', '=', 'mangaka.mangaka_id')
        ->select('mangaka.mangaka_first_name', 'mangaka.mangaka_last_name')
        ->first();
    }

    public static function getTypeOfManga($id){
      return DB::table('manga')
        ->where('manga.manga_id', '=', $id)
        ->join('manga_type', 'manga.type_id', '=', 'manga_type.type_id')
        ->select('manga_type.type_label')
        ->first();
    }

    public static function getKeywordsOfManga($id){
      return DB::table('manga')
        ->where('manga.manga_id', '=', $id)
        ->join('link', 'manga.manga_id', '=', 'link.manga_id')
        ->join('keyword', 'link.keyword_id', '=', 'keyword.keyword_id')
        ->select('keyword.keyword_label')
        ->get();
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
