<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    /**
    *ブログ記事投稿フォーム
    *
    * @return \Illuminate\Contracts\View\Factory\Illuminate\View\View
    */
  public function form()
  {

      // resources/views 配下にある、どのテンプレートを使うか指定する。
      // ディレクトリの海藻はピリオドで表現できる
      // この例では resources/views/admin_blog/form.blade.php が読み込まれる
      return view('admin_blog.form');
  }
}
