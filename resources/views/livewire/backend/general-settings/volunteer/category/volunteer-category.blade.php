{{-- Close your eyes. Count to one. That is how long forever feels. --}}
{{-- The whole world belongs to you --}}
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="pt-5 col-sm-12">
                    <div class="box-tools">
                        <span><strong>Volunteer Category Settings</strong></span>
                        <div class="float-right btn-group">
                            <div class="box-tools">
                                <span><button class="btn btn-sm btn-primary border-radius" data-toggle="modal" title="add Category" data-target="#addCategory"><i class="fa fa-plus-circle"></i> Add Category</button>
                                @include('livewire.backend.general-settings.volunteer.category.create')
                                @include('livewire.backend.general-settings.volunteer.category.edit')
                            </div>
                        </div>
                    </div>
                    <ol class="m-0 mt-4 ml-2 breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{url('/main-dashboard')}}"><i class="fa fa-home"></i></a></li>
                        <li class="breadcrumb-item active"><a href="{{url('/main-dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Volunteer Category Settings</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="mt-3 content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-success">
                        <div class="box-header with-border">                        
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        @if ($showVolunteerCategory['countVolunteer'] != 0)
                                            <table id="countyTable" class="table shadow table-striped table-hover table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Category</th>
                                                        <th>Volunteers</th>
                                                        <th>Created on</th>
                                                        <th>Updated on</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($showVolunteerCategory['volunteerCategory'] as $count => $category)
                                                        <tr>
                                                            <td>{{ ++$count }}</td>
                                                            <td >{{ $category->category_name }}
                                                                <br>
                                                                <small>
                                                                    <a href="#" class="text-success" data-toggle="modal" data-target="#viewModal1"><i class="fas fa-eye"></i> View</a>
                                                                </small>&nbsp
                                                                    <span class="border-right"></span>&nbsp
                                                                    <small>
                                                                        <a href="#" class="text-info" data-toggle="modal" data-target="#editCategory" wire:click.prevent="edit({{$category->id}})"><i class="fas fa-pencil-alt"></i> Edit</a>
                                                                    </small>&nbsp<span class="border-right"></span>&nbsp<small>
                                                                    <a href="#" class="text-danger" data-toggle="modal" data-target="#delete-category-modal"  wire:click.prevent="showDeleteConfirmation({{$category->id}})"><i class="fas fa-trash"></i> Delete</a>
                                                                    @include('livewire.backend.general-settings.volunteer.category.delete')
                                                                </small>
                                                            </td>
                                                            <td style="width: 20%">
                                                                    <strong class="badge badge-success">({{ $category->volunteers_count }} Volunteers)</strong>
                                                                    @foreach ($category->volunteers as $volunteer)
                                                                        {{ $volunteer->name }}
                                                                    @endforeach
                                                                <br> 
                                                                <small><a href="#" class="text-info"><i class="fas fa-eye"></i> View</a></small>                                                        
                                                            </td>
                                                            <td style="width: 20%">{{ $category->created_at }}</td>
                                                            <td style="width: 20%">{{ $category->updated_at }}</td>
                                                            <td class="shadow">
                                                                <center>
                                                                    <div class="shadow dropdown dropleft bg-success" style="width: 30px; cursor: pointer; height: 30px; border-radius: 50%; " id="dropdownMenu" data-toggle="dropdown"><i class="fas fa-ellipsis-v" style="margin-top: 8px;"  ></i>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="#" data-target="#viewModal1" data-toggle="modal" ><i class="fas fa-eye" ></i> View</a>
                                                                            <a class="dropdown-item" href="#" data-target="#editCounty" data-toggle="modal" wire:click.prevent="edit({{ $category->id}})" > <i class="fas fa-pencil-alt" ></i> Edit</a>
                                                                            <a  class="dropdown-item" href="#" data-toggle="modal" data-target="#delete-category-modal"  wire:click.prevent="showDeleteConfirmation({{ $category->id}})"><i class="fas fa-trash"></i> Trash</a>
                                                                        </div>
                                                                    </div>
                                                                </center>
                                                            </td>
                                                        </tr>   
                                                    @empty
                                                        @include('livewire.backend.general-settings.volunteer.category.not-found')
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        @else
                                            @include('livewire.backend.general-settings.volunteer.category.not-found')
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