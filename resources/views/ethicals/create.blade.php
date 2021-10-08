@extends('layouts.main')

@section('title', '商品登録')

@section('content')
    @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('ethicals.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">商品の名前</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label for="company">会社名</label>
            <input type="text" class="form-control" name="company" id="company" value="{{ old('company') }}">
        </div>
        <div class="form-group">
            <label for="price">値段</label>
            <input type="number" class="form-control" name="price" id="price" value="{{ old('price') }}">
        </div>
        <div class="form-group">
            <label for="image_url">画像URL</label>
            <input type="text" class="form-control" name="image_url" id="image_url" value="{{ old('image_url') }}">
        </div>
        <div class="form-group">
            <label for="goods_url">商品の購入先URL</label>
            <input type="text" class="form-control" name="goods_url" id="goods_url" value="{{ old('goods_url') }}">
        </div>
        <div class="form-group">
            <label for="category_id">カテゴリー</label>
            <select class="form-control" name="category_id" id="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @if (old('category') == $category->id) selected @endif>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="materials">素材</label>
            <input type="text" class="form-control" name="materials" id="materials" value="{{ old('materials') }}">
        </div>
        <div class="form-group">
            <label for="logistics">生産場所</label>
            <input type="text" class="form-control" name="logistics" id="logistics" value="{{ old('logistics') }}">
        </div>
        <input class="btn btn-primary" type="submit" value="登録">
        <button type="button" onclick="location.href='{{ route('ethicals.index') }}'"
            class="btn btn-outline-secondary mr-2">戻る</button>
    </form>
@endsection
