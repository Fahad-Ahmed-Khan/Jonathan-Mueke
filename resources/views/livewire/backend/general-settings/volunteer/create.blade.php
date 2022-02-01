
    {{-- Nothing in the world is as soft and yielding as water. --}}
    {{-- =================================CREATE FORM==================== --}}
    <div wire:ignore.self class="shadow modal" id="addVolunteer" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <strong class="modal-title" title="Social Media" id="exampleModalLabel">
                        {{-- <img src="{{ URL::to('backend/assets/images/25451618.jpg')}}" alt="" width="50px" height="auto"> --}}
                        Voluteer Settings</strong>
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
                                    <label for="name">Name:<span class="text-danger">*</span></label>
                                    <input class="form-control @error('name') is-invalid @enderror" type="text" value="{{ old('name')}}" wire:model="name" autofocus>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group input-group-sm">
                                    <label for="email">Email:<span class="text-danger">*</span></label>
                                    <input class="form-control @error('email') is-invalid @enderror" type="email" value="{{ old('email')}}" wire:model="email" autofocus>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group input-group-sm">
                                    <label for="phone">Phone:<span class="text-danger">*</span></label>
                                    <input class="form-control @error('phone') is-invalid @enderror" type="text" value="{{ old('phone')}}" wire:model="phone" autofocus>
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group input-group-sm">
                                    <label for="gender">Gender:<span class="text-danger">*</span></label>
                                    <select class="form-control @error('gender') is-invalid @enderror" wire:model="gender" autofocus>
                                        <option value="">-- select gender --</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                    @error('gender')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group input-group-sm">
                                    <label for="selectedCounty">County: <span class="text-danger">*</span></label>
                                    <select wire:model.lazy="selectedCounty" class="form-control @error('selectedCounty') is-invalid @enderror" wire:model="selectedCounty" autofocus style="width: 100%">
                                        <option value="">--Select County--</option>
                                        @foreach ($counties as $county)
                                            <option value="{{ $county->id }}">{{ $county->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('selectedCounty')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group input-group-sm">
                                    <label for="constituency_id"> 
                                        <!-- =========show loading of constituencies=========-->
                                        Constituency: <span class="text-danger">*</span><br>
                                        <div wire:loading 
                                            wire:target="selectedCounty">
                                            <img src="{{asset('backend/assets/images/loader3.gif')}}" 
                                            width="10" 
                                            height="10" alt=""> 
                                            <small class="text-success">loading constituencies...</small>
                                        </div> 
                                        
                                    </label>
                                    <select class="form-control @error('county_id') is-invalid @enderror" wire:model="constituency_id" autofocus>
                                        <option value="">--Select Constituency--</option>
                                        @if (!is_null($selectedCounty))
                                            @foreach ($constituencies as $constituency)
                                                <option value="{{ $constituency->id }}">{{ $constituencies->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    @error('constituency_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group input-group-sm">
                                    <label for="volunteer_category_id">Category:<span class="text-danger">*</span></label>
                                    <select class="form-control select2 @error('volunteer_category_id') is-invalid @enderror" 
                                            wire:model="volunteer_category_id" 
                                            autofocus style="width: 100%">
                                        <option value="">--Select Category--</option>
                                        @forelse ($showVolunteer['categories'] as $category)
                                            <option value="{{ $category->id}}">{{ $category->category_name }}</option>
                                        @empty
                                            <option value="">No category</option>
                                        @endforelse
                                    </select>
                                    @error('volunteer_category_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 offset-lg-3">
                                <div class="text-right form-group input-group-sm">
                                    <button class="btn btn-success btn-sm border-radius" wire:click.prevent="store" type="submit">
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