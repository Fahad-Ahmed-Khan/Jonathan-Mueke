<div wire:ignore.self class="modal fade" style="background-color: #006b36;" id="joinUs" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Support This Work</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center most-recent-img">
                    <h4 style="color: #e9edf3;">Join Us</h4>
                    <p class="text-white">
                        Help build a better community, and be among the first to know about major news and updates.
                    </p>
                    <div class="col-lg-6 offset-lg-3">
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
                            <button href="#" wire:click.prevent="store" class="genric-btn info-border circle arrow"><i class="fa fa-paper-plane"></i>  Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>