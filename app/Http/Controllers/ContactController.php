<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;

use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    // indexメソッドを作成
    public function index()
    {
    return view('index'); //indexを表示
    }

    // confirmメソッドを作成
    public function confirm(ContactRequest $request)
    {
       $contact = $request->only(['name', 'email', 'tel', 'content']);
    //    return $contact;
        return view('confirm', compact('contact'));
    }

    //  storeメソッドを作成
    public function store(ContactRequest $request)
    {
        // フォームから送信されたデータを取得
        $contact = $request->only(['name', 'email', 'tel', 'content']);

        // データを保存する処理をここに追加することができます
        // 例: Contactモデルを使用してデータベースに保存するなど

        // 完了ページにリダイレクトするか、完了メッセージを表示するなどの処理を行う
        Contact::create($contact); // データベースに保存する例

        return view('thanks'); // 完了ページを表示
    }
}
