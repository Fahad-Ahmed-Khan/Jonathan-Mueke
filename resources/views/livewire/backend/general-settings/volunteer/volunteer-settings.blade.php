{{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day --}}
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="pt-5 col-sm-12">
                    <div class="box-tools">
                        <span><strong>Volunteer Settings</strong></span>
                        <div class="float-right btn-group">
                            <div class="box-tools">
                                @include('livewire.backend.general-settings.volunteer.create')
                            </div>
                        </div>
                    </div>
                    <ol class="m-0 mt-4 ml-2 breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{url('/main-dashboard')}}"><i class="fa fa-home"></i></a></li>
                        <li class="breadcrumb-item active"><a href="{{url('/main-dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Volunteer Settings</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!--section 1-->
    <section class="mt-3 content">
        <div class="container-fluid" wire:ignore>
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-success">
                        <div class="box-header with-border">                     
                            <div class="box-body">
                                <span  class="float-left">
                                    @if(session()->has('volunteer_message'))
                                        @include('livewire.backend.general-settings.volunteer.success')
                                    @endif
                                </span>
                                <span class="float-right">
                                    <div class="shadow btn-group">
                                        <a href="#" class="btn btn-sm btn-danger "> <i class="fa fa-print"></i> Print</a>
                                        <a href='#' wire:click.prevent="exportPDF" wire:model.lazy="exportPDF" class="btn btn-info btn-sm"> <i class="fa fa-download"></i> download PDF </a>
                                        <a href='#' class="btn btn-sm btn-warning"> <i class="fa fa-file-excel"></i> CSV file </a>
                                        <a href='#' data-toggle="modal" data-target="#addVolunteer" class="btn btn-sm btn-primary" title="add volunteer" >
                                            <i class="fa fa-plus-circle"></i> Add Volunteer
                                        </a>
                                    </div>
                                </span>
                                <span class="float-left">
                                    <button href="#" wire:click.prevent="deleteSelected"
                                        onclick="confirm('are you sure') || event.stopImmediatePropagation()" 
                                        class="btn btn-sm btn-danger " @if ($bulkDisabled)
                                            disabled
                                        @endif> 
                                        <i class="fa fa-trash"></i> delete selected
                                    </button>
                                    <!--==================loader================ -->
                                        @include('livewire.backend.general-settings.volunteer.loader')
                                    <!--=====================================================-->
                                </span>
                                <br><hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <table id="documentsTable" class="table shadow table-striped table-hover table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>All 
                                                        <input type="checkbox" wire:model="selectAll" />
                                                    </th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone Number</th>
                                                    <th>County</th>
                                                    <th>Constituency</th>
                                                    <th>Category</th>
                                                    <th>Created On</th>
                                                    <th>Updated On</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody> 
                                                @forelse ($showVolunteer['volunteers'] as $count => $volunteer)
                                                    <tr>
                                                        <td>{{ ++$count }}</td>
                                                        <td><input type="checkbox" wire:model="selectedVolunteers" value="{{ $volunteer->id }}"></td>
                                                        <td>{{ $volunteer->name }}
                                                            <br>
                                                            <small>
                                                                <a href="#" 
                                                                    class="text-success" 
                                                                    data-toggle="modal" 
                                                                    wire:click.prevent="modalViewVolunteer({{ $volunteer }})" 
                                                                    data-target="#viewVolunteer">
                                                                    <i class="fas fa-eye"></i> View
                                                                </a>
                                                            </small>&nbsp
                                                                <span class="border-right"></span>&nbsp
                                                            <small>
                                                                <a href="#" 
                                                                    class="text-info" 
                                                                    data-toggle="modal" 
                                                                    data-target="#editVolunteer" 
                                                                    wire:click.prevent="edit({{ $volunteer->id }})">
                                                                    <i class="fas fa-pencil-alt"></i> Edit
                                                                </a>
                                                            </small>&nbsp<span class="border-right"></span>&nbsp
                                                            <small>
                                                                <a href="#" class="text-danger" 
                                                                    data-toggle="modal" 
                                                                    data-target="#delete-volunteer-modal"  
                                                                    wire:click.prevent="showDeleteConfirmation( {{ $volunteer }} )">
                                                                    <i class="fas fa-trash"></i> Delete
                                                                </a>
                                                                @include('livewire.backend.general-settings.volunteer.delete')
                                                            </small>
                                                        </td>
                                                        <td>{{ $volunteer->email }}</td>
                                                        <td>{{ $volunteer->phone }}</td>
                                                        <td>{{ $volunteer->county->name }}</td>                                                        
                                                        <td>{{ $volunteer->constituency->name }}</td>
                                                        <td>{{ $volunteer->volunteercategory->category_name }}</td>
                                                        <td>{{ $volunteer->created_at->diffForHumans()}}</td>
                                                        <td>{{ $volunteer->updated_at->diffForHumans()}}</td>
                                                        <td class="bg-white shadow">
                                                            <center>
                                                                <div class="shadow dropdown dropleft bg-success" style="width: 30px; cursor: pointer; height: 30px; border-radius: 50%; " id="dropdownMenu" data-toggle="dropdown"><i class="fas fa-ellipsis-v" style="margin-top: 8px;"  ></i>
                                                                    <div class="dropdown-menu" >
                                                                        <a class="dropdown-item" href="#" ><i class="fa fa-eye"></i> View</a>
                                                                        <a class="dropdown-item" href="#" 
                                                                            data-toggle="modal" 
                                                                            data-target="#editVolunteer"
                                                                            wire:click.prevent="edit({{$volunteer}})"
                                                                            ><i class="fas fa-pencil-alt" ></i> Edit
                                                                        </a>
                                                                        <a class="dropdown-item" href="#"
                                                                            data-toggle="modal"
                                                                            data-target="#delete-request-modal"
                                                                            wire:click.prevent="showDeleteConfirmation({{ $volunteer }})">
                                                                            <i class="fa fa-trash"></i> Archive
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </center>
                                                        </td>
                                                    </tr>
                                                    @include('livewire.backend.general-settings.volunteer.edit')
                                                @empty
                                                    @include('livewire.backend.general-settings.volunteer.no-volunteer')
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </section>
</div>

@include('livewire.backend.general-settings.volunteer.view')
