{{-- The Master doesn't talk, he acts. --}}
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="pt-5 col-sm-12">
                    <div class="box-tools">
                        <span><strong>Press Statment Settings</strong></span>
                        <div class="float-right btn-group">
                            <div class="box-tools">
                                <span><button class="btn btn-sm btn-primary border-radius" data-toggle="modal" title="add group" data-target="#addPress"><i class="fa fa-plus-circle"></i> Press</button>
                                @include('livewire.backend.press-statement.create')
                                @include('livewire.backend.press-statement.edit')
                            </div>
                        </div>
                    </div>
                    <ol class="m-0 mt-4 ml-2 breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{url('/home')}}"><i class="fa fa-home"></i></a></li>
                        <li class="breadcrumb-item active"><a href="{{url('/home')}}">Home</a></li>
                        <li class="breadcrumb-item active"><i class="fa fa-bullhorn"></i> Press Statment Settings</li>
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
                    <div class="box box-warning">
                        <div class="box-header with-border">                        
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <table id="documentsTable" class="table shadow table-striped table-hover table-responsive">
                                            <thead>
                                            
                                                <tr>
                                                    <th>#</th>
                                                    <th>Press File</th>
                                                    <th>Press Title</th>
                                                    <th>Link to Images</th>                                                    
                                                    <th>Created on</th>
                                                    <th>Created By</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody> 
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <a href="#">
                                                            <img src="{{URL::to('assets/images/csv.JPG')}}" 
                                                                    alt="cover" 
                                                                    class="rounded-circle" 
                                                                    width="50" 
                                                                    height="50"
                                                                />
                                                        </a>
                                                    </td>
                                                    <td style="width: 30%">Name
                                                        <br>
                                                        <small>
                                                            <a href="#" class="text-success" data-toggle="modal" data-target="#">
                                                                <i class="fas fa-eye"></i> View
                                                            </a>
                                                        </small>&nbsp
                                                            <span class="border-right"></span>&nbsp
                                                            <small>
                                                                <a href="#" class="text-info" data-toggle="modal" data-target="#editPress" ><i class="fas fa-pencil-alt"></i> Edit</a>
                                                            </small>&nbsp<span class="border-right"></span>&nbsp<small>
                                                            <a href="#" class="text-danger" data-toggle="modal" data-target="#delete-press-modal" ><i class="fas fa-trash"></i> Delete</a>
                                                                @include('livewire.backend.press-statement.delete')
                                                        </small>
                                                    </td>
                                                  
                                                    <td style="width: 20%">100
                                                        <br> 
                                                        <small><a href="#" class="text-info"><i class="fas fa-eye"></i> View</a></small>                                                        
                                                    </td>
                                                    <td style="width: 20%"></td>
                                                    <td style="width: 20%"></td>
                                                    <td>
                                                        <center>
                                                            <div class="dropdown dropleft" style="cursor:pointer;"><i class="fas fa-ellipsis-v" id="dropdownMenu" data-toggle="dropdown" ></i>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#" data-target="#viewModal1" data-toggle="modal" ><i class="fas fa-eye" ></i> View</a>
                                                                    <a class="dropdown-item" href="#" data-target="#editPress" data-toggle="modal"  > <i class="fas fa-pencil-alt" ></i> Edit</a>
                                                                    <a  class="dropdown-item" href="#" data-toggle="modal" data-target="#delete-event-modal"><i class="fas fa-trash"></i> Trash</a>
                                                                </div>
                                                            </div>
                                                        </center>
                                                    </td>
                                                </tr> 
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

