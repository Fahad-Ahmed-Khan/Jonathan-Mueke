{{-- Because she competes with no one, no one can compete with her. --}}
<div wire:ignore.self class="modal fade" style="background-color: #006b36;" id="engage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 2px solid #006b36;border-radius: 10px;">
                <h5 class="modal-title" id="exampleModalLongTitle">📢 Request a Shout-out🖐️</h5>
                
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-center">
                    Please fill out this form to request a greeting from Jonathan Mueke or the Team
                </p>
                <div class="row">
                    <div class="p-1 col-lg-10 offset-lg-1">
                        <div class="bg-white shadow" style="border-radius: 30px">
                            @if (session()->has('sender_request'))
                               @include('livewire.frontend.modal-forms.thank-you-message') 
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <form autocomplete="off" enctype="multipart/form-data">
                        <div class="mt-10">
                            <input type="text" class="bg-light form-control mb-2" placeholder="Please Enter your request Title:"
                                wire:model="shoutout_title"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Shout out requested'"
                                class="single-input">
                                @error('shoutout_title')
                                    <strong class="p-2 text-white rounded bg-danger">{{ $message }}</strong>
                                @enderror
                        </div>
                        <div class="mt-10 input-group-icon">
                            <div class="icon"></div>
                            <input type="text" class="bg-light form-control mt-2 mb-2" placeholder="Your Name"
                                wire:model="name"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Requester Name'"
                                class="single-input">
                                @error('name')
                                    <strong class="p-2 text-white rounded bg-danger">{{ $message }}</strong>
                                @enderror
                        </div>
                        <div class="mt-10 input-group-icon">
                            <div class="icon"></div>
                            <input type="email" class="bg-light form-control mt-2 mb-2" placeholder="Your Email"
                                wire:model="email"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email'"
                                class="single-input">
                                @error('email')
                                    <strong class="p-2 text-white rounded bg-danger">{{ $message }}</strong>
                                @enderror
                        </div>
                        <div class="mt-10 input-group-icon">
                            <div class="icon"></div>
                            <input type="text" class="bg-light form-control mb-2" placeholder="Your phone"
                                wire:model="phone"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your phone'"
                                class="single-input">
                                @error('phone')
                                    <strong class="p-2 text-white rounded bg-danger">{{ $message }}</strong>
                                @enderror
                        </div>
                        <div class="mt-10">
                            <textarea class="single-textarea bg-light form-control mb-2" placeholder="Message" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Message'" wire:model="description"></textarea>
                                @error('description')
                                    <strong class="p-2 text-white rounded bg-danger">{{ $message }}</strong>
                                @enderror
                        </div>
                        <div class="mt-10">
                            <button type="submit" class="btn btn-success" wire:click.prevent="store"><i class="fa fa-paper-plane"></i> SUBMIT REQUEST</button>
                        </div>
                        <div wire:loading wire:target="store" class="text-success">
                           <!-- <img src="{{URL::to('/backend/assets/images/green2Loading.gif')}}" width="50" height="50" class="rounded-circle" height="auto" alt="">
                            <strong>Sending Email. Please wait...</strong>-->
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="genric-btn danger small" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>