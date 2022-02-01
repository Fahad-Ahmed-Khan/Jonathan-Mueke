    {{-- Do your work, then step back. --}}
    <!--============================CREATE COUNTY FORM=========================-->
<div wire:ignore.self class="shadow modal" id="addCategory" tabindex="-1" role="dialog"
aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <strong class="modal-title" title="Category" id="exampleModalLabel"><i class="fa fa-school"></i>New Volunteer Category</strong>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body card-background">
                    @if (session()->has('category_added_message'))
                        <span><strong class="text-success">{{ session('category_added_message')}}</strong></span>
                    @endif
                <form enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group input-group-sm">
                                <label for="category_name">Category Name: <span class="text-danger">*</span></label>
                                <input wire:model="category_name" class="form-control @error('category_name') is-invalid @enderror" placeholder="name" type="text" >
                                @error('category_name')
                                    <strong style="font-family: 'Courier New', Courier, monospace" class="text-danger">{{ $message }}</strong>
                                @enderror                                                   
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <div class="text-right form-group input-group-sm">
                                <button class="btn btn-success btn-sm border-radius" wire:click.prevent="store" type="submit">
                                    <i class="fa fa-paper-plane"></i> Submit Data  
                                </button>&nbsp;&nbsp;
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
