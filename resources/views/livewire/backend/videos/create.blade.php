
    {{-- Nothing in the world is as soft and yielding as water. --}}
    {{-- =================================CREATE FORM==================== --}}
    <div wire:ignore.self class="shadow modal" id="addVideo" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <strong class="modal-title" title="Video" id="exampleModalLabel">
                        Video Settings</strong>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    @include('livewire.frontend.modal-forms.message')
                </div>
                <div class="modal-body card-background">
                    <form enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group input-group-sm">
                                    <label for="video_title">Video Title:<span class="text-warning">(optional)</span></label>
                                    <input class="form-control @error('video_title') is-invalid @enderror" type="text" value="{{ old('video_title')}}" wire:model="video_title" autofocus>
                                    @error('video_title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="form-group input-group-sm">
                                    <label for="youtube_link">Embed Link (youtube):<span class="text-danger">*</span></label>
                                    <input class="form-control @error('youtube_link') is-invalid @enderror" type="link" value="{{ old('youtube_link')}}" wire:model="youtube_link" autofocus>
                                    @error('youtube_link')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group input-group-sm">
                                    <label for="description">Brief Description:<span class="text-info">( Optional )</span></label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" wire:model="description" autofocus></textarea>
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