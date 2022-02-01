{{-- If your happiness depends on money, you will never be happy with yourself. --}}
<div class="most-recent-area">
    <!-- Section Tittle -->
    <div class="mb-20 small-tittle">
        <h4>Recent Events</h4> 
    </div>
    <!-- Details -->
    @forelse ($fetchAllInArray['recent-events'] as $event)
        <div class="mb-40 most-recent">
            <div class="most-recent-img">
                <img src="{{ asset('storage/'.$event->cover_image)}}" alt="">
                <div class="most-recent-cap">
                    <h4 class="text-white"><a href="{{ route('more-events', $event) }}{{ $event->event_title}}{{rand()}}">{{ $event->event_title }}</a></h4>
                    <p>{{ $event->created_at->diffForHumans() }}</p>
                </div>
            </div>
        </div>
    @empty
        @include('livewire.frontend.homepage.events.no-events')
    @endforelse
        @include('livewire.frontend.homepage.events.other-events')
</div>