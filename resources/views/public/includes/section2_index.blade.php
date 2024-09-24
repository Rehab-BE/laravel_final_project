<section class="featured-section">
            <div class="container">
                <div class="row justify-content-center">
                    @foreach($topics as $topic)
                    <div class="col-lg-4 col-12 mb-4 mb-lg-0">
                        <div class="custom-block bg-white shadow-lg">
                            <a href="{{route('topics.show',$topic->id)}}">
                                <div class="d-flex">
                                    <div>
                                        <h5 class="mb-2">{{$topic->title}}</h5>

                                        <p class="mb-0">{{$topic->content}}</p>
                                    </div>

                                    <span class="badge bg-design rounded-pill ms-auto">14</span>
                                </div>

                                <img src="{{ asset('assets_admin/test_image/topic/' . $topic->image) }}" class="custom-block-image img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>