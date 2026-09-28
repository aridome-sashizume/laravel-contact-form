@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
    <div class="confirm__content">
        <div class="confirm__heading">
            <h2>お問い合わせ内容の確認</h2>
        </div>
        <form class="form" action="/contacts" method="post">
            @csrf
            <div class="form__group">
                <label class="form__label" for="name">お名前</label>
                <p class="form__value">{{ $contact['name'] }}</p>
                <input type="hidden" name="name" value="{{ $contact['name'] }}">
            </div>
            <div class="form__group">
                <label class="form__label" for="email">メールアドレス</label>
                <p class="form__value">{{ $contact['email'] }}</p>
                <input type="hidden" name="email" value="{{ $contact['email'] }}">
            </div>
            <div class="form__group">
                <label class="form__label" for="tel">電話番号</label>
                <p class="form__value">{{ $contact['tel'] }}</p>
                <input type="hidden" name="tel" value="{{ $contact['tel'] }}">
            </div>
            <div class="form__group">
                <label class="form__label" for="content">お問い合わせ内容</label>
                <p class="form__value">{{ $contact['content'] }}</p>
                <input type="hidden" name="content" value="{{ $contact['content'] }}">
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">送信</button>
            </div>
        </form>
    </div>
@endsection 