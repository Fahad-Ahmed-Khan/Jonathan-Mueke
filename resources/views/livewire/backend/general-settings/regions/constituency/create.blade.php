{{-- Do your work, then step back. --}}
<!-- =======================CREATE PARISH Form=========================== -->
<div wire:ignore.self class="shadow modal" id="addConstituency" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <strong class="modal-title" title="Constituency" id="exampleModalLabel"><i class="fa fa-school"></i> New Constituency</strong>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body card-background">
                <form enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    <div class="row">
                        <span class="alert alert-warning"><small><i class="fa fa-exclamation-triangle"></i>Each Constituency MUST belong to a County. Please Select respective County.</small></span>
                        <div class="col-md-12">
                            <div class="form-group input-group-sm">
                                <label for="county_id">County: <span class="text-danger">*</span></label>
                                <select class="select2 @error('county_id') is-invalid @enderror" wire:model="county_id" wire:ignore data-dropdown-css-class="select2-purple" style="width: 100%">
                                    <option value="">--Select County--</option>
                                    @forelse ($showConstituencyInArray['county'] as $county) 
                                        <option value="{{ $county->id }}">{{ $county->name }}</option>
                                    @empty
                                        <option value="">No County found</option>
                                    @endforelse
                                </select>
                                @error('county_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group input-group-sm">
                                <label for="parish_name">Constituency Name: <span class="text-danger">*</span></label>
                                <input class="form-control @error('name') is-invalid @enderror" 
                                        placeholder="name "
                                        type="text" 
                                        value="{{ old('name')}}" 
                                        wire:model="name" autofocus>
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <div class="text-right form-group input-group-sm">
                                <button class="btn btn-success btn-sm border-radius" type="submit" wire:click.prevent="store">
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