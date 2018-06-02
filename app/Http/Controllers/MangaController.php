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

  public function create(){
    return view('manga/create');
  }

  public function store(){
    $this->validate(request(),[
      'manga_title' => 'required|max:50',
      'manga_description' => 'required|max:1000',
    	'manga_release_date',
    	'mangaka_id' => 'required',
      'type_id' => 'required',
    	'publisher_id' => 'required'
    ]);
    $id = DB::table('manga')->insertGetId([
        'manga_title' => request('manga_title'),
        'manga_description' => request('manga_descriptionmanga_description'),
        'manga_release_date' => request('manga_release_date'),
        'mangaka_id' => request('mangaka_id'),
        'type_id' => request('type_id'),
        'publisher_id' => request('publisher_id')
      ]);
    return redirect()->action('MangaController@show',['id' => $id]);
  }

  public function delete($id){
    DB::table('manga')->where('id', '=', $id)->delete();
    return redirect()->action('MangaController@index');
  }

  public function update(){
      return redirect()->action('MangaController@index');
  }
}
