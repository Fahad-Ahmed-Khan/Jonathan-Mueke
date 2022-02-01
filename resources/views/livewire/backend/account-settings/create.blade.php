<div wire:ignore.self class="shadow modal" id="addUser" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <strong class="modal-title" id="exampleModalLabel"><i class="fa fa-user-plus"></i> New user</strong>
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
                        <div class="col-md-7">
                            <div class="form-group input-group-sm">
                                <label for="phone_number">Phone Number <span class="text-danger">*</span></label>
                                <input class="form-control @error('phone_number') is-invalid @enderror" placeholder="phone_number"  type="text" value="{{ old('phone_number')}}" wire:model="phone_number" autofocus>
                                @error('phone_number')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-5" >
                            {{-- @if (isset($cover_image))
                                <img wire:ignore src="{{ $cover_image->temporaryUrl() }}" class="rounded-circle" width="100" height="100">
                            @endif --}}
                            <div class="form-group input-group-sm">
                                <label for="cover_image">Cover Image:</label>
                                <input class="form-control @error('cover_image') is-invalid @enderror" type="file" wire:model="cover_image" autofocus>
                                @error('cover_image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <div wire:loading wire:target="cover_image" class="text-success"><small><strong>Uploading...</strong></small></div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group input-group-sm">
                                <label for="phone_number">Assign Role <span class="text-danger">*</span></label>
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
                        <div class="col-md-6">
                            <div class="form-group input-group-sm">
                                <label for="password">Password <span class="text-danger">*</span></label>
                                <input class="form-control @error('password') is-invalid @enderror" placeholder="password "  type="password" value="{{ old('password')}}" wire:model="password" autofocus>
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group input-group-sm">
                                <label for="password_confirmation">Password Again</label>
                                <input class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="password_confirmation "  type="password" value="{{ old('password_confirmation')}}" wire:model="password_confirmation" autofocus>
                                @error('password_confirmation')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <br/><br/>
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <div class="text-right form-group input-group-sm">
                                <button class="btn btn-success btn-sm border-radius" wire:click.prevent="store">
                                    <i class="fa fa-paper-plane"></i> submit user  
                                </button>
                            </div>
                            <div wire:loading wire:target="store" class="text-success">
                                <img src="{{URL::to('backend/assets/images/green2Loading.gif')}}" width="50" height="50" class="rounded-circle" height="auto" alt="">
                                <strong>sending Email. Please wait...</strong>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>