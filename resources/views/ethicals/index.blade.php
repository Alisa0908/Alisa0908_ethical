@extends('layouts.main')

@section('title', '商品一覧')

@section('content')

    @if (!empty($ethicals))
        <ul>
            @foreach ($ethicals as $ethical)
                <li class="list-unstyled border mb-5 pl-3 shadow">
                    @include('partial.ethical')
                </li>
            @endforeach
        </ul>
    @endif
@endsection