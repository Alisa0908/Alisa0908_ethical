<div class="row">
    <div>
        <img src="{{ url($ethical->image_url) }}" class="square-img">
    </div>
    <div class="ml-3">
        <div class="mt-3 mb-3">
            <h3>
                <a href="{{ route('ethicals.show', $ethical->id) }}">{{ $ethical->name }}</a>
            </h3>
        </div>
        <div>
            <div>{{ $ethical->company }}</div>
            <div>{{ $ethical->price }}</div>
        </div>
    </div>
</div>