@extends('layouts.main')

@section('title', '商品登録')

@section('content')
    <form action="{{ route('ethicals.store') }}" method="post">
        @csrf
        <div>
            <label for="name">商品の名前</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}">
        </div>
        <div>
            <label for="company">会社名</label>
            <input type="text" name="company" id="company" value="{{ old('company') }}">
        </div>
        <div>
            <label for="price">値段</label>
            <input type="number" name="price" id="price" value="{{ old('price') }}">
        </div>
        <div>
            <label for="image_url">画像URL</label>
            <input type="url" name="image_url" id="image_url" value="{{ old('image_url') }}">
        </div>
        <div>
            <label for="goods_url">商品の購入先URL</label>
            <input type="url" name="goods_url" id="goods_url" value="{{ old('goods_url') }}">
        </div>
        <div>
            <label for="price">カテゴリー</label>
            <input type="integer" name="price" id="price" value="{{ old('price') }}">
        </div>
        
        <div>
            <input type="submit" value="登録">
        </div>
    </form>
@endsection
