@extends('layouts.main')

@section('title', '一覧画面')

@section('content')

<div class="row">
    <div class="ml-3">
        <div class="mt-3 mb-3">
            <img src="{{ url($game->img_path) }}" class="square-img">
            <h3>
                <a href="{{ route('games.show', $game->id) }}">{{ $game->name }}</a>
            </h3>
            <h6 class="text-secondary">癒やし系</h6>
            <h6 class="text-success">●待機中</h6>
        </div>
    </div>
</div>

<table class="table-bordered mb-5 mt-3">
    <colgroup span="1" style="width:200px;background-color:#efefef;"></colgroup>
    <tbody>
        <tr>
        <tr>
            <th>料金</th>
            <td>¥800:30分</td>
        </tr>
        <tr>
            <th>ボイスチャット中の顔出し</th>
            <td>有り</td>
        </tr>

        <th>
            <a href="#">口コミ</a>
        </th>
        <td>
            <a href="#">口コミ(112件):★★★★☆/ 初対面とは思えないほど､安心して一緒にゲームが出来ました!気になってる方はぜひ! </a>
        </td>
        </tr>
        <tr>
            <th>対応ゲーム</th>
            <td>Apex､モンハン､あつ森､Valorant､雑談</td>
        </tr>
        <tr>
            <th>自己紹介</th>
            <td>
                〖🐰Introduction🍭〗
                <br>
                初めまして、えなこと申します。
                <br>
                お話（雑談やお悩み相談）がメインですが、ゲームも好きなので、一緒に楽しくお話しながらやりましょう！
                <br>
                ちなみにゲームの腕はブロンズですが、雑談の腕はプラチナくらいです...たぶん。。。
                <br>
                ゲームが下手な分頑張ってお話で楽しませるので是非遊んでください！
                <br>
                最近はApexに特にハマってます！他にもおすすめのゲームがあったら教えてください💖
                <br>
                〖🎮Game🎮〗
                <br>
                ◎出来るゲーム・・・Apex、DBD、マイクラ、あつ森、シャドバ...etc.
                <br>
                △一応出来るゲーム（ほぼプレイしたことない）・・・Valo、雀魂、スプラ２...etc.
                <br>
                上記にないゲームでも出来る場合があるので、気軽に何でも誘ってください💞
                <br>
                またsteam等のゲームや、マイナーなゲームでも無料であれば一緒にできると思います！
                <br>
                （※steamの有料ゲーで一緒に遊びたいという場合は🎁でお願いします。）
                <br>

                〖Other〗
                <br>
                試しに30分でもいいですし、お話が盛り上がって延長でも大歓迎です！
                <br>
                また、ゲーム画面共有しつつ雑談や映画やドラマを画面共有しながら一緒に見る事等も出来ます！
                <br>
                やりたいことが他にもあったら仰って下さい。
                <br>
                少しでも気になった方は気軽にメッセージ💌下さい、待ってます❕
                <br>

                都合のつきやすい時間：
                <br>
                昼：14時～18時
                <br>
                夜：21時～24時
                <br>

                〖💬Reservation💬〗
                <br>
                予約の仕方（↓下のチャット欄にメーセージを下さい!）
                <br>
                ①希望の日と時間（一応第二希望までお願いします。）
                <br>
                ➁私と一緒にやる事（雑談かゲーム、ゲームならゲームタイトルも）
                <br>
                予約する際は、これらの項目を送って下さると助かります❕
                <br>
                ◎基本空いてる △相談して貰えれば出来るかも × できない -- 未設定
            </td>
        </tr>
    </tbody>
</table>

<div class="slider">
    <img src="http://localhost/storage/event_image/日程表.png" class="img-fluid" style="max-width: 100%;, height: auto;"
        alt="s">
</div>

<div class="container">
    <div class="row g-2">
        <div class="col-2">
            <ul class="slider">
                <li>写メ日記!<img src="http://localhost/storage/event_image/あつもり.jpeg" class="" alt="">昨日は沢山の...</li>
                <li>写メ日記!<img src="http://localhost/storage/event_image/あつもり.jpeg" class="" alt="">昨日は沢山の...</li>
                <li>写メ日記!<img src="http://localhost/storage/event_image/あつもり.jpeg" class="" alt="">昨日は沢山の...</li>
                <li>写メ日記!<img src="http://localhost/storage/event_image/あつもり.jpeg" class="" alt="">昨日は沢山の...</li>
                <li>写メ日記!<img src="http://localhost/storage/event_image/あつもり.jpeg" class="" alt="">昨日は沢山の...</li>
            </ul>
        </div>
    </div>
</div>

<div class="container">
    <div class="row g-2">
        <div class="col-12 border ">
            <p class="text-secondary">コメント</p>
            <hr>
            <h6 class="float-right text-secondary">山田</h6>
            <p class="rounded float-right bg-success text-white col-4">こんにちは!21時から2時間で予約できますか?</p>
            <br>
            <h6 class="float-left text-secondary">えなこ</h6>
            <p class="rounded float-left bg-info text-white col-4">こんにちは!問題ありません😊</p>
            <form>
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="コメントを書く">
                </div>
            </form>
        </div>
    </div>
</div>

<hr>

<div class="container">
<h4>ルーム一覧</h4>
    <div class="row g-2">
        <div class="col-3 border mb-5  shadow">
            @include('partial.room')
        </div>
    </div>
</div>

{{-- <div class="container">
    <div class="row g-2">
        @if (!empty($games))
        @foreach ($games as $game)
        <div class="col-3 border mb-5  shadow">
            @include('partial.room')
        </div>
        @endforeach
        @endif
    </div>
</div> --}}

<a href="/games/">戻る</a>
@endsection