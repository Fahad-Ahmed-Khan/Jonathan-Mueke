
    {{-- Nothing in the world is as soft and yielding as water. --}}
    {{-- =================================CREATE FORM==================== --}}
    <div wire:ignore.self class="shadow modal" id="editDonor" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <strong class="modal-title" title="Donor" id="exampleModalLabel">
                        Donor Settings
                    </strong>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body card-background">
                    <form enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        <div class="row">
							<div class="col-lg-6">
                                <div class="form-group input-group-sm">
                                    <input type="hidden" wire:model="donor_id">
                                    <label for="description">Description<span class="text-danger">*</span></label>
                                    <input class="form-control @error('description') is-invalid @enderror" type="text"  wire:model="description" autofocus>
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group input-group-sm">
                                    <input type="hidden" wire:model="donor_id">
                                    <label for="name">Donor Name:<span class="text-danger">*</span></label>
                                    <input class="form-control @error('name') is-invalid @enderror" type="text"  wire:model="name" autofocus>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group input-group-sm">
                                    <label for="email">Email:<span class="text-danger">*</span></label>
                                    <input class="form-control @error('email') is-invalid @enderror" type="email" wire:model="email" autofocus>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group input-group-sm">
                                    <label for="phone">Phone:<span class="text-danger">*</span></label>
                                    <input class="form-control @error('phone') is-invalid @enderror" type="text" wire:model="phone" autofocus>
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group input-group-sm">
                                    <label for="amount">Amount:<span class="text-danger">*</span></label>
                                    <input class="form-control @error('amount') is-invalid @enderror" type="number" wire:model="amount" autofocus>
                                    @error('amount')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 offset-lg-3">
                                <div class="text-right form-group input-group-sm">
                                    <button class="btn btn-success btn-sm border-radius" wire:click.prevent="update" type="submit">
                                        <i class="fa fa-upload"></i> Submit
                                    </button>&nbsp;&nbsp;
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>