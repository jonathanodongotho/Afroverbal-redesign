@foreach($trendings as $trending) 
    <div class="layer-two-item col-3">
        <div class="">
            <img src="{{ asset('Assets/Images/black.avif') }}" alt="">
        </div>
        <div class="py-2">
            <div>
                <a href="{{ url('proverb', ['slug' => $trending->slug]) }}" class="layer-two-item-link">{{ $trending->proverb_text }}</a>
            </div>
            <div class="date_added d-flex flex-row justify-content-between align-items-baseline">
                <small>
                    <i class="bi bi-clock"></i>
                    <span>{{ $trending->created_at->diffForHumans() }}</span>
                </small>
                <small>
                    <a href="{{ url('/proverbs/contexts', ['context' => $trending->context->context_name]) }}" class="btn btn-sm context rounded-0 text-white">{{ $trending->context->context_name }}</a>
                </small>
            </div>
        </div>
    </div>
@endforeach