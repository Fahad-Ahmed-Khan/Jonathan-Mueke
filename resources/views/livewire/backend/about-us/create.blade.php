
    {{-- Nothing in the world is as soft and yielding as water. --}}
    {{-- =================================CREATE FORM==================== --}}
    <div wire:ignore.self class="shadow modal" id="addAboutUs" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <strong class="modal-title" title="About Us" id="exampleModalLabel">
                        <img src="{{ URL::to('assets/images/cloudUpload.gif')}}" alt="" width="50px" height="auto">
                        Upload Cover Image</strong>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body card-background">
                    <form enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group input-group-sm">
                                    <label for="title">Title/Headline:<span class="text-danger">*</span></label>
                                    <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" value="{{ old('title')}}" wire:model="title" autofocus>
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group input-group-sm">
                                    <label for="image">Image <small class="text-warning">(optional)</small>:</label>
                                    <input class=" @error('image') is-invalid @enderror" type="file" name="image" value="{{ old('image')}}" wire:model="image" autofocus>
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
							 <div class="form-group input-group-sm">
                                    <label for="button">Button:<span class="text-danger">*</span></label>
                                    <input class="form-control @error('button') is-invalid @enderror" type="text" name="button" value="{{ old('button')}}" wire:model="button" autofocus>
                                    @error('button')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            <div class="col-md-12">
                                <div class="form-group input-group-sm">
                                    <label for="description">Description/Content <small class="text-warning">(optional)</small>: </label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" wire:model="description" cols="10" name="description" rows="5" autofocus></textarea>
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
                                        <i class="fa fa-upload"></i> About us  
                                    </button>&nbsp;&nbsp;
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>