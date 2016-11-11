<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Mail; // 追加
use App\Mail\Contacted; // 追加

class ContactController extends Controller
{

    /**
     * お問い合わせフォームのビューを表示
     * @return view お問い合わせフォーム
     */

    public function index(){
        return view('contact');
    }

    /**
     * メール送信処理
     * @param  Request $request フォームで入力された値
     * @return redirector       入力画面へリダイレクト
     */

    public function send(Request $request)
    {
        Mail::to('sizukutamago@gmail.com')->send(new Contacted($request));
    }
}
