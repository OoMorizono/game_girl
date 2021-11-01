@extends('layouts.main')

@section('title', '一覧画面')

@section('content')
@include('partial.game')
<table class="table-bordered mb-5 mt-3">
    <colgroup span="1" style="width:200px;background-color:#efefef;"></colgroup>
    <tbody>
        <tr>
            <th>名前</th>
            <td>
                <p>{{ $game->name }}</p>
                <p>{{ $game->name_kana }}</p>
            </td>
        </tr>
        <tr>
            <th>住所</th>
            <td>{{ $game->address }}</td>
        </tr>
        <tr>
            <th>営業時間</th>
            <td>{{ $game->opentime }}</td>
        </tr>
        <tr>
            <th>定休日</th>
            <td>{{ $game->holiday }}</td>
        </tr>
        <tr>
            <th>その他</th>
            <td>{{ $game->note }}</td>
        </tr>
    </tbody>
</table>
<a href="/games/">戻る</a>
@endsection