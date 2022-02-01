{{-- Success is as dangerous as failure. --}}
{{-- Do your work, then step back. --}}
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="pt-5 col-sm-12">
                    <div class="box-tools">
                        <span><strong>Events Settings</strong></span>
                        <div class="alert alert-warning">
                            <strong>MODULE NOT IN USE!</strong>
                            Please note that this module has been temporarily disabled on the front page 
                            <i class="fa fa-exclamation-triangle"></i>                                                                                               
                        </div>
                        <div class="float-right btn-group">
                            <div class="box-tools">
                                <span><button class="btn btn-sm btn-primary border-radius" data-toggle="modal" title="add group" data-target="#addEvents"><i class="fa fa-plus-circle"></i> Events</button>
                                @include('livewire.backend.events.create')
                                @include('livewire.backend.events.edit')
                                @include('livewire.backend.events.update_image')
                            </div>
                        </div>
                    </div>
                    <ol class="m-0 mt-4 ml-2 breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{url('/home')}}"><i class="fa fa-home"></i></a></li>
                        <li class="breadcrumb-item active"><a href="{{url('/home')}}">Home</a></li>
                        <li class="breadcrumb-item active">Events Settings</li>
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
                                        @if( $showArrayOfEvent['count-events'] !=0 )
                                            <table id="documentsTable" class="table shadow table-striped table-hover table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Cover Image</th>
                                                        <th>Event Title</th>
                                                        <th>Venue</th>
                                                        <th>Date From</th>
                                                        <th>Date To</th>
                                                        <th>Created on</th>
                                                        <th>Created By</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($showArrayOfEvent['events'] as $count => $event)
                                                        <tr>
                                                            <td>{{ ++ $count}}</td>
                                                            <td>
                                                                <a href="#">
                                                                    <img src="{{URL::to('storage/'.$event->cover_image)}}" 
                                                                        alt="cover" 
                                                                        class="img-rsponsive" 
                                                                        width="100" 
                                                                        height="auto"
                                                                    />
                                                                </a>
                                                            </td>
                                                            <td style="width: 30%">{{$event->event_title}}
                                                                <br>
                                                                <small>
                                                                    <a href="#" class="text-success" 
                                                                        data-target="#viewEventImage" 
                                                                        wire:click.prevent="viewEventImageModal( {{ $event }} )" 
                                                                        data-toggle="modal">
                                                                        <i class="fas fa-eye"></i> View
                                                                    </a>
                                                                </small>&nbsp
                                                                    <span class="border-right"></span>&nbsp
                                                                    <small>
                                                                        <a href="#" class="text-info" data-toggle="modal" wire:click.prevent="edit({{$event}})" data-target="#editEvents" ><i class="fas fa-pencil-alt"></i> Edit</a>
                                                                    </small>&nbsp<span class="border-right"></span>&nbsp<small>
                                                                    <a href="#" class="text-danger" data-toggle="modal" wire:click.prevent="deleteConfirmation({{ $event }})" data-target="#delete-event-modal" ><i class="fas fa-trash"></i> Delete</a>
                                                                        @include('livewire.backend.events.delete')
                                                                </small>
                                                            </td>
                                                            <td style="width: 20%">{{$event->venue}}</td>
                                                            <td style="width: 20%">{{$event->date_from}}</td>
                                                            <td style="width: 20%">{{$event->date_to}}</td>
                                                            <td style="width: 20%">{{$event->created_at->diffForHumans()}}</td>
                                                            <td>{{$event->created_by}}</td>
                                                            <td class="shadow">
                                                                <center>
                                                                    <div class="shadow dropdown dropleft bg-success" style="width: 30px; cursor: pointer; height: 30px; border-radius: 50%;" id="dropdownMenu" data-toggle="dropdown"><i class="fas fa-ellipsis-v" id="dropdownMenu" style="margin-top: 8px" data-toggle="dropdown" ></i>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item" href="#" 
                                                                                data-target="#viewEventImage" 
                                                                                wire:click.prevent="viewEventImageModal( {{ $event }} )" 
                                                                                data-toggle="modal" ><i class="fas fa-eye" ></i> 
                                                                                View
                                                                            </a>
                                                                            <a class="dropdown-item" href="#" data-target="#editEvents" data-toggle="modal" wire:click.prevent="edit({{$event}})"> <i class="fas fa-pencil-alt" ></i> Edit</a>
                                                                            <a  class="dropdown-item" href="#"  wire:click.prevent="deleteConfirmation({{ $event }})" data-toggle="modal" data-target="#delete-event-modal"><i class="fas fa-trash"></i> Trash</a>
                                                                        </div>
                                                                    </div>
                                                                </center>
                                                            </td>
                                                        </tr> 
                                                    @empty
                                                        @include('livewire.backend.events.no-event')
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        @else
                                            @include('livewire.backend.events.no-event')
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
