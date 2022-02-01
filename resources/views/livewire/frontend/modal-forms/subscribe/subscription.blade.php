{{-- Do your work, then step back. --}}
<div wire:ignore.self class="modal fade"" style="background-color: #006b36;" id="subscribe" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content" >
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Support This Work</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center most-recent-img">
                    <h4 >Join Us</h4>
                    <p>
                        Help build a better community, and be among the first to know about major news and updates.
                    </p>
                    <div class="col-lg-12 ">
                        <div class="row">
                            <div class="p-1 col-lg-10 offset-lg-1">
                                <div class="bg-white shadow" style="border-radius: 30px">
                                    @if (session()->has('subscription_message'))
                                       @include('livewire.frontend.subscribe.success') 
                                    @endif
                                </div>
                            </div>
                        </div>
                        <form class="form-horizontal" autocomplete="off">
                            <div class="form-group input-sm">
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
                            <button href="#" wire:click.prevent="store" class="genric-btn info-border circle arrow"><i class="fa fa-paper-plane"></i>  Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(function () {
        $('#subscribe').modal('show');
        setTimeout(function () {
            $('#subscribe').modal('hide');
        }, 5000);
    });
</script>