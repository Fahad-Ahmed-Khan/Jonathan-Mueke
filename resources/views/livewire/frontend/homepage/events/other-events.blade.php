{{-- Success is as dangerous as failure. --}}
@forelse ($fetchAllInArray['other-events-top'] as $event)
    <div class="most-recent-single">
        <div class="most-recent-images">
            <img src="{{ asset('storage/'. $event->cover_image)}}" width="75" height="70" alt="" class="img-responsive">
        </div>
        <div class="most-recent-capt">
            <h4><a href="{{ route('more-events', $event)}} {{ $event->event_title }} {{ rand()}}">{{ Str::limit($event->description, 70) }}</a></h4>
            <p>{{ $event->created_at->diffForHumans() }}</p>
        </div>
    </div>
@empty

@endforelse
{{$fetchAllInArray['other-events-top']->links() }}


