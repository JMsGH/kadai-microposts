<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MicropostFavoriteController extends Controller
{
    /**
     * micropostをお気に入りにするアクション
     * 
     * @param $id お気に入りにするmicropostのid
     * @return \Illuminate\Http\Response
     */
     public function store($id)
     {
       // 認証済みユーザ（閲覧者）がidのmicropostをお気に入りにする
       \Auth::user()->favorite($id);
       // 前のURLへリダイレクトさせる
       return back();
     }
     
     /**
     * micropostをお気に入りから外すアクション
     * 
     * @param $id お気に入りから外すmicropostのid
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
     {
       // 認証済みユーザ（閲覧者）がidのmicropostをお気に入りにする
       \Auth::user()->unfavorite($id);
       // 前のURLへリダイレクトさせる
       return back();
     }
}
