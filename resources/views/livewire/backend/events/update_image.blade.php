<div wire:ignore.self class="shadow modal" id="viewEventImage" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <strong class="modal-title" title="Document" id="exampleModalLabel">
                   You've opened. [ {{ $event_title }} ]
                </strong>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body card-background">
                 <!-- ----session response -------- -->
                @if(session()->has('event_image_updation'))
                    <strong class="text-success"> 👍 {{ session('event_image_updation')}} <i class="fa fa-check"></i></strong>
                @endif
             <!--================-End message response=============-->
             <div wire:offline class="bg-green-300"> offlie</div>
                <div class="row" >
                    <div class="col-lg-6" >
                        <img wire:poll.keep-alive src="{{URL::to('storage/'.$cover_image)}}" class="img-fluid img-responsive" width="100%" height="auto" />
                    </div>
                    <div class="col-lg-6">
                        <form enctype="multipart/form-data" wire:submit.prevent="updateEventImage">
                            <div class="form-group">
                                <input type="hidden" wire:model="slider_id">
                                <label for="cover_image">Update Cover Image</label>
                                <input type="file" id="cover_image" wire:model="cover_image" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-sm btn-success">Save changes</button>
                            </div>
                            <div wire:loading wire:target="updateEventImage" class="text-success">
                                <strong>Uploading Image. Please wait...</strong>
                            </div>
                        </form>
                    </div>
                    <div class="mt-3 col-lg-12">
                        <p class="p-1 bg-success">
                            <strong>Description:</strong><br>
                            {{ $description }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>