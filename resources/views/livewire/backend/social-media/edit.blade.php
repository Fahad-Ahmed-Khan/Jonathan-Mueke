
    {{-- Nothing in the world is as soft and yielding as water. --}}
    {{-- =================================CREATE FORM==================== --}}
    <div wire:ignore.self class="shadow modal" id="editSocialMedia" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <strong class="modal-title" title="Edit Social Media" id="exampleModalLabel">
                        <img src="{{ URL::to('assets/images/25451618.jpg')}}" alt="" width="50px" height="auto">
                        Update Social Media</strong>
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
                                    <input type="hidden" wire:model="socialMedia_id">
                                    <label for="name">Name:<span class="text-danger">*</span></label>
                                    <input class="form-control @error('name') is-invalid @enderror" type="text" value="{{ old('name')}}" wire:model="name" autofocus>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
        
                            <div class="col-lg-12">
                                <div class="form-group input-group-sm">
                                    <label for="media_link">URL/Media Link: </label>
                                    <input class="form-control @error('media_link') is-invalid @enderror" type="text" wire:model="media_link" autofocus>
                                    @error('media_link')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 offset-lg-3">
                                <div class="text-right form-group input-group-sm">
                                    <button class="btn btn-success btn-sm border-radius" wire:click.prevent="update" type="submit">
                                        <i class="fa fa-upload"></i> update changes
                                    </button>&nbsp;&nbsp;
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>