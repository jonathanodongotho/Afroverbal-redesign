<div>
    <div class="intro container-fluid d-flex justify-content-center flex-column flex-wrap">
        <div class="pt-4">
            <h4 class="text-danger">TRENDING</h4>
        </div>
        <div class="col-12 intro-layer-two py-1 py-md-2 d-flex flex-wrap">
            @foreach($trendings as $trending) 
                    <div class="layer-two-item col-3">
                        <div class="">
                            <img src="{{ asset('Assets/Images/black.avif') }}" alt="">
                        </div>
                        <div class="py-2">
                            <!-- <div>
                                <a href="" class="btn btn-sm context rounded-0 text-white px-4 py-1 btn-outline-danger"><b>LIFE</b></a>
                            </div> -->
                            <div>
                                <a href="" class="layer-two-item-link">{{ $trending->proverb_text }}</a>
                            </div>
                            <div class="date_added">
                                <small>
                                    <i class="bi bi-clock"></i>
                                    <span>{{ $trending->created_at->diffForHumans() }}</span>
                                </small>
                            </div>
                        </div>
                    </div>
            @endforeach 

        </div>
    </div>
    <div class="col-12 d-flex flex-wrap px-3 pt-3 bg-light">
        <div class="col-12 col-md-6 d-flex justify-content-between align-items-center">
            <span>
                <a href="{{ url('/proverbs') }}" class="btn rounded-0 btn-sm px-3 btn-secondary">All</a>
            </span>

            <span>
                <div class="dropdown">
                    <button class="btn rounded-0 btn-secondary dropdown-toggle btn-sm px-3" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Contexts
                    </button>
                    <ul class="dropdown-menu">
                        @foreach($contexts as $context)
                            <li><a class="dropdown-item" href="{{ url('/proverbs/contexts', ['context' => $context->context_name]) }}">{{ $context->context_name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </span>
        </div>
    </div>
    <div class="d-flex flex-wrap">
        <div class="col-12 col-md-8 mini-gallery px-3">
            @foreach($proverbs as $proverb)
                <div class="mini-gallery-item d-flex flex-column flex-lg-row">
                    <div class="">
                        <img src="{{ asset('Assets/Images/black.avif') }}" alt="">
                    </div>
                    <div class="px-lg-3">
                        <div>
                            <a href="" class="btn py-0 px-2 btn-sm context rounded-0">{{ $proverb->context->context_name }}</a>
                            {{ $proverb->tribe->tribe_name }}
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
                            <a href="{{ url('/proverb', ['slug' => $proverb->slug]) }}" class="px-1 btn btn-sm read-more rounded-0"><b>READ MORE <i class="bi bi-arrow-right"></i></b></a>
                        </div>
                    </div>
                </div>
            @endforeach

            @if($proverbs->count() == 0)
                    <div class="p-4 bg-danger-subtle mt-4">
                        <h6 class="text-danger text-center">There are no proverbs for this particular category currently.</h6>
                    </div>
            @endif

            <div class="pag_container py-2">
                <span  class="pag_link">{{ $proverbs->links() }}</span>
                
            </div>
        </div>
        <div class="col-12 col-md-4 latest pt-2">
            <div>
                <h5>LATEST</h5>
            </div>
            
            <div class="latest-items">
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
            </div>

            <x-partials._signup />
            
        </div>
    </div>
</div>