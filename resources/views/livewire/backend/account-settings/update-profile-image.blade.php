<div wire:ignore.self class="shadow modal" id="updateProfileImage" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <strong class="modal-title" id="exampleModalLabel"><i class="fa fa-user-plus"></i> [ {{ Auth::user()->name }} ] </strong>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body card-background">
                @if (session()->has('image_updation'))
                    <span><strong class="text-success">{{ session('image_updation')}} <i class="fa fa-check"></i></strong></span>
                @endif
                <form enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <img src="{{ URL::to('storage/'.Auth::user()->cover_image)}}" class="rounded-circle" width="50" height="50" alt="">
                            <div class="form-group input-group-sm">
                                <input type="hidden" wire:modal="user_id">
                                <label for="cover_image">Upload Profile</label>
                                <input class="@error('cover_image') is-invalid @enderror" type="file" 
                                        wire:model.lazy="cover_image" 
                                        autofocus>
                                @error('cover_image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <br/><br/>
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <div class="text-right form-group input-group-sm">
                                <button class="btn btn-success btn-sm border-radius" 
                                        wire:click.prevent="updateImage"
                                        wire:loading.attr="disabled" 
                                        type="submit">
                                    <i class="fa fa-paper-plane"></i> submit update  
                                </button>&nbsp;&nbsp;
                                    <div wire:loading
                                        wire:target="cover_image" 
                                        class="text-info">
                                        <strong>Uploading ...</strong>
                                    </div>
                            </div>
                        </div>
                        <!-- ========================== -->
                        <div wire:loading 
                            wire:target="updateImage" 
                            class="text-success">
                            <img src="{{URL::to('backend/assets/images/green2Loading.gif')}}" width="50" height="50" class="rounded-circle" height="auto" alt="">
                            <strong>sending Email. Please wait...</strong>
                        </div>
                        <!-- ========================== -->
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>