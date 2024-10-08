<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AnimeController extends Controller
{
    public function genres(){

        $response= Http::get('https://api.jikan.moe/v4/genres/anime')->json();
        $data = $response['data'];
        return view('anime-genres',compact('data'));
    }

    public function genre( $id ){

        $endpoint = 'https://api.jikan.moe/v4/anime?genres='. $id;

        $data = Http::get($endpoint)->json()['data'];

        $animes = Arr::map($data, function ($anime) {
            return [
                'img' => $anime['images']['jpg']['image_url'],
                'title' => $anime['title'],
                'synopsis'=>$anime['synopsis'],
                'mal_id'=>$anime['mal_id']
            ];
        });
        // dd($anime);
        return view('anime-bygenre',compact('animes'));
    }

    public function anime($id){
        $endpoint = 'https://api.jikan.moe/v4/anime/'. $id;

        // dd(Http::get($endpoint)->json()['data']);
        $anime = Http::get($endpoint)->json()['data'];



        return view('anime',compact('anime'));
    }


    public function search(){
        
        $endpoint = 'https://api.jikan.moe/v4/anime';

        $data = Http::get($endpoint,['genres'=>1,'order_by'=>'title','sort'=>'asc','page'=>5,'sfw'=>true]);
        
        if($data->clientError()){
            return redirect()->to('/')->with('error','Fallito qualcosa');
        }
        $data = $data->json()['data'];
        $animes = Arr::map($data, function ($anime) {
            return [
                'img' => $anime['images']['jpg']['image_url'],
                'title' => $anime['title'],
                'synopsis'=>$anime['synopsis'],
                'mal_id'=>$anime['mal_id']
            ];
        });
        // dd($anime);
        return view('anime-bygenre',compact('animes'));
    }
}
