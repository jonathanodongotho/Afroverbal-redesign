<div>
    <div class="intro container-fluid d-flex justify-content-center flex-column flex-wrap">
    @foreach($featureds as $featured)
        <div class="intro-layer-one d-flex justify-content-between flex-column flex-md-row">
            <div class="col-12 col-md-6">
                <img src="Assets/Images/black.avif" alt="">
            </div>
            <div class="col-12 col-md-6 px-0 px-md-4">
                <div class="d-flex justify-content-between">
                    <a href="" class="btn context border-0 rounded-0 px-4 py-1">{{ $featured->context->context_name }}</a>
                    <a href="" class="btn tribe border-0 rounded-0 px-4 py-1">{{ $featured->tribe->tribe_name }}</a>
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
            @foreach($trendings as $trending) 
                    <div class="layer-two-item col-3">
                        <div class="">
                            <img src="Assets/Images/black.avif" alt="">
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
                            <a href="" class="btn py-0 px-2 btn-sm context rounded-0">{{ $proverb->context->context_name }}</a>
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
                            <a href="{{ url('proverbs', ['slug' => $proverb->slug]) }}" class="px-1 btn btn-sm read-more rounded-0"><b>READ MORE <i class="bi bi-arrow-right"></i></b></a>
                        </div>
                    </div>
                </div>
            @endforeach
            
            <div class="text-secondary py-2">
                <a href="{{ url('/proverbs') }}" class="nav-link bg-secondary-subtle p-2">View all</a>
            </div>
            {{-- <div class="pag_container py-2">
                <a href="{{ url('/proverbs') }}" class="pag_link nav-link bg-secondary-subtle">{{ $proverbs->links() }}</a>
            </div> --}}

        </div>
        <div class="col-12 col-md-4 latest pt-2">
            <div>
                <h5>LATEST</h5>
            </div>
            <div class="latest-items">
                @if(isset($late))
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
                @endif
            </div>
            <div class="signup p-3">
                <div>
                    <small class="text-danger">Sign up with us to get notified about our latest posts</small>
                </div>
                <form class="d-flex flex-column" role="search">
                    <div class="py-1">
                        <label for="name">Name</label>
                        <input class="form-control search" name="name" type="text" placeholder="Enter your name...">
                    </div>
                    <div class="py-1">
                        <label for="email">Email</label>
                        <input class="form-control search" name="emai" type="email" placeholder="Enter your email address...">
                    </div>
                    <div class="py-1">
                        <button type="submit" class="btn bg-primary btn-sm text-light">Sign up</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>