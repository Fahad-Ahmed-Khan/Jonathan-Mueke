
    {{-- Nothing in the world is as soft and yielding as water. --}}
    {{-- =================================CREATE FORM==================== --}}
<div wire:ignore.self class="shadow modal" id="editNews" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <strong class="modal-title" title="news" id="exampleModalLabel">
                    <img src="{{ URL::to('assets/images/25451618.jpg')}}" alt="" width="50px" height="auto">
                    Update News</strong>
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
                                <input type="hidden" wire:model="news_id">
                                <label for="news_title">Title:<span class="text-danger">*</span></label>
                                <input class="form-control @error('news_title') is-invalid @enderror" type="text" value="{{ old('news_title')}}" wire:model="news_title" autofocus>
                                @error('news_title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group input-group-sm">
                                <label for="cover_image">Cover Image:<span class="text-danger">*</span></label>
                                <input class="@error('cover_image') is-invalid @enderror" type="file" value="{{ old('cover_image')}}" wire:model="cover_image" autofocus>
                                @error('cover_image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group input-group-sm">
                                <label for="description">Description <span class="text-danger">*</span>: </label>
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