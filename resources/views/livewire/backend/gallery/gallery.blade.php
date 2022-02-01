{{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day --}}
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="pt-5 col-sm-12">
                    <div class="box-tools">
                        <span><strong>Home Page Slider Configurations</strong></span>
                        <div class="float-right btn-group">
                            <div class="box-tools">
                                <span><button class="btn btn-sm btn-primary border-radius" data-toggle="modal" title="add group" data-target="#addSlider"><i class="fa fa-plus-circle"></i> Slider</button>
                                @include('livewire.backend.gallery.create')
{{--                                @include('livewire.backend.home-page.slider.edit')--}}
{{--                                @include('livewire.backend.home-page.slider.view_file')--}}
                            </div>
                        </div>
                    </div>
                    <ol class="m-0 mt-4 ml-2 breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{url('/home')}}"><i class="fa fa-home"></i></a></li>
                        <li class="breadcrumb-item active"><a href="{{url('/home')}}">Home</a></li>
                        <li class="breadcrumb-item active">Home Slider Settings</li>

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
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Created on</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @forelse ($showInArray['fetchGalleries'] as $count => $gallery)
                                                <tr>
                                                    <td>{{ ++$count }}</td>
                                                    <td style="width: 20%">{{$gallery->title}}</td>
                                                    <td style="width: 20%">{{Str::limit($gallery->description, 100)}}</td>
                                                    <td style="width: 20%">{{$gallery->created_at->diffForHumans()}}</td>
                                                    <td class="shadow">
                                                        <center>
                                                            <div class="shadow dropdown dropleft bg-success" style="width: 30px; cursor: pointer; height: 30px; border-radius: 50%;" id="dropdownMenu" data-toggle="dropdown"><i class="fas fa-ellipsis-v" id="dropdownMenu" style="margin-top: 8px" data-toggle="dropdown" ></i>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#" data-target="#viewFile" data-toggle="modal" wire:click.prevent="viewFileModal({{$gallery->id}})" ><i class="fas fa-eye" ></i> View</a>
                                                                    <a class="dropdown-item" href="#" data-target="#editDownload" data-toggle="modal"  wire:click.prevent="edit({{$gallery->id}})" > <i class="fas fa-pencil-alt" ></i> Edit</a>
                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete-document-modal" wire:click.prevent="deleteConfirmaton({{$gallery->id}})"><i class="fas fa-trash"></i> Trash</a>
                                                                </div>
                                                            </div>
                                                        </center>
                                                    </td>
                                                </tr>
                                            @empty
                                                @include('livewire.backend.home-page.slider.not-found')
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
