<section class="cta-3__area position-relative" data-background="{{ asset('frontend/assets/imgs/cta-3/cta-3_bg.png') }}">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <div class="cta-3__content pt-105 pb-105">
                    <h6 class="cta-3__content-subtitle">{{ $cta->name }}</h6>
                    <h2 class="cta-3__content-title">{{ $cta->title }}</h2>
                    <h6 class="cta-3__content-dollar mb-30">{!! $cta->description !!}</h6>

                    <div class="cta-3__content-video d-flex">
                        <a href="{{ $cta->btn_url }}" class="rr-btn btn-hover-white">{{ $cta->btn }}</a>
                        <a href="{{ $cta->video_url }}" class="popup-video zooming cta-3__content-video-button" data-effect="mfp-move-from-top vertical-middle">
                            <svg width="26" height="28" viewBox="0 0 26 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#filter0_d_836_9)">
                                <path d="M19.5 10.134C20.1667 10.5189 20.1667 11.4811 19.5 11.866L7.5 18.7942C6.83333 19.1791 6 18.698 6 17.9282L6 4.0718C6 3.302 6.83333 2.82087 7.5 3.20577L19.5 10.134Z" fill="#FF3D00"/>
                                </g>
                                <defs>
                                <filter id="filter0_d_836_9" x="0" y="0.0703125" width="26" height="27.8594" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                <feOffset dy="3"/>
                                <feGaussianBlur stdDeviation="3"/>
                                <feComposite in2="hardAlpha" operator="out"/>
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_836_9"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_836_9" result="shape"/>
                                </filter>
                                </defs>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <div class="cta-3__media">
                    <img class="upDown" src="{{ $cta->image }}" alt="{{ $cta->title }}">
                </div>
            </div>
        </div>
    </div>
</section>
