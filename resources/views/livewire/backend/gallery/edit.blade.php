
    {{-- Nothing in the world is as soft and yielding as water. --}}
    {{-- =================================CREATE FORM==================== --}}
    <div wire:ignore.self class="shadow modal" id="editSlider" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <strong class="modal-title" title="Document" id="exampleModalLabel">
                        <img src="storage/{{$cover_image}}" alt="" class="rounded-circle img-responsive" width="50" height="50">
                        Update Slider</strong>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body card-background">
                    <form enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="form-group input-group-sm">
                                    <input type="hidden" wire:model="slider_id">
                                    <label for="slider_title">Slider Title:<span class="text-danger">*</span></label>
                                    <input class="form-control @error('slider_title') is-invalid @enderror" type="text" value="{{ old('slider_title')}}" wire:model="slider_title" autofocus>
                                    @error('slider_title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group input-group-sm">
                                    <label for="slider_tag">Slider Tag:</label>
                                    <input class="form-control @error('slider_tag') is-invalid @enderror" type="text" value="{{ old('slider_tag')}}" wire:model="slider_tag" autofocus>
                                    @error('slider_tag')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group input-group-sm">
                                    <label for="description">Description <small class="text-warning">(optional)</small>: </label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" wire:model="description" cols="10" rows="5" autofocus></textarea>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 offset-lg-3">
                                <div class="text-right form-group input-group-sm">
                                    <button class="btn btn-success btn-sm border-radius" wire:click.prevent="update" type="submit">
                                        <i class="fa fa-upload"></i> Add Slider  
                                    </button>&nbsp;&nbsp;
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>