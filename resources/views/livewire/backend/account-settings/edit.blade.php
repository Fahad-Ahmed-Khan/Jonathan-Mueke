<div wire:ignore.self class="shadow modal" id="editUser" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <strong class="modal-title" id="exampleModalLabel">
                    Update [{{ $name }}] </strong>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body card-background">
                @if (session()->has('image_updation'))
                    <span><strong class="text-success">{{ session('profile_updation')}} <i class="fa fa-check"></i></strong></span>
                @endif
                <form enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group input-group-sm">
                                <input type="hidden" wire:model="user_id">
                                <label for="name">Name <span class="text-danger">*</span></label>
                                <input class="form-control @error('name') is-invalid @enderror" placeholder="name" type="text" value="{{ old('name')}}" wire:model="name" autofocus>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group input-group-sm">
                                <label for="email">Email <span class="text-danger">*</span></label>
                                <input class="form-control @error('email') is-invalid @enderror" placeholder="email address "  type="email" value="{{ old('email')}}" wire:model="email" autofocus>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group input-group-sm">
                                <label for="phone_number">Phone Number <span class="text-danger">*</span></label>
                                <input class="form-control @error('phone_number') is-invalid @enderror" placeholder="phone_number"  type="text" value="{{ old('phone_number')}}" wire:model="phone_number" autofocus>
                                @error('phone_number')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group input-group-sm">
                                <label for="phone_number">Update Role <span class="text-danger">*</span></label>
                                <select class="form-control @error('role') is-invalid @enderror" wire:model="role" autofocus>
                                    <option value="">--Choose role--</option>
                                    <option value="user">User</option>
                                    <option value="manager">Manager</option>
                                    <option value="admin">Admin</option>
                                </select>
                                @error('role')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <br/><br/>
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <div class="text-right form-group input-group-sm">
                                <button class="btn btn-success btn-sm border-radius" wire:click.prevent="update">
                                    <i class="fa fa-paper-plane"></i> update changes  
                                </button>&nbsp;&nbsp;
                            </div>
                        </div>
                        <div wire:loading 
                            wire:target="update" 
                            class="text-success">
                            <strong>
                                <img src="{{ URL::to('backend/assets/images/loader.gif')}}" class="rounded-circle" width="30" height="30" alt="">
                                Updating changes. Please wait for Email notification...</strong>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>