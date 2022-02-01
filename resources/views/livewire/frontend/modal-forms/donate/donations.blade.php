{{-- Do your work, then step back. --}}

<div wire:ignore.self class="modal fade" style="background-color: #006b36;" id="donate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Support This Work</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="p-1 col-lg-10 offset-lg-1">
                        <div class="bg-white shadow" style="border-radius: 30px">
                            @if (session()->has('donation_message'))
                               @include('livewire.frontend.modal-forms.donate.thank-you-message') 
                            @endif
                        </div>
                    </div>
                </div>
                <p>
                    Get involved in our fight for change by supporting us.
                    Together, let’s partner to achieve the goal of a better society, 
                    and to create a world that we can proudly leave our children with.
                </p>
                <div class="col-lg-12">
                    <form autocomplete="off" action="{{ route('lipa')}}" method="post">
						@csrf
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mt-10 input-group-icon mb-3"> 
                                    <div class="icon"></div>
                                    <input type="text" name="name" placeholder="Donor Full Name *"
                                        wire:model="name"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Donar Name *'"
                                        class="single-input  @error('name')
                                            border border-danger
                                        @enderror" />
                                        @error('name')
                                            <strong class="p-2 text-white rounded bg-danger">{{ $message }} <i class="fa fa-exclamation-triangle"></i></strong>
                                        @enderror
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mt-10 input-group-icon">
                                    <div class="icon"></div>
                                    <input type="text" name="phone" placeholder="Donor Phone"
                                        wire:model="phone"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Donor Phone'"
                                        class="single-input @error('phone')
                                            border border-danger
                                        @enderror" />
                                        @error('phone')
                                            <strong class="p-2 text-white rounded bg-danger">{{ $message }} <i class="fa fa-exclamation-triangle"></i></strong>
                                        @enderror
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mt-10 input-group-icon">
                                    <div class="icon"></div>
                                    <input type="email" name="email" placeholder="Donor Email"
                                        wire:model="email"
                                        class="single-input @error('email') border border-danger @enderror">
                                        @error('email')
                                        <strong class="p-2 text-white rounded bg-danger">{{ $message }} <i class="fa fa-exclamation-triangle"></i></strong>
                                        @enderror
                                </div>
                            </div> 
                            <div class="col-lg-8 offset-lg-2">
                                <div class="mt-10 input-group-icon">
                                    <div class="icon"><i aria-hidden="true">Ksh </i></div>
                                    <input type="number" name="amount" placeholder="Donor amount"
                                        wire:model="amount"
                                        class="single-input @error('amount') border border-danger @enderror">
                                        @error('amount')
                                        <strong class="p-2 text-white rounded bg-danger">{{ $message }} <i class="fa fa-exclamation-triangle"></i></strong>
                                        @enderror
                                </div>
                            </div>   
                        </div>
                        <div class="mt-10">
                            <button type="submit" wire:click.prevent="store" class="btn btn-success">DONATE</button>
                        </div>
                        <div wire:loading.delay wire:target="store">
                            <!--<img src="{{URL::to('backend/assets/images/processing.gif')}}" width="100" height="auto" class="rounded-circle" height="auto" alt="">
                            <strong class="text-success">Please wait for MPESA Confirmation ...</strong>-->
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger small" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>