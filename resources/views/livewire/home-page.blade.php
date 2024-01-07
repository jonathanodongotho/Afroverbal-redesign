<div>
    <div class="intro container-fluid d-flex justify-content-center flex-column flex-wrap">
    @foreach($featureds as $featured)
        <div class="intro-layer-one d-flex justify-content-between flex-column flex-md-row">
            <div class="col-12 col-md-6">
                <img src="Assets/Images/black.avif" alt="">
            </div>
            <div class="col-12 col-md-6 px-0 px-md-4">
                <div class="d-flex justify-content-between">
                    <a href="{{ url('proverbs/contexts', ['context' => $featured->context->context_name]) }}" class="btn context border-0 rounded-0 px-4 py-1">{{ $featured->context->context_name }}</a>
                    <a href="{{ url('proverbs/tribes', ['tribe' => $featured->tribe->tribe_name]) }}" class="btn tribe border-0 rounded-0 px-4 py-1">{{ $featured->tribe->tribe_name }}</a>
                </div>
                <div class="py-3">
                    <h2>{{ $featured->proverb_text }}</h2>
                </div>
                <div class="py-3">
                    <h6>{{ $featured->proverb_translation }}</h6>
                </div>
                <div class="date_added d-flex justify-content-between py-3">
                    <small>
                        <i class="fa-solid fa-clock"></i>
                        <span>{{ $featured->created_at->diffForHumans() }}</</span>
                    </small>
                    <small>
                        <i class="fa-solid fa-pen"></i>
                        <span>{{ $featured->author }}</</span>
                    </small>
                </div>
                <div class="py-4">
                    <a href="{{ url('proverb', ['slug' => $featured->slug]) }}" class="btn more btn-sm rounded-0">READ MORE</a>
                </div>
            </div>
        </div>
    @endforeach
        
        <div class="pt-4">
            <h4 class="text-danger">TRENDING</h4>
        </div>
        <div class="col-12 intro-layer-two py-1 py-md-2 d-flex flex-wrap">
            @include('livewire.partials.trending') 

        </div>
    </div>
    <div class="col-12 d-flex flex-wrap p-3 bg-light">
        <h6>INSIGHT: <small class="insight" id="insight">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, mollitia.</small></h6>
    </div>
    <div class="d-flex flex-wrap">
        <div class="col-12 col-md-8 mini-gallery px-3">

            @foreach($proverbs as $proverb)
                <div class="mini-gallery-item d-flex flex-column flex-lg-row">
                    <div class="">
                        <img src="Assets/Images/black.avif" alt="">
                    </div>
                    <div class="px-lg-3">
                        <div>
                            <a href="{{ url('proverbs/contexts', ['context' => $proverb->context->context_name]) }}" class="btn py-0 px-2 btn-sm context rounded-0">{{ $proverb->context->context_name }}</a>
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
                            <a href="{{ url('proverb', ['slug' => $proverb->slug]) }}" class="px-1 btn btn-sm read-more rounded-0"><b>READ MORE <i class="bi bi-arrow-right"></i></b></a>
                        </div>
                    </div>
                </div>
            @endforeach
            
            <div class="text-secondary py-2">
                <a href="{{ url('/proverbs') }}" class="nav-link bg-secondary-subtle p-2">View all</a>
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