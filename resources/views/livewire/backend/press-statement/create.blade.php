
    {{-- Nothing in the world is as soft and yielding as water. --}}
    {{-- =================================CREATE FORM==================== --}}
    <div wire:ignore.self class="shadow modal" id="addPress" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <strong class="modal-title" title="press" id="exampleModalLabel">
                        <img src="{{ URL::to('assets/images/25451618.jpg')}}" alt="" width="50px" height="auto">
                        Press Statement Settings</strong>
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
                                    <label for="press_title">Press Title:<span class="text-danger">*</span></label>
                                    <input class="form-control @error('press_title') is-invalid @enderror" type="text" value="{{ old('press_title')}}" wire:model="press_title" autofocus>
                                    @error('press_title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group input-group-sm">
                                    <label for="cover_image">Press File:<span class="text-danger">*</span></label>
                                    <input class="@error('press_file') is-invalid @enderror" type="file" value="{{ old('press_file')}}" wire:model="press_file" autofocus>
                                    @error('press_file')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group input-group-sm">
                                    <label for="image_link">Add Link to Images:<span class="text-warning">optional</span></label>
                                    <input class="form-control @error('image_link') is-invalid @enderror" type="text" value="{{ old('image_link')}}" wire:model="image_link" autofocus>
                                    @error('image_link')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group input-group-sm">
                                    <label for="description">Press Content <span class="text-danger">*</span>: </label>
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
                                    <button class="btn btn-success btn-sm border-radius" wire:click.prevent="validateDocument" type="submit">
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