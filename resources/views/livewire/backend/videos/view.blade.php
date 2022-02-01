<div wire:ignore.self class="shadow modal" id="viewVideo" tabindex="-1" role="dialog"
aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
        <input type="hidden" wire:model="video_id">
        <div class="modal-header">
            <strong class="modal-title" title="Video" id="exampleModalLabel">
               <i class="fa fa-youtube"></i> Video:: {{  $video_title }}</strong>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            @include('livewire.frontend.modal-forms.message')
        </div>
        <div class="modal-body card-background">
            <div wire:loading.delay wire:target="view({{$video_id}})">
                <img src="{{URL::to('backend/assets/images/processing.gif')}}" width="100" height="auto" class="rounded-circle" height="auto" alt="">
            </div>
            <iframe width="100%" 
                    height="315" 
                    src="{{$youtube_link}}" 
                    title="YouTube video player" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
            </iframe>
        </div>
    </div>
</div>
</div>














