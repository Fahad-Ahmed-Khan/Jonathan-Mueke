{{-- Care about people's approval and you will be their prisoner. --}}
<div class="box">
    <div class="box-header with-border">                        
        <div class="box-body">
            <div class="row">
                <div class="pb-3 " >
                    <div class="shadow btn-group">
                        <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" title="add County" data-target="#addCounty"><i class="fa fa-plus-circle"></i> County</a>
                        <a href="#" data-toggle="tooltip" class="btn btn-sm btn-danger" title="print list" > <i class="fa fa-print"></i> Print</a>
                        <a href='#' wire:click.prevent="exportPDF" wire:model.lazy="exportPDF" data-toggle="tooltip" class="btn btn-sm btn-info" title="download  PDF format" > <i class="fa fa-download"></i> download PDF </a>
                        <a href='#' wire:click.prevent="countyExport" data-toggle="tooltip" class="btn btn-sm btn-warning" title="Convert to CSV file" > <i class="fa fa-file-excel"></i> CSV file </a>
                        <a href="{{ route('dashboard') }}" class="shadow-lg btn btn-dark btn-sm"><i class="fa fa-backward" aria-hidden="true"></i>Back</a>
                        <a href="{{ route('regions') }}" class="shadow-lg btn btn-primary btn-sm"><i class="fa fa-sync" aria-hidden="true"></i>Refresh</a>
                        <a href="#" wire:click.prevent="countyImport" class="text-white shadow-lg btn theme-purple btn-sm"><i class="fa fa-upload" aria-hidden="true"></i> import</a>
                    </div>
                    @include('livewire.backend.general-settings.regions.county.create')
                    @include('livewire.backend.general-settings.regions.county.edit')
                    @if (session()->has('county-delete-message'))
                        <div class="alert alert-success">
                            {{ session('county-delete-message')}}
                        </div>
                    @endif
                     <!--==================loader================ -->
                     @include('livewire.backend.general-settings.regions.county.loader')
                     <!--=====================================================-->
                </div>
                <div class="col-md-12" wire:ignore wire:poll.keep-alive>
                    @if ($showAll['countCounty'] != 0)
                        <table id="countyTable" class="table shadow table-striped table-hover table-responsive">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>County</th>
                                    <th>Constituency</th>
                                    <th>Volunteers</th>
                                    <th>Created on</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($showAll['showCounties'] as $count => $counties)
                                    <tr>
                                        <td>{{ ++$count }}</td>
                                        <td >{{ $counties->name }} | <strong class="badge badge-warning badge-pill">{{ $counties->code }}</strong>
                                            <br>
                                            <small>
                                                <a href="#" class="text-success" data-toggle="modal" data-target="#viewModal1"><i class="fas fa-eye"></i> View</a>
                                                &nbsp<span class="border-right"></span>&nbsp
                                                <a href="#" class="text-info" data-toggle="modal" data-target="#editCounty" wire:click.prevent="edit({{ $counties->id}} )"><i class="fas fa-pencil-alt"></i> Edit</a>
                                                &nbsp<span class="border-right"></span>&nbsp<small>
                                                <a href="#" class="text-danger" data-toggle="modal" data-target="#delete-county-modal"  wire:click.prevent="showDeleteConfirmation({{ $counties }})"><i class="fas fa-trash"></i> Delete</a>
                                                @include('livewire.backend.general-settings.regions.county.delete')
                                            </small>
                                        </td>
                                        
                                        <td style="width: 20%">
                                            <small>
                                                <a href="#" wire:ignore data-toggle="modal" data-target="#viewConstituency" class="text-info"><i class="fas fa-eye"></i> View</a>
                                            </small>  
                                            <strong class="badge badge-success">({{ $counties->constituencies_count }} Constituencies)</strong>
                                            @forelse ($counties->constituencies as $constituecy)
                                                {{ $constituecy->name}}
                                                @include('livewire.backend.general-settings.regions.county.view-constituencies')                                       
                                            @empty
                                                No constituencies found
                                            @endforelse
                                            <br> 
            
                                        </td>
                                        <td>
                                            <strong class="badge badge-success">{{ $counties->volunteers_count}}</strong>
                                            @forelse ($counties->volunteers as $volunteer)
                                                
                                                <span class="text-success">{{ $volunteer->name }}</span>
                                            @empty
                                                {{-- <strong class="badge badge-danger">{{ $counties->volunteers_count}}</strong> --}}
                                                <small class="text-danger">No volunteer</small>
                                            @endforelse
                                        </td>
                                        <td style="width: 20%">{{ $counties->created_at }}</td>
                                        <td class="shadow">
                                            <center>
                                                <div class="shadow dropdown dropleft bg-success" style="width: 30px; cursor: pointer; height: 30px; border-radius: 50%;" id="dropdownMenu" data-toggle="dropdown"><i class="fas fa-ellipsis-v" id="dropdownMenu" style="margin-top: 8px" data-toggle="dropdown" ></i>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#" data-target="#viewModal1" data-toggle="modal" ><i class="fas fa-eye" ></i> View</a>
                                                        <a class="dropdown-item" href="#" data-target="#editCounty" data-toggle="modal" wire:click.prevent="edit({{ $counties->id}})" > <i class="fas fa-pencil-alt" ></i> Edit</a>
                                                        <a  class="dropdown-item" href="#" data-toggle="modal" data-target="#delete-county-modal"  wire:click.prevent="showDeleteConfirmation({{ $counties->id}})"><i class="fas fa-trash"></i> Trash</a>
                                                    </div>
                                                </div>
                                            </center>
                                        </td>
                                    </tr>   
                                @empty
                                    @include('livewire.backend.general-settings.regions.county.not-found')
                                @endforelse
                            </tbody>
                        </table>
                    @else
                        @include('livewire.backend.general-settings.regions.county.not-found')
                    @endif
                   
                </div>
            </div>
        </div>
    </div>
</div>