{{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day --}}

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="pt-5 col-sm-12">
                    <div class="box-tools">
                        <span><strong>Story Settings</strong></span>
                        <div class="float-right btn-group">
                            <div class="box-tools">
                                <span><button class="btn btn-sm btn-primary border-radius" data-toggle="modal" title="add group" data-target="#addStory"><i class="fa fa-plus-circle"></i> Jona Story Settings</button>
                                @include('livewire.backend.home-page.jona-story.create')
                                @include('livewire.backend.home-page.jona-story.edit')
                                @include('livewire.backend.home-page.jona-story.view_file')
                            </div>
                        </div>
                    </div>
                    <ol class="m-0 mt-4 ml-2 breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{url('/home')}}"><i class="fa fa-home"></i></a></li>
                        <li class="breadcrumb-item active"><a href="{{url('/home')}}">Home</a></li>
                        <li class="breadcrumb-item active">Story Settings</li>

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
                                                    <th>Cover Image</th>
                                                    <th>Title</th>
                                                    <th>Description</th>
                                                    <th>Created on</th>
                                                    <th>Created By</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody> 
                                                @forelse ($showInArray['fetchStory'] as $count => $story)
                                                    <tr>
                                                        <td>{{ ++$count }}</td>
                                                        <td style="width: 20%"><img src="storage/{{$story->cover_image}}" class="img-responsive img-fluid" width="100%" />
                                                            <br> 
                                                            <small><a href="#" data-target="#viewFile" data-toggle="modal" class="text-info"><i class="fas fa-file"></i> View</a></small>                                                        
                                                        </td>
                                                        <td style="width: 30%">{{$story->title}}
                                                            <br>
                                                            <small>
                                                                <a href="#" class="text-success" data-target="#viewFile" data-toggle="modal" wire:click.prevent="viewFileModal({{$story->id}})">
                                                                    <i class="fas fa-eye"></i> View
                                                                </a>
                                                            </small>&nbsp
                                                                <span class="border-right"></span>&nbsp
                                                                <small>
                                                                    <a href="#" class="text-info" data-toggle="modal" data-target="#editDownload" wire:click.prevent="edit({{$story->id}})" ><i class="fas fa-pencil-alt"></i> Edit</a>
                                                                </small>&nbsp<span class="border-right"></span>&nbsp<small>
                                                                <a href="#" class="text-danger" data-toggle="modal" data-target="#delete-document-modal" wire:click.prevent="deleteConfirmaton({{$story->id}})" ><i class="fas fa-trash"></i> Delete</a>
                                                                    @include('livewire.backend.home-page.jona-story.delete')
                                                            </small>
                                                        </td>
                                                        <td style="width: 20%">{{Str::limit($story->description, 100)}}</td>
                                                        <td style="width: 20%">{{$story->created_at->diffForHumans()}}</td>
                                                        <td style="width: 20%">{{$story->created_by}}</td>
                                                        <td class="shadow">
                                                            <center>
                                                                <div class="shadow dropdown dropleft bg-success" style="width: 30px; cursor: pointer; height: 30px; border-radius: 50%;" id="dropdownMenu" data-toggle="dropdown"><i class="fas fa-ellipsis-v" id="dropdownMenu" style="margin-top: 8px" data-toggle="dropdown" ></i>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item" href="#" data-target="#viewFile" data-toggle="modal" wire:click.prevent="viewFileModal({{$story->id}})" ><i class="fas fa-eye" ></i> View</a>
                                                                        <a class="dropdown-item" href="#" data-target="#editDownload" data-toggle="modal"  wire:click.prevent="edit({{$story->id}})" > <i class="fas fa-pencil-alt" ></i> Edit</a>
                                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete-document-modal" wire:click.prevent="deleteConfirmaton({{$story->id}})"><i class="fas fa-trash"></i> Trash</a>
                                                                    </div>
                                                                </div>
                                                            </center>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    @include('livewire.backend.home-page.jona-story.not-found')
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

