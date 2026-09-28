@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
    <div class="index__content">
        <div class="index__heading">
            <h2>お問い合わせフォーム</h2>
        </div>
        <form class="form" action="/contacts/confirm" method="post">
            @csrf
            <div class="form__group">
                <label class="form__label" for="name">お名前</label>
                <input class="form__input" type="text" name="name" id="name" value="{{ old('name') }}" required />
                @error('name')
                    <p class="form__error">{{ $message }}</p>
                @enderror
            </div>
            <div class="form__group">
                <label class="form__label" for="email">メールアドレス</label>
                <input class="form__input" type="email" name="email" id="email" value="{{ old('email') }}" required />
                @error('email')
                    <p class="form__error">{{ $message }}</p>
                @enderror
            </div>
            <div class="form__group">
                <label class="form__label" for="tel">電話番号</label>
                <input class="form__input" type="tel" name="tel" id="tel" value="{{ old('tel') }}" required />
                @error('tel')
                    <p class="form__error">{{ $message }}</p>
                @enderror
            </div>
            <div class="form__group">
                <label class="form__label" for="content">お問い合わせ内容</label>
                <textarea class="form__textarea" name="content" id="content">{{ old('content') }}</textarea>
                @error('content')
                    <p class="form__error">{{ $message }}</p>
                @enderror
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">確認</button>
            </div>
        </form>
    </div>
@endsection