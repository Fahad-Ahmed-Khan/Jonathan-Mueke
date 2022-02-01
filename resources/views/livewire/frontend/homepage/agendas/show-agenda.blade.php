@section('title', $agenda->agenda_title)

<div class="row ">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
        <div class="most-recent-area" style="height: auto !important;padding:2px 0 !important;">
            <div class="mb-10 most-recent">
                <div class="most-recent-img" style="height: auto !important;border: none !important;">
                    <img src="{{ asset('storage/'.$agenda->cover_image)}}"  alt="" height="200" width="100%" style="object-fit: scale-down; background-size: 100% 100%;z-index: 0;">
                    <div class="text-center most-recent-cap">
                        <h3 class="text-white" style="background-color: rgba(0,0,0,0.5);">
                            <a href="{{ route('more-agenda', $agenda) }} {{ $agenda->agenda_title}} {{ rand() }}" style="font-weight: bolder;">{{ $agenda->agenda_title }}</a><br>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <p class="p-5">
            {{ Str::limit( $agenda->description, 100)}}
            <br>
            
            <a href="{{ route('more-agenda', $agenda) }} {{ $agenda->agenda_title}} {{ rand() }}" 
                style="background-color: #006b36 !important;" class="circle genric-btn small" title="{{ $agenda->agenda_title}}"><i class="fa fa-hand-point-right"></i> LEARN MORE</a>

        </p>
    </div>  
</div>