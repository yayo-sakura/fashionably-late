@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
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
            <a class="header-nav__link" href="/login">logout</a>
          </li>
        </ul>
      </nav>
    </div>
    </div>
  </header>
@endsection

@section('content')
<div class="admin__content">
    <div class="admin__heading">
        <h2>Admin</h2>
    </div>
    <form class="search-form">
        <div class="search-form__item">
            <input class="search-form__item-input" type="text" placeholder="名前やメールアドレスを入力してください" />
            <select class="search-form__item-select">
              <option value="">性別</option>
            </select>
            <select class="search-form__item-select">
              <option value=""disabled selected style="display:none;">お問い合わせの種類</option>
            </select>
            <input class="search-form__item-input" type="date" />
          </div>
          <div class="search-form__button">
            <button class="search-form__button-submit" type="submit">検索</button>
          </div>
          <input class="search-form__item-reset" type="reset" />
        </div>
    </form>

    <button class="export-form__button-submit" type="submit">エクスポート</button>
   
@endsection