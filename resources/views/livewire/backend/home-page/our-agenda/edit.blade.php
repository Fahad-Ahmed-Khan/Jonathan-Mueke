
    {{-- Nothing in the world is as soft and yielding as water. --}}
    {{-- =================================CREATE FORM==================== --}}
    <div wire:ignore.self class="shadow modal" id="editDownload" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <strong class="modal-title" title="Document" id="exampleModalLabel">
                        <img src="storage/{{$cover_image}}" alt="" class="rounded-circle img-responsive" width="50" height="50">
                        Update Agenda</strong>
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
                                    <input type="hidden" wire:model="agenda_id">
                                    <label for="agenda_title">Agenda Title:<span class="text-danger">*</span></label>
                                    <input class="form-control @error('agenda_title') is-invalid @enderror" type="text" value="{{ old('agenda_title')}}" wire:model="agenda_title" autofocus>
                                    @error('agenda_title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            {{-- <div class="col-md-4">
                                <div class="form-group ">
                                    <label for="cover_image">Cover Image: <span class="text-danger">*</span></label>
                                    <input class=" @error('cover_image') is-invalid @enderror" type="file" value="{{ old('cover_image')}}" wire:model="cover_image" autofocus>
                                    @error('cover_image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div> --}}
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
                                        <i class="fa fa-upload"></i> Update Agenda
                                    </button>&nbsp;&nbsp;
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>