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
    <a href="{{ route('ethicals.index')}}">戻る</a>
@endsection