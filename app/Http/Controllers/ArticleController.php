<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArticleModel;

class ArticleController extends Controller
{
    public function index() {
        $items = ArticleModel::get_all();
        return view('article.index', compact('items'));
    }

    public function create() {
        return view('article.form');
    }

    public function store(Request $request) {
        $data = $request->all();
        unset($data["_token"]);
        $data['date_created'] = 0;
        $item = ArticleModel::insert($data);
        if ($item) {
            return $this->index();
        }
    }

    public function show($id){
       $article = ArticleModel::find_by_id($id);
       if (is_null($article)) {
          return view('article.null');
       } else {
          return view('article.show', compact('article'));
       }
    }

    public function edit($id) {
       $article = ArticleModel::find_by_id($id);
       return view('article.edit', compact('article'));
    }

    public function update($id, Request $request) {
        $article = ArticleModel::update($id, $request->all());
        return redirect('/article');
    }

    public function destroy($id) {
        $deleted = ArticleModel::destroy($id);
        return redirect('/article');
    }
}
