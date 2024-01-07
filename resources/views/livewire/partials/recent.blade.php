@foreach($late as $later)
    <a href="{{ url('proverb', ['slug' => $later->slug]) }}" class="latest-item nav-link text-secondary">
        <h6>{{ $later->proverb_text }}</h6>
        <div class="px-2">
            <small>
                <span class="">
                    <i class="fa-solid fa-pen"></i>
                    <span class="">{{ $later->author }}</span>
                </span>
                <span class="px-3">
                    <i class="fa-solid fa-clock"></i>
                    <span>{{ $later->created_at->diffForHumans() }}</span>
                </span>
            </small>
        </div>
    </a>
@endforeach