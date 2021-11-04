@extends('layouts.main')

@section('title', '一覧画面')

@section('content')

<div class="slider">
    <img src="http://localhost/storage/event_image/リリース記念イベント広告.png" class="img-fluid"
        style="max-width: 100%;, height: auto;" alt="s">
    <img src="http://localhost/storage/event_image/enakorin_event_ad.png" class="img-fluid"
        style="max-width: 100%;, height: auto;" alt="s">
    <img src="http://localhost/storage/event_image/fix_参戦_伊織もえ.png" class="img-fluid"
        style="max-width: 100%;, height: auto;" alt="s">
</div>

<div class="container">
    <div class="row g-2">
        @if (!empty($games))
        @foreach ($games as $game)
        <div class="col-3 border mb-5  shadow">
            @include('partial.game')
        </div>
        @endforeach
        @endif
    </div>
</div>
@endsection