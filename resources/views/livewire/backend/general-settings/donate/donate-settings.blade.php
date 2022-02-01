{{-- The whole world belongs to you --}}
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="pt-5 col-sm-12">
                    <div class="box-tools">
                        <span><strong>Donation Settings</strong></span>
                        <div class="float-right btn-group">
                            <div class="box-tools">
                                @include('livewire.backend.general-settings.donate.create')
                                @include('livewire.backend.general-settings.donate.edit')
                                @include('livewire.backend.general-settings.donate.delete')
                            </div>
                        </div>
                    </div>
                    <ol class="m-0 mt-4 ml-2 breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{url('/main-dashboard')}}"><i class="fa fa-home"></i></a></li>
                        <li class="breadcrumb-item active"><a href="{{url('/main-dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Donation Settings</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!--section 1-->
    <section class="mt-3 content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-success">
                        <div class="box-header with-border">                        
                            <div class="box-body">
                               <span class="float-left">
                                    {{-- @include('livewire.backend.general-settings.donate.filters') --}}
                               </span>
                               <span class="float-center">
                                    <a href='{{ route('dashboard')}}' class="btn btn-sm btn-warning"> <i class="fa fa-backward"></i> back</a>
                                    <span class="shadow badge badge-success badge-pill" style="font-size: medium">
                                        {{ $showAll['countDonors'] }}
                                    </span>
                                
                               </span>
                                <span class="float-right">
                                    <!--==================loader================ -->
                                    @include('livewire.backend.general-settings.donate.loader')
                                    <!--=====================================================-->
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-sm btn-danger"> <i class="fa fa-print"></i> Print</a>
                                        <a href='#' wire:click.prevent="exportPDF" wire:model.lazy="exportPDF" class="btn btn-sm btn-info"> <i class="fa fa-file"></i> Export PDF </a>
                                        <a href='#' wire:click.prevent="donationExport" wire:model.lazy="exportCSV" class="btn btn-sm btn-warning"> <i class="fa fa-file-excel"></i> CSV file </a>
                                        <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" title="add donor" data-target="#addDonor"><i class="fa fa-plus-circle"></i> Donor</a>
                                    </div>
                                </span><br><hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        @if ($showAll['showDonors']->count() != 0)
                                            <table id="documentsTable" class="table shadow table-striped table-responsive table-hover">
                                                <thead class="card-background">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>All
                                                            <input type="checkbox" name="select" id="">
                                                        </th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Phone Number</th>
                                                        <th>Amount</th>
                                                        <td>Created By</td>
                                                        <td>Created On</td>
                                                        <th>Updated On</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody> 
                                                    @forelse( $showAll['showDonors'] as $count => $donors )
                                                        <tr>
                                                            <td>{{ ++$count }}</td>
                                                            <td><input type="checkbox" name="select" id=""></td>
                                                            <td>{{ $donors->name }}
                                                                <br>
                                                                <small>
                                                                    <a href="#" class="text-success" data-toggle="modal" data-target="#viewDonor"><i class="fas fa-eye"></i> View</a>
                                                                </small>&nbsp
                                                                    <span class="border-right"></span>&nbsp
                                                                    <small>
                                                                        <a href="#" class="text-info" data-toggle="modal" 
                                                                            data-target="#editDonor"
                                                                            wire:click.prevent="edit({{ $donors->id }})"
                                                                            >
                                                                            <i class="fas fa-pencil-alt"></i> Edit</a>
                                                                    </small>&nbsp<span class="border-right"></span>&nbsp<small>
                                                                    <a href="#" 
                                                                        class="text-danger" 
                                                                        data-toggle="modal" 
                                                                        data-target="#delete-donor-modal" 
                                                                        wire:click.prevent="showDeleteConfirmation({{ $donors }})">
                                                                        <i class="fas fa-trash"></i> Archive
                                                                    </a>
                                                                </small>
                                                            </td>
                                                            <td>{{ $donors->email }}</td>
                                                            <td>{{ $donors->phone }}</td>
                                                            <td><strong>{{ $donors->amount }}</strong></td>
                                                            <td>{{ $donors->created_by }}</td>
                                                            <td>{{ $donors->created_at }}</td>
                                                            <td>{{ $donors->updated_at->diffForHumans() }}</td>

                                                            <td class="bg-white shadow">
                                                                <center>
                                                                    <div class="text-white shadow dropdown dropleft bg-success" style="width: 30px; cursor: pointer; height: 30px; border-radius: 50%; " id="dropdownMenu" data-toggle="dropdown"><i class="fas fa-ellipsis-v" style="margin-top: 8px;"  ></i>
                                                                        <div class="dropdown-menu" >
                                                                            <a class="dropdown-item" href="#" ><i class="fa fa-eye"></i> View</a>
                                                                            <a class="dropdown-item" href="#" 
                                                                                data-toggle="modal" 
                                                                                data-target="#editDonor"
                                                                                wire:click.prevent="edit({{ $donors->id }})"
                                                                                ><i class="fas fa-pencil-alt" ></i> Edit
                                                                            </a>
                                                                            <a class="dropdown-item" href="#"
                                                                                data-toggle="modal"
                                                                                data-target="#delete-donor-modal"
                                                                                wire:click.prevent="showDeleteConfirmation({{ $donors }})">
                                                                                <i class="fa fa-trash"></i> Archive
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </center>
                                                            </td>
                                                        </tr>
                                                    @empty
                                                        @include('livewire.backend.general-settings.donate.nodonation')
                                                    @endforelse
                                                </tbody>
                                                <tfoot class="card-background">
                                                    <tr>
                                                        <td colspan="5"><strong>TOTAL</strong></td>
                                                        <td><strong>Ksh. {{ $showAll['sumDonatedAmount'] }}</strong></td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        @else
                                            @include('livewire.backend.general-settings.donate.nodonation')
                                        @endif
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
