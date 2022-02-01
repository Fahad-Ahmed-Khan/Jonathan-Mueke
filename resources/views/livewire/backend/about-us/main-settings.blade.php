{{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="pt-5 col-sm-12">
                    <div class="box-tools">
                        <span><strong>Why Mueke</strong></span>
                        <div class="float-right btn-group">
                            <div class="box-tools">
                                <span><button class="btn btn-sm btn-primary border-radius" data-toggle="modal" title="add group" data-target="#addAboutUs"><i class="fa fa-plus-circle"></i> Why Mueke</button>
                                @include('livewire.backend.about-us.create')
                                @include('livewire.backend.about-us.edit')
                            </div>
                        </div>
                    </div>
                    <ol class="m-0 mt-4 ml-2 breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{url('/home')}}"><i class="fa fa-home"></i></a></li>
                        <li class="breadcrumb-item active"><a href="{{url('/home')}}">Home</a></li>
                        <li class="breadcrumb-item active">Why Mueke Settings</li>
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
                                <div class="row">
                                    <div class="col-md-12">
                                        <table id="documentsTable" class="table shadow table-striped table-hover table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>Cover</th>
                                                    <th>Title</th>
                                                    <th>Description</th>
                                                    <th>Created on</th>
                                                    <th>Created By</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($showAboutUs as $aboutUs)
                                                    <tr>
                                                        <td>
                                                            <a href="#">
                                                                <img src="{{URL::to('storage/'.$aboutUs->image)}}" 
                                                                    alt="cover" 
                                                                        {{-- class="rounded-circle"  --}}
                                                                    width="100%" 
                                                                    height="auto"
                                                                    />
                                                            </a>
                                                        </td>
                                                        <td style="width: 30%">{{ $aboutUs->title }}
                                                            <br>
                                                            <small>
                                                                <a href="#" class="text-success" data-toggle="modal" data-target="#">
                                                                    <i class="fas fa-eye"></i> View
                                                                </a>
                                                            </small>&nbsp
                                                                <span class="border-right"></span>&nbsp
                                                                <small>
                                                                    <a href="#" class="text-info" data-toggle="modal" data-target="#editAboutUs" wire:click.prevent="edit({{$aboutUs->id}})"><i class="fas fa-pencil-alt"></i> Edit</a>
                                                                </small>&nbsp<span class="border-right"></span>&nbsp<small>
                                                                <a href="#" class="text-danger" data-toggle="modal" data-target="#delete-aboutUs-modal" wire:click.prevent="destroyModalForm({{ $aboutUs->id }})"><i class="fas fa-trash"></i> Delete</a>
                                                                    @include('livewire.backend.about-us.delete')
                                                            </small>
                                                        </td>
                                                        <td style="width: 15%">{{ $aboutUs->description }}
                                                            <br> 
                                                            <small><a href="#" class="text-info"><i class="fas fa-eye"></i> View</a></small>                                                        
                                                        </td>
                                                        <td style="width: 10%">{{ $aboutUs->created_at->diffForHumans() }}</td>
                                                        <td style="width: 10%">{{ $aboutUs->created_by }}</td>
                                                        <td class="shadow">
                                                            <center>
                                                                <div class="shadow dropdown dropleft bg-success" style="width: 30px; cursor: pointer; height: 30px; border-radius: 50%;" id="dropdownMenu" data-toggle="dropdown"><i class="fas fa-ellipsis-v" id="dropdownMenu" style="margin-top: 8px" data-toggle="dropdown" ></i>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item" 
                                                                            href="#" 
                                                                            data-target="#viewModal1" 
                                                                            data-toggle="modal" >
                                                                            <i class="fas fa-eye" ></i> View
                                                                        </a>
                                                                        <a class="dropdown-item" 
                                                                            href="#" 
                                                                            data-target="#editAboutUs" 
                                                                            data-toggle="modal" 
                                                                            wire:click.prevent="edit({{ $aboutUs->id }})" > 
                                                                            <i class="fas fa-pencil-alt" ></i> Edit
                                                                        </a>
                                                                        <a  class="dropdown-item" 
                                                                            href="#" 
                                                                            data-toggle="modal" 
                                                                            data-target="#delete-aboutUs-modal"  
                                                                            wire:click.prevent="destroyModalForm({{ $aboutUs->id }})">
                                                                            <i class="fas fa-trash"></i> Trash
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </center>
                                                        </td>
                                                    </tr> 
                                                @endforeach 
                                               
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