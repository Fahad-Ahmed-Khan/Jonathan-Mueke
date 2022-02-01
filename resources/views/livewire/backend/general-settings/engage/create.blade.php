
    {{-- Nothing in the world is as soft and yielding as water. --}}
    {{-- =================================CREATE FORM==================== --}}
    <div wire:ignore.self class="shadow modal" id="addRequest" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <strong class="modal-title" title="Donor" id="exampleModalLabel">
                        {{-- <img src="{{ URL::to('backend/assets/images/25451618.jpg')}}" alt="" width="50px" height="auto"> --}}
                        Shoutout Settings</strong>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    @include('livewire.frontend.modal-forms.message')
                </div>
                <div class="modal-body card-background">
                    <form enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group input-group-sm">
                                    <label for="shoutout_title">ShoutOut Requested:<span class="text-danger">*</span></label>
                                    <input class="form-control @error('shoutout_title') is-invalid @enderror" type="text" value="{{ old('shoutout_title')}}" wire:model="shoutout_title" autofocus>
                                    @error('shoutout_title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group input-group-sm">
                                    <label for="name">Full Name:<span class="text-danger">*</span></label>
                                    <input class="form-control @error('name') is-invalid @enderror" type="text" value="{{ old('name')}}" wire:model="name" autofocus>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group input-group-sm">
                                    <label for="email">Email:<span class="text-danger">*</span></label>
                                    <input class="form-control @error('email') is-invalid @enderror" type="email" value="{{ old('email')}}" wire:model="email" autofocus>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group input-group-sm">
                                    <label for="phone">Phone:<span class="text-danger">*</span></label>
                                    <input class="form-control @error('phone') is-invalid @enderror" type="text" value="{{ old('phone')}}" wire:model="phone" autofocus>
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group input-group-sm">
                                    <label for="description">Describe your Request:<span class="text-danger">*</span></label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" 
                                                wire:model="description" 
                                                autofocus
                                                cols="10"
                                                rows="5"
                                                ></textarea>
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
                            <div wire:loading.delay wire:target="store">
                                <img src="{{URL::to('backend/assets/images/loading.gif')}}" width="100" height="auto" class="rounded-circle" height="auto" alt="">
                                <strong class="text-success">Sending request. Please wait for email Confirmation ...</strong>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>