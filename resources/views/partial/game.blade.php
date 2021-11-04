<div class="row">
    <div class="ml-3">
        <div class="mt-3 mb-3">
            <img src="{{ url($game->img_path) }}" class="square-img">
            <h3>
                <a href="{{ route('games.show', $game->id) }}">{{ $game->name }}</a>
            </h3>
            <h6 class="text-success">●待機中</h6>
            <h6>癒やし系</h6>
            <h6>¥800/30分</h6>
            <h6 class="overflow-hidden">まったりゲームしましょ〜(*^^*)Ape...</h6>
        </div>  
    </div>
</div>
