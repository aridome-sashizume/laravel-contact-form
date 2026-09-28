@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
    <div class="thanks__content">
        <div class="thanks__heading">
            <h2>お問い合わせありがとうございました。</h2>
        </div>
        <p class="thanks__message">お問い合わせ内容を送信しました。<br>確認のため、入力いただいたメールアドレスに自動返信メールをお送りしています。</p>
    </div>
@endsection