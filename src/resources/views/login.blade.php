@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('header')
<header class="header">
    <div class="header__inner">
        <div class="header-utilities">
            <div class="header__logo">
                <h1>FashionablyLate</h1>
            </div>
      <nav>
        <ul class="header-nav">
          <li class="header-nav__item">
            <a class="header-nav__link" href="/register">register</a>
          </li>
        </ul>
      </nav>
    </div>
    </div>
  </header>
@endsection

@section('content')
<div class="login__content">
      <div class="login__heading">
        <h2>Login</h2>
      </div>
      <form class="form">
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="例:test@example.com" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">パスワード</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="password" name="password" placeholder="例:coachtech1106" />
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
          <div class="form__button">
          <button class="form__button-submit" type="submit">ログイン</button>
        </div>
      </form>
</div>
@endsection