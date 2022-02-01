{{-- Close your eyes. Count to one. That is how long forever feels. --}}
<div class="lead-your-community" style="height: auto !important;padding-left:0 !important;padding-right:0 !important;margin: 0 !important;background: linear-gradient(90deg, rgb(0,107,54,255) 0%, rgba(0,107,54,255) 100%);">
    <div class="p-5 most-recent">
        <div class="row">
            <div class="p-1 col-lg-12">
                <div wire:loading.delay.short class="bg-white shadow" style="border-radius: 30px">
                    @if (session()->has('subscription_message'))
                       @include('livewire.frontend.subscribe.success') 
                    @endif
                </div>
            </div>
        </div>
        
        <div class="text-center most-recent-img">
            <h4 class="text-white" style="color: #006b36;">Join Us</h4>
            <p class="text-white">
                Help build a better community, and be among the first to know about major news and updates.
            </p>
            <div class="col-lg-8 offset-lg-2">
                <form class="form-horizontal" autocomplete="off">
                    <div class="form-group input-sm"> {{ $name }}
                        <input type="text" name="name" placeholder="name"
                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'name'" wire:model="name"
                        class="single-input @error('name') border border-danger @enderror form-control-sm arrow" />
                        @error('name')
                            <strong class="p-2 text-white rounded bg-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="form-group input-sm">
                        <input type="email" name="email" placeholder="email"
                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'email'" wire:model="email"
                        class="single-input @error('email') border border-danger @enderror form-control-sm arrow" />
                        @error('email')
                            <strong class="p-2 text-white rounded bg-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                    <button href="#" 
                        wire:ta
                        wire:click
                        wire:click.prevent="store" 
                        class="genric-btn info-border circle arrow">
                        <i class="fa fa-paper-plane"></i>  Subscribe
                    </button>
                    {{-- Loading gif --}}
                    <div wire:loading wire:target="store" class="text-success">
                        <img src="{{URL::to('backend/assets/images/green2Loading.gif')}}" width="50" height="50" class="rounded-circle" height="auto" alt="">
                        <small class="bg-white rounded shadow">Sending Email. Please wait...</small>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>