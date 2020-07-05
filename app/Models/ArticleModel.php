<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class ArticleModel {
    public static function get_all() {
        $articles = DB::table('article')->get();
        return $articles;
    }

    public static function insert($data) {
        $id = DB::table('article')->insertGetId($data);
        $inserted = ArticleModel::find_by_id($id);
        $date = $inserted->date_modified;
        $article = DB::table('article')
                      ->where('id',$id)
                      ->update([
                        'date_created'=> $date
                      ]);
    }

    public static function find_by_id($id) {
        $article = DB::table('article')->where('id', $id)->first();
        return $article;
    }

    public static function update($id, $request) {
        $article = DB::table('article')
                      ->where('id',$id)
                      ->update([
                        'title'=> $request['title'],
                        'content'=>$request['content']
                      ]);
        return $article;
    }

    public static function destroy($id) {
        $del_que = DB::table('article')
                     -> where('id', $id)
                     -> delete();
        return $del_que;
    }
}
