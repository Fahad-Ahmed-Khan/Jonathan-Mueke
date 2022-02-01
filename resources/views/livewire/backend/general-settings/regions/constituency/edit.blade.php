{{-- Do your work, then step back. --}}
<!-- =======================CREATE PARISH Form=========================== -->
<div wire:ignore.self class="shadow modal" id="editConstituency" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <strong class="modal-title" title="Parish" id="exampleModalLabel"><i class="fa fa-school"></i> Update [ <strong class="text-warning">{{ $name }}</strong> ] Constituency</strong>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body card-background">
                    @if (session()->has('constituency_updation'))
                        <div class="alert alert-success">
                            {{ session('constituency_updation')}}
                        </div>
                    @endif
                <form enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group input-group-sm">
                                <input type="hidden" wire:model="constituency_id">
                                <label for="county">County: <span class="text-danger">*</span></label>
                                <select class="form-control @error('county_id') is-invalid @enderror" wire:model="county_id" autofocus>
                                    <option value="">--Select County--</option>
                                    @forelse ($showConstituencyInArray['county'] as $county)
                                        <option value="{{ $county->id }}">{{ $county->name }}</option>
                                    @empty
                                        <option value="">No county found</option>
                                    @endforelse
                                </select>
                                @error('county_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group input-group-sm">
                                <label for="name">Constituency Name: <span class="text-danger">*</span></label>
                                <input class="form-control @error('name') is-invalid @enderror" placeholder="name "  type="text" value="{{ old('name')}}" wire:model="name" autofocus>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <div class="text-right form-group input-group-sm">
                                <button class="btn btn-success btn-sm border-radius" type="submit" wire:click.prevent="update">
                                    <i class="fa fa-paper-plane"></i> Update Data  
                                </button>&nbsp;&nbsp;
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>