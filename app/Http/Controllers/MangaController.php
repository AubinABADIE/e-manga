<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manga;

class MangaController extends Controller
{

  public function index(){

    $mangas = Manga::getAllMangas();
    return view('mangas/mangas', compact('mangas'));

  }

  public function show($id){

    $exist = Manga::exists($id);

    if($exist){

      $manga = Manga::getMangaByID($id);
      $volumes = Manga::getVolumesOfManga($id);
      return view('mangas/mangaPrewiew', compact('manga','volumes'));

    } else {
      abort('404');
    }
  }
}
