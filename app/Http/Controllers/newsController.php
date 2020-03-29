<?php

namespace App\Http\Controllers;
use DB;
use App\Quotation;
use Illuminate\Http\Request;

// Controlador donde se hacen las consultas
class newsController extends Controller
{

    //Funcion que obtiene las noticias y sus relaciones
    public function getNews(Request $request){

        $title = $request -> get('title');
        $description = $request -> get('description');
        $body = $request -> get('body');

         $news = DB::table('news')
            ->join('categories', function ($join) {
                $join->on('categories.id_category', '=', 'news.id_category');
                })
            ->join('author', function ($join) {
                $join->on('author.id_author', '=', 'news.id_author_new');
            })
            ->where('title', 'LIKE', "%".$title."%")
            ->orWhere('body', 'LIKE', "%".$title."%")
            ->orWhere('name', 'LIKE', "%".$title."%")
            ->orWhere('date', 'LIKE', "%".$title."%")
            ->orWhere('news.description', 'LIKE', "%".$title."%")
            ->paginate(3);

         return view('front/news', compact('news'));
      }

      //Funcion que obtiene noticia especifica y su relacion con autor
      public function getNote($id){
            $new = DB::table('news')
            ->join('author', function ($join) {
                $join->on('author.id_author', '=', 'news.id_author_new');
            })
            ->where('id_new', 'LIKE', $id)
            ->get();
         return view('front/new')->with('note', $new);
      }
}
