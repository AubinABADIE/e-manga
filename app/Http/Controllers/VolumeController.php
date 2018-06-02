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
    $mangas = Manga::getAllMangasSorted();
    return view('volumes/volumes', compact('volumes', 'mangas'));

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
    return view('volume/create');
  }

  public function store(){
    $this->validate(request(),[
      'volume_isbn' => 'required|max:17',
      'volume_title' => 'required|max:50',
      'volume_number' => 'required',
	    'volume_synopsis' => 'required|max:1200',
    	'volume_publish_date',
    	'volume_price' => 'required',
    	'manga_id' => 'required'
    ]);
    $id = DB::table('volume')->insertGetId([
        'volume_isbn' => request('volume_isbn'),
        'volume_title' => request('volume_title'),
        'volume_number' => request('volume_number'),
        'volume_synopsis' => request('volume_synopsis'),
        'volume_publish_date' => request('volume_publish_date'),
        'volume_price' => request('volume_price'),
        'manga_id' => request('manga_id')
      ]);
    return redirect()->action('VolumeController@show',['id' => $id]);
  }

  public function delete($id){
    DB::table('volume')->where('id', '=', $id)->delete();
    return redirect()->action('VolumeController@index');
  }

  public function update(){
      return redirect()->action('VolumeController@index');
  }
}
