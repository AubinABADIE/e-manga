<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Volume;
use App\Manga;
use DB;

class VolumeController extends Controller
{

  public function index(){

    $volumes = Volume::getAllVolumes();
    return view('volumes/volumes', compact('volumes'));

  }
  public function show($id, $id2){

    $exist = Manga::exists($id);
    $exist2 = Volume::exists($id2);

    if($exist && $exist2){

      $manga = Manga::getMangaByID($id);
      $volume = Volume::getVolumeOfManga($id, $id2);
      return view('volumes/volumePreview', compact('manga','volume'));

    } else {
      abort('404');
    }
  }





  public function create(){
    return view('books/create');
  }

  public function store(){
    $this->validate(request(),[
      'titre' => 'required|max:50',
      'auteur' => 'required',
      'isbn' =>'max:500',
      'synopsis' =>'required|max:500',
    ]);
    $id = DB::table('livre')->insertGetId(
        ['titre' => request('titre'), 'auteur' => request('auteur'), 'isbn' => request('isbn'),'synopsis' => request('synopsis') ]);
    return redirect()->action('BooksController@show',['id' => $id]);
    //create a new book using request data, save it to db, redirect
  }

  public function delete($id){
    DB::table('livre')->where('id', '=', $id)->delete();
    return redirect()->action('BooksController@index');
  }

  public function update(){
      return redirect()->action('BooksController@index');
  }
}
