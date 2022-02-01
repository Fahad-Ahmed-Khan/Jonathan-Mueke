{{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="pt-5 col-sm-12">
                    <div class="box-tools">
                        <span><strong>Trashed Subscription Settings</strong></span>

                    </div>
                    <ol class="m-0 mt-4 ml-2 breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{url('/main-dashboard')}}"><i class="fa fa-home"></i></a></li>
                        <li class="breadcrumb-item active"><a href="{{url('/main-dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{route('subscribe')}}">Subscription Settings</a></li>
                        <li class="breadcrumb-item active"><a href="{{route('trashedSubscribers') }}">Trashed Subscribers</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!--section 1-->
    <section class="mt-3 content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box box-success">
                        <div class="box-header with-border">                        
                            <div class="box-body">
                                
                           <!--========================Message response here ========================-->  
                                @if ( session()->has('subscriber_deletion') )
                                    <span class="float-left alert alert-warning">
                                        <strong>{{ session('subscriber_deletion') }} <i class="fa fa-exclamation-triangle"></i></strong>
                                    </span>
                                @endif
                            <!-- =================Message response ends here =======================-->
                            <!--==================loader================ -->
                            @include('livewire.backend.general-settings.volunteer.loader')
                            {{-- @include('livewire.backend.trash.subscribers.loader') --}}
                            <!--=====================================================-->
                                <span class="float-right">
                                    <div class="shadow btn-group">
                                        <a  href="{{ route('subscribe')}}" class="text-white btn theme-purple btn-sm" title="view subscribers"> <i class="fa fa-eye"></i> View Subscribers</a>
                                    </div>
                                </span>
                                <span class="float-left">
                                    <div class="shadow btn-group">
                                        <a  href="#" class="btn btn-danger btn-sm" title="delete all subscribers"> <i class="fa fa-trash"></i> Delete forever</a>
                                        <a href='#' wire:click.prevent="" title="restore all" class=" btn-sm btn btn-success"> <i class="fa fa-sync"></i> restore all </a>
                                    </div>
                                </span><br>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <table id="documentsTable" class="table shadow table-striped table-hover table-responsive">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>all 
                                                        <input type="checkbox" name="" id="">
                                                    </th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Subscribed On</th>
                                                    <th>Delete On</th>
                                                    <th>Exact date & Time </th>
                                                    <th>Deleted by</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody> 
                                                 @forelse ($showTrashed['subscribers'] as $count => $subscriber)
                                                     <tr>
                                                         <td>{{ ++ $count }}</td>
                                                         <td>
                                                            <input type="checkbox" name="" id="">
                                                         </td>
                                                         <td>{{ $subscriber->name }}</td>
                                                         <td>{{ $subscriber->email }}</td>
                                                         <td>{{ $subscriber->created_at->diffForHumans()}}</td>
                                                         <td>{{ $subscriber->deleted_at->diffForHumans() }}</td>
                                                         <td>{{ $subscriber->deleted_at }}</td>
                                                         <td>{{ $subscriber->deleted_by }}</td>
                                                         <td class="shadow">
                                                            <small>
                                                                <a href="#" class="text-success" data-toggle="modal" wire:click.prevent="showRestoreConfirmation({{ $subscriber->id }})" data-target="#restore"><i class="fa fa-sync"></i> restore</a>
                                                            </small>&nbsp
                                                            <span class="border-right"></span>&nbsp
                                                            <small>
                                                                <a href="#" class="text-danger" data-toggle="modal" data-target="#permanentdelete-donor-modal" wire:click.prevent="showDeleteConfirmation({{ $subscriber->id }})"><i class="fas fa-trash"></i> Delete forever</a>
                                                            </small>&nbsp<span class="border-right"></span>&nbsp<small>
                                                         </td>
                                                     </tr>
                                                     @include('livewire.backend.trash.subscribers.permanent-delete')
                                                     @include('livewire.backend.trash.subscribers.restore')
                                                 @empty
                                                     
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
