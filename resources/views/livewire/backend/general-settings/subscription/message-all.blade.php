<div wire:ignore.self class="shadow modal" id="messageAll" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <strong class="modal-title" title="Parish" id="exampleModalLabel"><i class="fa fa-edit"></i> Sent Message to: {{ $email }}</strong>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body card-background">
                    @if (session()->has('subscriber_updation'))
                        <div class="alert alert-success">
                            {{ session('subscriber_updation')}}
                        </div>
                    @endif
                <form enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    <div class="row">
                       
                        <div class="col-lg-12">
                            <div class="form-group input-group-sm">
                                <label for="name">SUBJECT: <span class="text-danger">*</span></label>
                                <input class="form-control @error('subject') is-invalid @enderror" placeholder="subject" type="text" value="{{ old('subject')}}" wire:model="subject" autofocus>
                                @error('subject')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group input-group-sm">
                                <label for="email">EMAIL TO: <span class="text-danger">*</span></label>
                                <input type="checkbox" wire:model="all"> All Subscribers
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                                <span class="pl-2 text-bold text-warning">Or</span>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group input-group-sm">
                                <select class="select2 input-group-sm @error('email')  is-invalid @enderror" multiple="multiple" data-placeholder="Select subscribers" data-dropdown-css-class="select2-purple" style="width: 100%;">
                                        wire:model="email" autofocus multiple>
                                        <option value="">--Select Subscriber--</option>
                                        @foreach ($showAll['subscribers']  as $subscriber)
                                            <option value="{{ $subscriber->email }}">{{ $subscriber->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                        </div>
                        <div class="col-lg-12" wire:ignore>
                            <div class="form-group input-group-sm">
                                <label for="composeAll">Componse Message: <span class="text-danger">*</span></label>
                                <textarea id="composeAll" cols="30" rows="10"
                                    class="form-control"
                                    value="{{ old('email')}}" 
                                    wire:model="message" autofocus>
                                </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <div class="text-right form-group input-group-sm">
                                <button class="btn btn-success btn-sm border-radius" type="submit" wire:click.prevent="sendEmail">
                                    <i class="fa fa-paper-plane"></i> Send 
                                </button>&nbsp;&nbsp;
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>