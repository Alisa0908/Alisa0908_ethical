@extends('layouts.main')

@section('title', '商品一覧')

@section('content')

@include('partial.ethical')
    <table class="table-bordered mb-5 mt-3">
        <tbody>
            <tr>
                <th>商品URL</th>
                <td><a href="{{ $ethical->goods_url }}">{{ $ethical->goods_url }}</a></td>
            </tr>
            <tr>
                <th>カテゴリー</th>
                <td>{{ $ethical->category->name }}</td>
            </tr>
            <tr>
                <th>材質</th>
                <td>{{ $ethical->materials }}</td>
            </tr>
            <tr>
                <th>生産場所</th>
                <td>{{ $ethical->logistics }}</td>
            </tr>
        </tbody>
    </table>
    <div class="d-flex">
        <a href="{{ route('ethicals.edit', $ethical) }}" class="btn btn-outline-primary mr-2">編集</a>
        <a href="{{ route('ethicals.index') }}" class="btn btn-outline-secondary mr-2">戻る</a>
        <form action="{{ route('ethicals.destroy', $ethical) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="削除" class="btn btn-outline-danger" onclick="if(!confirm('削除しますか？')){return false;}">
        </form>
    </div>
@endsection