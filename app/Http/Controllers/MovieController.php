<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use voku\helper\HtmlDomParser;

class MovieController extends Controller
{

    public function index()
    {
        $movie = $this->getMovies();
        header('Content-Type: application/json');

        return view('movies', [
            'active' => "movies",
            'title' => "Movies",
            'movieList' => $movie
        ]);
    }

    private function init($path){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $path);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $html = curl_exec($curl);
        curl_close($curl);

        return HtmlDomParser::str_get_html($html);
    }

    public function getMovies(){
        $html = $this->init('https://www.imdb.com/chart/top/');

        $wrapper = $html->findOne('.lister');

        $movie = [];

        foreach ($wrapper->findMulti('.lister-list tr') as $movieItem) {
            $movie[] = [
                'title' => $movieItem->findOne('.titleColumn a')->innertext,
                'rating' => $movieItem->findOne('.ratingColumn strong')->innertext,
                'year' => $movieItem->findOne('.titleColumn .secondaryInfo')->innertext,
                'poster' => $movieItem->findOne('.posterColumn img')->getAttribute('src'),
            ];
        }

        return $movie;

    }
}
