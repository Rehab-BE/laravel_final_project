<section class="section-padding section-bg">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12">
                <h3 class="mb-4">Trending Topics</h3>
            </div>
            @foreach($topics2 as $topic)
            <div class="col-lg-6 col-md-6 col-12 mt-3 mb-4 mb-lg-0">
                <div class="custom-block bg-white shadow-lg">
                    <a href="{{route('topics.show',$topic->id)}}">
                        <div class="d-flex">
                            <div>
                                <h5 class="mb-2">{{$topic->title}}</h5>

                                <p class="mb-0">{{$topic->content}}</p>
                            </div>

                            <span class="badge bg-finance rounded-pill ms-auto">30</span>
                        </div>

                        <img src="{{asset('assets_admin/test_image/topic/' .'/'. $topic->image)}}" class="custom-block-image img-fluid" alt="">
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>