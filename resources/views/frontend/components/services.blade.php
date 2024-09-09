<section class="latest-feature2__area section-space-top pb-50">
    <div class="container">
        <div class="row mb-minus-30">

            <div class="col-xl-6 col-lg-6">
                <div class="latest-feature2__content mb-30">
                    <h6 class="latest-feature2__content-sub-title">Features</h6>
                    <h2 class="latest-feature2__content-title">Premier One-Stop Custom Print Solutions</h2>
                    <div class="latest-feature2__content-description">
                        <p>There are many variations of passages orem psum available but the majority have suffered alteration in some form by injected humour or randomised words which don't look even.</p>
                    </div>
                    <div class="latest-feature2__content-btn">
                        <a href="service-details.html" class="rr-btn">View All Service</a>
                    </div>
                </div>
            </div>

            @foreach($services as $service)
            <div class="col-xl-3 col-lg-6 col-md-6">
                <div class="latest-feature2__media mb-30 ">
                    <div class="overlay"></div>
                    <span class="number-top">{{ $service->index }}</span>
                    <div class="overlay-heading"><a href="{{ route('service-detail.show', $service->slug) }}"><h6>{{ $service->title }}</h6></a></div>
                    <div><img src="{{ asset($service->main_image)}}" alt="{{ $service->title }}"></div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
