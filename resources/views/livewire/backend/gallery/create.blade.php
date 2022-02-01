
{{-- Nothing in the world is as soft and yielding as water. --}}
{{-- =================================CREATE FORM==================== --}}
<div wire:ignore.self class="shadow modal" id="addSlider" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                    <span class="modal-title" title="Document" id="exampleModalLabel">
                        <img src="{{ URL::to('assets/images/cloudUpload.gif')}}" alt="" width="70px" height="auto">
                        Create Album</span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body card-background">
                <form enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group input-group-sm">
                                <label for="slider_title">Album Title:<span class="text-danger">*</span></label>
                                <input class="form-control @error('title') is-invalid @enderror" type="text" value="{{ old('title')}}" wire:model="title" autofocus>
                                @error('title')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label for="cover_image">Images: <span class="text-danger">*</span></label>
                                <input type="file" class="form-control" wire:model="images" multiple>
                                @error('images')
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
                                <button class="btn btn-success btn-sm border-radius" wire:click.prevent="store" type="submit">
                                    <i class="fa fa-upload"></i> Create Album
                                </button>&nbsp;&nbsp;
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
