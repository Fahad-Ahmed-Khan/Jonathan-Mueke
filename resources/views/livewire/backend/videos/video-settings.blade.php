{{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="pt-5 col-sm-12">
                    <div class="box-tools">
                        <span><strong>Video Settings</strong></span>
                        <div class="float-right btn-group">
                            <div class="box-tools">
                                <span><button class="btn btn-sm btn-primary border-radius" data-toggle="modal" title="add Video" data-target="#addVideo"><i class="fa fa-plus-circle"></i> Video</button>
                                @include('livewire.backend.videos.create')
                                @include('livewire.backend.videos.edit')
                                @include('livewire.backend.videos.view')

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
                                <div class="row">
                                    <div class="col-md-12">
                                        @if ($showAll['showVideo']->count() != 0)
                                            <table id="documentsTable" class="table shadow table-striped table-responsive table-hover">
                                                <thead class="card-background">
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Video Title</th>
                                                        <th>Video Link</th>
                                                        <th>Description</th>
                                                        <td>Created By</td>
                                                        <td>Created On</td>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody> 
                                                    @forelse( $showAll['showVideo'] as $count => $video )
                                                        <tr>
                                                            <td>{{ ++$count }}</td>
                                                            <td>{{ $video->video_title }}
                                                                <br>
                                                                <small>
                                                                    <a href="#" class="text-success" 
                                                                        data-toggle="modal" 
                                                                        wire:click.prevent="view({{$video}})"
                                                                        data-target="#viewVideo">
                                                                        <i class="fas fa-eye"></i> View
                                                                    </a>
                                                                </small>&nbsp
                                                                    <span class="border-right"></span>&nbsp
                                                                    <small>
                                                                        <a href="#" class="text-info" data-toggle="modal" 
                                                                            data-target="#editVideo"
                                                                            wire:click.prevent="edit({{ $video->id }})"
                                                                            >
                                                                            <i class="fas fa-pencil-alt"></i> Edit</a>
                                                                    </small>&nbsp<span class="border-right"></span>&nbsp<small>
                                                                    <a href="#" 
                                                                        class="text-danger" 
                                                                        data-toggle="modal" 
                                                                        data-target="#delete-video-modal" 
                                                                        wire:click.prevent="showDeleteConfirmation({{ $video }})">
                                                                        <i class="fas fa-trash"></i> Archive
                                                                    </a>
                                                                    @include('livewire.backend.videos.delete')
                                                                </small>
                                                            </td>
                                                            <td>{{ $video->youtube_link }}</td>
                                                            <td>{{ $video->description }}</td>
                                                            <td>{{ $video->created_by }}</td>
                                                            <td>{{ $video->created_at }}</td>
                                                            <td class="bg-white shadow ">
                                                                <center>
                                                                    <div class="shadow dropdown dropleft bg-success" style="width: 30px; cursor: pointer; height: 30px; border-radius: 50%; " id="dropdownMenu" data-toggle="dropdown"><i class="fas fa-ellipsis-v" style="margin-top: 8px;"  ></i>
                                                                        <div class="dropdown-menu" >
                                                                            <a class="dropdown-item" href="#" 
                                                                                wire:click.prevent="view({{$video}})"
                                                                                data-toggle="modal" 
                                                                                data-target="#viewVideo" >
                                                                                <i class="fa fa-eye"></i> View
                                                                            </a>
                                                                            <a class="dropdown-item" href="#" 
                                                                                data-toggle="modal" 
                                                                                data-target="#editVideo"
                                                                                wire:click.prevent="edit({{ $video->id }})"
                                                                                ><i class="fas fa-pencil-alt" ></i> Edit
                                                                            </a>
                                                                            <a class="dropdown-item" href="#"
                                                                                data-toggle="modal"
                                                                                data-target="#delete-video-modal"
                                                                                wire:click.prevent="showDeleteConfirmation({{ $video }})">
                                                                                <i class="fa fa-trash"></i> Archive
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </center>
                                                            </td>
                                                        </tr>
                                                    @empty
                                                        @include('livewire.backend.videos.nodonation')
                                                    @endforelse
                                                </tbody>
                                                
                                            </table>
                                        @else
                                            @include('livewire.backend.videos.nodonation')
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