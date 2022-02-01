{{-- The Master doesn't talk, he acts. --}}
<div wire:ignore.self class="modal fade" style="background-color: #006b36;" id="volunteer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 2px solid #006b36;border-radius: 10px;">
                <h5 class="modal-title" id="exampleModalLongTitle">Volunteer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-center">Sign up for volunteer opportunities at Events, Community Gatherings, and Other Foundation happenings.</p>
                <div class="col-lg-12">
                    <form autocomplete="off">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mt-10 input-group-icon">
                                    <div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                                    <input type="text" placeholder="Volunteer Name"
                                        wire:model="name"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Volunteer Name'" 
                                        class="single-input  @error('name')
                                        border border-danger
                                        @enderror" 
                                        />
                                        @error('name')
                                            <span class="p-2 text-white rounded bg-danger">{{ $message }}</span>
                                        @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-10 input-group-icon">
                                    <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                    <input type="email" placeholder="Volunteer Email"
                                        wire:model="email"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Volunteer Email'"
                                        class="single-input" />
                                        @error('email')
                                            <span class="p-2 text-white rounded bg-danger">{{ $message }}</span>
                                        @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mt-10 input-group-icon">
                                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                    <input type="text" placeholder="Phone" onfocus="this.placeholder = ''"
                                        wire:model="phone"
                                        onblur="this.placeholder = 'Phone'" class="single-input @error('phone')
                                        border border-danger
                                        @enderror" />
                                        @error('phone')
                                            <span class="p-2 text-white rounded bg-danger">{{ $message }}</span>
                                        @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mt-10 input-group-icon">
                                    <div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                                    <div class="form-select">
                                        <select wire:model="selectedCounty" style="border:none;border-radius:0px;padding-left:45px;padding-right:40px;height:40px;width:100%;background:#f9f9ff;color:#7c7c7d;">
                                            <option value="">--Select county--</option>
                                            @foreach ($counties as $county)
                                                <option value="{{ $county->id }}">{{ $county->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('selectedCounty')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mt-10 input-group-icon">
                                    <div class="icon"><i class="fa fa-home" aria-hidden="true"></i></div>
                                    <div class="form-select">
                                        <select wire:model="constituency_id" class="@error('constituency_id')
                                            border border-danger card-background
                                            @enderror" style="border:none;border-radius:0px;padding-left:45px;padding-right:40px;height:40px;width:100%;background:#f9f9ff;color:#7c7c7d;">
                                            <option value="">--Select Constituency--</option>
                                            @if(!is_null($selectedCounty))
                                                @foreach ($constituencies as $constituency)
                                                    <option value="{{ $constituency->id }}">{{ $constituency->name }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        @error('constituency_id')
                                            <span class="p-2 text-white rounded bg-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-10 offset-lg-1">
                                <div class="mt-10 input-group-icon">
                                   <div class="icon"></div>
                                   <div class="form-select" >
                                       <select wire:model="volunteer_category_id" 
                                            class="@error('volunteer_category_id')
                                            border border-danger
                                            @enderror" style="border:none;border-radius:0px;padding-left:45px;padding-right:40px;height:40px;width:100%;background:#f9f9ff;color:#7c7c7d;">
                                           <option value="">--Select Category--</option>
                                           @foreach ($showAllInArray['volunteerCategory'] as $category)
                                               <option value="{{ $category->id}}">{{ $category->category_name }}</option>
                                           @endforeach
                                       </select>
                                       @error('volunteer_category_id')
                                            <span class="p-2 text-white rounded bg-danger">{{ $message }}</span>
                                       @enderror
                                   </div>
                               </div>
                           </div>
                        </div>
                        <div class="mt-10">
                            <button type="submit" wire:ignore wire:click.prevent="storeVolunteers" class="genric-btn info-border small circle f-left">Submit Request</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="genric-btn danger small" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>