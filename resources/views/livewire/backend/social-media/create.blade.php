
    {{-- Nothing in the world is as soft and yielding as water. --}}
    {{-- =================================CREATE FORM==================== --}}
    <div wire:ignore.self class="shadow modal" id="addSocialMedia" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <strong class="modal-title" title="Social Media" id="exampleModalLabel">
                        <img src="{{ URL::to('assets/images/25451618.jpg')}}" alt="" width="50px" height="auto">
                        Who Is Mueke</strong>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body card-background">
                    <form enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group input-group-sm">
                                    <label for="header">Header:<span class="text-danger">*</span></label>
                                    <input class="form-control @error('header') is-invalid @enderror" type="text" name="header" value="{{ old('header')}}" wire:model="header" autofocus>
                                    @error('header')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group input-group-sm">
                                    <label for="description">Description:<span class="text-danger">*</span></label>
                                    <input class="form-control @error('description') is-invalid @enderror" type="text" name="description" value="{{ old('description')}}" wire:model="description" autofocus>
                                    @error('description')
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
                             <div class="col-lg-6">
                                <div class="form-group input-group-sm">
                                    <label for="learn">Learn More:<span class="text-danger">*</span></label>
                                    <input class="form-control @error('learn') is-invalid @enderror" type="text" name="learn" value="{{ old('learn')}}" wire:model="learn" autofocus>
                                    @error('learn')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 offset-lg-3">
                                <div class="text-right form-group input-group-sm">
                                    <button class="btn btn-success btn-sm border-radius" wire:click.prevent="store" type="submit">
                                        <i class="fa fa-upload"></i> Submit
                                    </button>&nbsp;&nbsp;
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>