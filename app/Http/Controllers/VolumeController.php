<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Volume;
use DB;

class VolumeController extends Controller
{

  public function index(){

    $volumes = Volume::getAllVolumes();
    return view('volumes/volumes', compact('volumes'));

  }

  public function show($id){

    $exist = Volume::exists($id);

    if($exist){

      $volume = Volume::getVolumeByID($id);
      return view('volumes/volumePreview', compact('volume'));

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
