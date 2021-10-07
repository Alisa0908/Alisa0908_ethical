@extends('layouts.main')

@section('title', '商品登録')

@section('content')
    <form action="{{ route('ethicals.update', $ethical) }}" method="post">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="name">商品の名前</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $ethical->name) }}">
        </div>
        <div class="form-group">
            <label for="company">会社名</label>
            <input type="text" class="form-control" name="company" id="company"
                value="{{ old('company', $ethical->company) }}">
        </div>
        <div class="form-group">
            <label for="price">値段</label>
            <input type="number" class="form-control" name="price" id="price"
                value="{{ old('price', $ethical->price) }}">
        </div>
        <div class="form-group">
            <label for="image_url">画像URL</label>
            <input type="text" class="form-control" name="image_url" id="image_url"
                value="{{ old('image_url', $ethical->image_url) }}">
        </div>
        <div class="form-group">
            <label for="goods_url">商品の購入先URL</label>
            <input type="text" class="form-control" name="goods_url" id="goods_url"
                value="{{ old('goods_url', $ethical->goods_url) }}">
        </div>
        <label for="category">カテゴリー</label>
        <select class="form-group" name="category" id="category">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" @if (old('category') == $category->id) selected @endif>{{ $category->name }}</option>
            @endforeach
        </select>
        <div class="form-group">
            <label for="materials">素材</label>
            <input type="text" class="form-control" name="materials" id="materials"
                value="{{ old('materials', $ethical->materials) }}">
        </div>
        <div class="form-group">
            <label for="logistics">生産場所</label>
            <input type="text" class="form-control" name="logistics" id="logistics"
                value="{{ old('logistics', $ethical->logistics) }}">
        </div>

        <div>
            <input type="submit" value="更新">
        </div>
    </form>
@endsection
