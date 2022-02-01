
    {{-- Nothing in the world is as soft and yielding as water. --}}
    {{-- =================================CREATE FORM==================== --}}
    <div wire:ignore.self class="shadow modal" id="addSlider" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="modal-title" title="Document" id="exampleModalLabel">
                        <img src="{{ URL::to('assets/images/cloudUpload.gif')}}" alt="" width="70px" height="auto">
                        Add Homepage Slider</span>
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
                                    <label for="slider_title">Slider Title:<span class="text-danger">*</span></label>
                                    <input class="form-control @error('slider_title') is-invalid @enderror" type="text" value="{{ old('slider_title')}}" wire:model="slider_title" autofocus>
                                    @error('slider_title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
							<div class="form-group">
								<input class="form-control" type="file" name="image[]" multiple>
							</div>
                            <div class="col-lg-6">
                                <div class="form-group input-group-sm">
                                    <label for="slider_tag">Slider Tag:</label>
                                    <input class="form-control @error('slider_tag') is-invalid @enderror" type="text" value="{{ old('slider_tag')}}" wire:model="slider_tag" autofocus>
                                    @error('slider_tag')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label for="cover_image">Cover Image: <span class="text-danger">*</span></label>
                                    <input class=" @error('cover_image') is-invalid @enderror" type="file" value="{{ old('cover_image')}}" wire:model="cover_image" autofocus>
                                    @error('cover_image')
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