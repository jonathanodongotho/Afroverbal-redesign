<div>
    <div class="intro container-fluid d-flex justify-content-center flex-column flex-wrap">
        <div class="pt-4">
            <h4 class="text-danger">TRENDING</h4>
        </div>
        <div class="col-12 intro-layer-two py-1 py-md-2 d-flex flex-wrap">
            
            @include('livewire.partials.trending')

        </div>
    </div>
    <div class="col-12 d-flex flex-wrap p-3 bg-light">
        <div class="col-8">
            <h4 class="text-warning">Search results</h4>
        </div>
    </div>
    <div class="d-flex flex-wrap">
        <div class="col-12 col-md-8 mini-gallery px-3">

            @foreach($data as $searched)
                <div class="mini-gallery-item d-flex flex-column flex-lg-row">
                    <div class="">
                        <img src="{{ asset('Assets/Images/black.avif') }}" alt="">
                    </div>
                    <div class="px-lg-3">
                        <div>
                            <a href="{{ url('proverbs/contexts', ['context' => $searched->context->context_name]) }}" class="btn py-0 px-2 btn-sm context rounded-0">{{ $searched->context->context_name }}</a>
                        </div>
                        <div class="py-1">
                            <h6>{{ $searched->proverb_text }}</h6>
                        </div>
                        <div>
                            <small>
                                <span class="">
                                    <i class="bi bi-person"></i>
                                    <span>{{ $searched->author }}</span>
                                </span>
                                <span class="px-3">
                                    <i class="bi bi-clock"></i>
                                    <span>{{ $searched->created_at->diffForHumans() }}</span>
                                </span>
                            </small>
                        </div>
                        <div>
                            <p class="layer-two-item-link">{{ $searched->proverb_translation }}</p>
                        </div>
                        <div>
                            <a href="{{ url('proverb', ['slug' => $searched->slug]) }}" class="px-1 btn btn-sm read-more rounded-0"><b>READ MORE <i class="bi bi-arrow-right"></i></b></a>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="pag_container py-2">
                <span  class="pag_link">{{ $data->links() }}</span>
            </div>

            <div class="text-secondary py-2">
                <a href="{{ url('/proverbs') }}" class="nav-link bg-secondary-subtle p-2">Go back to all proverbs</a>
            </div>
        </div>
        <div class="col-12 col-md-4 latest pt-2">
            <div>
                <h5>LATEST</h5>
            </div>
            <div class="latest-items px-3 px-3">
                @include('livewire.partials.recent')
            </div>
            
            <x-partials._signup />

        </div>
    </div>
</div>
