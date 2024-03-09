@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="contact-form__content">
    <div class="contact-form__heading">
        <p>Contact</p>
    </div>
    <form class="form" action="/confirm" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お名前</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="first_name" placeholder=&nbsp例：山田 value="{{ old('first_name') }}" />
                </div>
                <div class="form__input--text">
                    <input type="text" name="last_name" placeholder=&nbsp例：太郎 value="{{ old('last_name') }}" />
                </div>
            </div>
        </div>
        <div class="form__error">
            @error('first_name')
            {{ $message }}
            @enderror
            @error('last_name')
            {{ $message }}
            @enderror
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">性別</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--radio">
                    <label><input class="form__input--radiobtn" type="radio" name="gender" value="1" checked />男性</label>
                    <label><input class="form__input--radiobtn" type="radio" name="gender" value="2" />女性</label>
                    <label><input class="form__input--radiobtn" type="radio" name="gender" value="3" />その他</label>
                </div>
            </div>
        </div>
        <div class="form__error">
            @error('gender')
            {{ $message }}
            @enderror
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">メールアドレス</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="email" name="email" placeholder=&nbsp例：test@example.com value="{{ old('email') }}" />
                </div>
            </div>
        </div>
        <div class="form__error">
            @error('email')
            {{ $message }}
            @enderror
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">電話番号</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--tel">
                    <input class="form__input--telbox" type="tel" name="tel" placeholder=080 value="{{ old('tel') }}" />
                </div>
                <div class="form__input--tel">
                    <input class="form__input--telbox" type="tel" name="tel" placeholder=1234 value="{{ old('tel') }}" />
                </div>
                <div class="form__input--tel">
                    <input class="form__input--telbox" type="tel" name="tel" placeholder=5678 value="{{ old('tel') }}" />
                </div>
            </div>
        </div>
        <div class="form__error">
            @error('tel')
            {{ $message }}
            @enderror
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">住所</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="address" placeholder=&nbsp例：東京都渋谷区千駄ヶ谷1-2-3 value="{{ old('address') }}" />
                </div>
            </div>
        </div>
        <div class="form__error">
            @error('address')
            {{ $message }}
            @enderror
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">建物名</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="building" placeholder=&nbsp例：千駄ヶ谷マンション101 value="{{ old('building') }}" />
                </div>
            </div>
        </div>
        <div class="form__error">
            @error('building')
            {{ $message }}
            @enderror
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせの種類</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <select class="form__input--text" name="category_id">
                    <option disabled style='display:none;' @if (empty($categories->category_id)) selected @endif>選択してください</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}" @if(isset($contact->category_id) && ($contact->category_id === $category->id)) selected @endif >{{ $category->content}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form__error">
            @error('category_id')
            {{ $message }}
            @enderror
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせ内容</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--textarea">
                    <textarea name="detail" placeholder=&nbspお問い合わせ内容をご記載ください value="{{ old('detail') }}"></textarea>
                </div>
            </div>
        </div>
        <div class="form__error">
            @error('detail')
            {{ $message }}
            @enderror
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">確認画面</button>
        </div>
    </form>
</div>
@endsection