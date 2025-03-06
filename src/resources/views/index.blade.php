@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('header')
<header class="header">
    <div class="header__inner">
        <div class="header-utilities">
            <div class="header__logo">
                <h1>FashionablyLate</h1>
            </div>
        </div>
    </div>
</header>
@endsection

@section('content')
<div class="contact__content">
      <div class="contact__heading">
        <h2>Contact</h2>
      </div>

      <form class="form" action="/contacts/confirm" method="post">
      @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--required">お名前</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="last_name" placeholder="例:山田" required value="{{ old('last_name') }}" />
              <input type="text" name="first_name" placeholder="例:太郎" required value="{{ old('first_name') }}" />
            </div>
            <div class="form__error">
            @error('last_name','first_name')
            {{ $message }} 
            @enderror
            </div>
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--required">性別</span>
          </div>
                <input type="radio" class="radio" name="gender" required checked="checked"><label>男性</label>
                <input type="radio" class="radio" name="gender"><label>女性</label>
                <input type="radio" class="radio" name="gender"><label>その他</label>
            {{ $message }} 
            @enderror
            </div>
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--required">メールアドレス</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="例:test@example.com" required value="{{ old('email') }}" />
            </div>
            <div class="form__error">
            @error('email')
            {{ $message }} 
            @enderror
            </div>
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--required">電話番号</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="tel" name="tel_first" placeholder="080" required value="{{ old('tel_first') }}" />-
              <input type="tel" name="tel_second" placeholder="1234" value="{{ old('tel_second') }}" />-
              <input type="tel" name="tel_third" placeholder="5678" value="{{ old('tel_third') }}" />
            </div>
            <div class="form__error">
            @error('tel_first','tel_second','tel_third')
            {{ $message }} 
            @enderror
            </div>
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--required">住所</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" required value="{{ old('address') }}" />
            </div>
            <div class="form__error">
            @error('address')
            {{ $message }} 
            @enderror
            </div>
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">建物名</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101" value="{{ old('building') }}" />
            </div>
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--required">お問い合わせの種類</span>
          </div>
          <select name="select" required>
            <option value="" selected>選択してください</option>
            <option value="商品の交換について">商品の交換について</option>
          </select>
          <div class="form__error">
          @error('select')
            {{ $message }} 
            @enderror
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--required">お問い合わせ内容</span>
          </div>
              <textarea name="detail" cols="120" rows="10" placeholder="お問い合わせ内容をご記載ください" required value="{{ old('detail') }}" ></textarea>
            <div class="form__error">
          @error('detail')
            {{ $message }} 
            @enderror
            </div>
        </div>

        <div class="form__button">
          <button class="form__button-submit" type="submit">確認画面</button>
        </div>
      </form>
</div>
@endsection



