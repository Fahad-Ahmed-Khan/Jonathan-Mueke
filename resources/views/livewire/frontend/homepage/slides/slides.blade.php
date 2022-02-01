@forelse ($fetchAllInArray['sliders'] as $slider)
    <div class="single-slider">
        <div class="mb-30 trending-top">
            <div class="trend-top-img">
                <img src="storage/{{$slider->cover_image}}" alt="">
                <div class="trend-top-cap">
                    <span class="bgb" data-animation="fadeInUp" data-delay=".2s" data-duration="1000ms">{{ $slider->slider_tag }}</span>
                    <h2><a href="{{ route('more-slide', $slider)}} {{ $slider->slider_title}} {{ rand() }} " data-animation="fadeInUp" data-delay=".4s" data-duration="1000ms">{{ $slider->slider_title }}</a></h2>
                    <p data-animation="fadeInUp" data-delay=".6s" data-duration="1000ms">{{ $slider->description }}</p>
                </div>
            </div>
        </div>
    </div>
@empty
    @include('livewire.frontend.homepage.slides.no-slide-found')
@endforelse
