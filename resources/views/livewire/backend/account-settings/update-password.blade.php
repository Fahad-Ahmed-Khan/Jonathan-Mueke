
<div wire:ignore.self class="row">
    <div class="col-lg-8 offset-lg-2">
        <div class="p-2 text-white pull-right">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong><i class="fa fa-exclamation-triangle"></i>Verification Required!</strong> You will verify account by clicking verification link sent to your email after Password change. 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        
        <div wire:ignore.self class="card card-body">
            <form enctype="multipart/form-data" autocomplete="off">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group input-group-sm">
                            <label for="current_password">Current Password <span class="text-danger">*</span></label>
                            <input class="form-control @error('current_password') is-invalid @enderror" placeholder="current_password" type="password" wire:model="current_password" autofocus>
                            @error('current_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="form-group input-group-sm">
                            <label for="password">New Password <span class="text-danger">*</span></label>
                            <input class="form-control @error('password') is-invalid @enderror" placeholder="password" type="password" value="{{ old('password')}}" wire:model="password" autofocus>
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group input-group-sm">
                            <label for="password_confirmation">Password Again <span class="text-danger">*</span></label>
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
                            <button class="btn btn-success btn-sm border-radius" wire:click.prevent="updatePassword" type="submit">
                                <i class="fa fa-paper-plane"></i> submit changes  
                            </button>&nbsp;&nbsp;
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>