<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manga;

class MangaController extends Controller
{

  public function index(){

    $mangas = Manga::getAllMangas();
    $types = Manga::getTypes();
    $publishers = Manga::getPublishers();
    $keywords = Manga::getKeywords();
    return view('mangas/mangas', compact('mangas', 'types', 'publishers', 'keywords'));

  }

  public function show($id){

    $exist = Manga::exists($id);

    if($exist){

      $manga = Manga::getMangaByID($id);
      $mangaka = Manga::getMangakaOfManga($id);
      $publisher = Manga::getPublisherOfManga($id);
      $type = Manga::getTypeOfManga($id);
      $keywords = Manga::getKeywordsOfManga($id);
      $volumes = Manga::getVolumesOfManga($id);
      return view('mangas/mangaPreview', compact('manga', 'mangaka', 'publisher', 'type', 'keywords','volumes'));

    } else {
      abort('404');
    }
  }
}
