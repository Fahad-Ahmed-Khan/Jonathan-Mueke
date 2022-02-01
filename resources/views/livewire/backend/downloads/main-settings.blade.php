{{-- A good traveler has no fixed plans and is not intent upon arriving.
Because she competes with no one, no one can compete with her. --}}
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="pt-5 col-sm-12">
                    <div class="box-tools">
                        <span><strong>Downloads</strong></span>
                        <div class="float-right btn-group">
                            <div class="box-tools">
                                <span><button class="btn btn-sm btn-primary border-radius" data-toggle="modal" title="add group" data-target="#addDownloads"><i class="fa fa-plus-circle"></i> Downloads</button>
                                @include('livewire.backend.downloads.create')
                                @include('livewire.backend.downloads.edit')
                                @include('livewire.backend.downloads.view_file')
                            </div>
                        </div>
                    </div>
                    <ol class="m-0 mt-4 ml-2 breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{url('/home')}}"><i class="fa fa-home"></i></a></li>
                        <li class="breadcrumb-item active"><a href="{{url('/home')}}">Home</a></li>
                        <li class="breadcrumb-item active">Download Settings</li>

                        @include('errors.response')
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
                                                    <th>#</th>
                                                    <th>Document Title</th>
                                                    <th>Document File</th>
                                                    <th>Created on</th>
                                                    <th>Updated on</th>
                                                    <th>Created By</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody> 
                                                @foreach ($showDownloads as $count => $downloads)
                                                <tr>
                                                    <td>{{ ++$count }}</td>
                                                    <td style="width: 30%">{{$downloads->document_title}}
                                                        <br>
                                                        <small>
                                                            <a href="#" class="text-success" data-target="#viewFile" data-toggle="modal" wire:click.prevent="viewFileModal({{$downloads->id}})">
                                                                <i class="fas fa-eye"></i> View
                                                            </a>
                                                        </small>&nbsp
                                                            <span class="border-right"></span>&nbsp
                                                            <small>
                                                                <a href="#" class="text-info" data-toggle="modal" data-target="#editDownload" wire:click.prevent="edit({{$downloads->id}})" ><i class="fas fa-pencil-alt"></i> Edit</a>
                                                            </small>&nbsp<span class="border-right"></span>&nbsp<small>
                                                            <a href="#" class="text-danger" data-toggle="modal" data-target="#delete-document-modal" wire:click.prevent="deleteConfirmaton({{$downloads->id}})" ><i class="fas fa-trash"></i> Delete</a>
                                                        </small>
                                                    </td>
                                                    <td style="width: 20%"><iframe src="storage/{{$downloads->document_file}}" frameborder="0"></iframe>
                                                        
                                                        <br> 
                                                        <small><a href="#" data-target="#viewFile" data-toggle="modal" class="text-info"><i class="fas fa-file"></i> View</a></small>  
                                                        <small><a href="#" data-target="#updateDocument" data-toggle="modal" class="text-danger"><i class="fas fa-edit"></i> edit document</a></small>                                                                                                              
                                                    </td>
                                                    <td style="width: 20%">{{ $downloads->created_at->diffForHumans() }}</td>
                                                    <td style="width: 20%">{{ $downloads->updated_at->diffForHumans() }}</td>
                                                    <td style="width: 20%">{{ $downloads->created_by }}</td>
                                                    <td class="shadow">
                                                        <center>
                                                            <div class="shadow dropdown dropleft bg-success" style="width: 30px; cursor: pointer; height: 30px; border-radius: 50%;" id="dropdownMenu" data-toggle="dropdown"><i class="fas fa-ellipsis-v" id="dropdownMenu" style="margin-top: 8px" data-toggle="dropdown" ></i>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#"
                                                                        data-target="#viewFile" 
                                                                        data-toggle="modal" 
                                                                        wire:click.prevent="viewFileModal({{$downloads->id}})" >
                                                                        <i class="fas fa-eye" ></i> View
                                                                    </a>
                                                                    <a class="dropdown-item" href="#" data-target="#editDownload" data-toggle="modal"  wire:click.prevent="edit({{$downloads->id}})" > <i class="fas fa-pencil-alt" ></i> Edit</a>
                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete-document-modal" wire:click.prevent="deleteConfirmaton({{$downloads->id}})"><i class="fas fa-trash"></i> Trash</a>
                                                                </div>
                                                            </div>
                                                        </center>
                                                    </td>
                                                </tr> 
                                                @include('livewire.backend.downloads.delete')
                                                @include('livewire.backend.downloads.update_document')

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
