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
        <div class="col-8 d-flex justify-content-around align-items-center">

        </div>
    </div>
    <div class="d-flex flex-wrap">
        <div class="col-12 px-0 col-md-8 detail px-md-3">
            <div class="d-flex flex-column px-3 px-md-0">
                <div class="">
                    <img src="{{ asset('Assets/Images/black.avif') }}" alt="">
                </div>
                <div class="mt-3">
                    <div class="d-flex justify-content-around py-3 bg-success-subtle">
                        <a href="{{ url('proverbs/contexts', ['context' => $proverb->context->context_name]) }}" class="btn py-0 p-3 context bg-warning-subtle rounded-0 border text-warning">{{ $proverb->context->context_name }}</a>
                        <a href="{{ url('proverbs/tribes', ['tribe' => $proverb->tribe->tribe_name]) }}" class="btn py-0 p-3 tribe rounded-0 bg-warning-subtle border text-danger">{{ $proverb->tribe->tribe_name }}</a>
                    </div>
                    <div class="py-1">
                        <h6>{{ $proverb->proverb_text }}</h6>
                    </div>
                    <div>
                        <small>
                            <span class="">
                                <i class="bi bi-person"></i>
                                <span>{{ $proverb->author }}</span>
                            </span>
                            <span class="px-3">
                                <i class="bi bi-clock"></i>
                                <span>{{ $proverb->created_at->diffForHumans() }}</span>
                            </span>
                        </small>
                    </div>
                    <div>
                        <p class="layer-two-item-link">{{ $proverb->proverb_translation }}</p>
                    </div>
                    <div>
                        <h6>Moral teaching</h6>
                        <p class="layer-two-item-link">{{ $proverb->teaching }}</p>
                    </div>
                </div>
            </div>

            <div class="text-secondary py-2">
                <a href="{{ url('/proverbs') }}" class="nav-link bg-secondary-subtle p-2">View more proverbs</a>
            </div>
        </div>
        <div class="col-12 col-md-4 latest pt-2">
            <div class="px-2">
                <h5>LATEST</h5>
            </div>
            <div class="latest-items px-3 px-3">
                @include('livewire.partials.recent')
            </div>

            <x-partials._signup />
            
        </div>
    </div>
</div>
