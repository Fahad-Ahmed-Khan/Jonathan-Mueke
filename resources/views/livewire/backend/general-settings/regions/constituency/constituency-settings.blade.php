{{-- Be like water. --}}
<div class="box">
    <div class="box-header with-border">                        
        <div class="box-body">
            <div class="row">
                <div class="pb-3" >
                    <span>
                        <div class="shadow btn-group">
                            <a href="#" type class="btn btn-sm btn-primary" data-toggle="modal" title="add Constituency" data-target="#addConstituency"><i class="fa fa-plus-circle"></i> Constituency</a>
                            <a href="#" type data-toggle="tooltip" class="btn btn-sm btn-danger" title="print list" > <i class="fa fa-print"></i> Print</a>
                            <a href='#' wire:click.prevent="exportPDF" wire:model.lazy="exportPDF" data-toggle="tooltip" class="btn btn-sm btn-info" title="download  PDF format" > <i class="fa fa-download"></i> download PDF </a>
                            <a href='#' wire:click.prevent="constituencyExport" type data-toggle="tooltip" class="btn btn-sm btn-warning" title="Convert to CSV file" > <i class="fa fa-file-excel"></i> CSV file </a>
                        </div>
                         <!--==================loader================ -->
                        @include('livewire.backend.general-settings.regions.constituency.loader')
                        <!--=====================================================-->
                        @include('livewire.backend.general-settings.regions.constituency.create')
                        @include('livewire.backend.general-settings.regions.constituency.edit')
                        
                    <!--========response message on CRUD performance ======-->
                        @if (session()->has('constituency_deletion'))
                        <div class="alert alert-success">
                            {{ session('constituency_deletion')}}
                        </div>
                        @endif
                    <!--============end response message ==================== -->
                    </span>
                </div>
                <div class="col-md-12" wire:ignore>
                    @if ($showConstituencyInArray['constituencyCount'] != 0)
                        <table id="constituencyTable" class="table shadow table-striped table-hover table-responsive">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>All 
                                        <input type="checkbox" name="" id="">
                                    </th>
                                    <th>County</th>
                                    <th>Constituency</th>
                                    <th>Registered Volunteers</th>
                                    <th>Created on</th>
                                    <th>Updated On</th>
                                    <th>Updated By</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($showConstituencyInArray['constituency'] as $count => $constituency)
                                    <tr>
                                        <td>{{ ++$count }}</td>
                                        <td> <input type="checkbox" name="" id=""> </td>
                                        <td>{{ $constituency->county->name }}</td>
                                        <td>{{ $constituency->name}}</td>
                                        
                                        <td>
                                            <strong class="badge badge-success">{{ $constituency->volunteers_count }}</strong>
                                            <a href="#" wire:ignore data-target="#listVolunteer" data-toggle="modal" class="text-success"> <i class="fa fa-eye"></i>view</a>
                                            @forelse ($constituency->volunteers as $volunteer)
                                                @include('livewire.backend.general-settings.regions.constituency.list-volunteers')
                                            @empty
                                                <span class="text-danger">No volunteer</span>
                                            @endforelse
                                        </td>
                                        <td>{{ $constituency->created_at }}</td>
                                        <td>{{ $constituency->updated_at }}</td>
                                        <td>{{ $constituency->created_by}}</td>
                                        <td class="shadow">
                                            <small>
                                                <a href="#" class="text-success" data-toggle="modal" data-target="#viewModal1"><i class="fas fa-eye"></i> View</a>
                                                &nbsp<span class="border-right"></span>&nbsp
                                                <a href="#" class="text-info" data-toggle="modal" data-target="#editConstituency" wire:click.prevent="edit({{ $constituency->id}})"><i class="fas fa-pencil-alt"></i> Edit</a>
                                                &nbsp<span class="border-right"></span>&nbsp<small>
                                                <a href="#" class="text-danger" data-toggle="modal" data-target="#delete-constituency-modal"  wire:click.prevent="showDeleteConfirmation({{ $constituency->id}} )"><i class="fas fa-trash"></i> Delete</a>
                                                @include('livewire.backend.general-settings.regions.constituency.delete')
                                            </small>
                                        </td>
                                    </tr>
                                @empty
                                    @include('livewire.backend.general-settings.regions.constituency.not-found')
                                @endforelse                     
                            </tbody>
                        </table>
                    @else
                        @include('livewire.backend.general-settings.regions.constituency.not-found')

                    @endif
                   
                </div>
            </div>
        </div>
    </div>
</div>