<div class="row">
    {{-- <div>
    </div> --}}
    <div class="ml-3">
        <div class="mt-3 mb-3">
            <img src="{{ url($game->img_path) }}" class="square-img">
            <h3>
                <a href="{{ route('games.show', $game->id) }}">{{ $game->name }}</a>
            </h3>
            <h6>癒やし系</h6>
            <h6>¥800/30分</h6>
        </div>  
    </div>
</div>