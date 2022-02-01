{{-- Nothing in the world is as soft and yielding as water. --}}
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="pt-5 col-sm-12">
                    <div class="box-tools">
                        <span><strong>Subscription Settings</strong></span>
                        {{-- <div class="float-right btn-group">
                            <div class="box-tools">
                                <span><button class="btn btn-sm btn-primary border-radius" data-toggle="modal" title="add donor" data-target="#addDonor"><i class="fa fa-plus-circle"></i> Subscriber</button>
                                @include('livewire.backend.general-settings.donate.create')
                                @include('livewire.backend.general-settings.donate.edit')
                            </div>
                        </div> --}}
                        @include('livewire.backend.general-settings.subscription.delete')
                        @include('livewire.backend.general-settings.subscription.edit')
                        @include('livewire.backend.general-settings.subscription.message')
                        @include('livewire.backend.general-settings.subscription.message-all')

                    </div>
                    <ol class="m-0 mt-4 ml-2 breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{url('/main-dashboard')}}"><i class="fa fa-home"></i></a></li>
                        <li class="breadcrumb-item active"><a href="{{url('/main-dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Subscription Settings</li>
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
                                
                           <!--========================Message response here ========================-->  
                                @if ( session()->has('subscriber_deletion') )
                                    <span class="float-left alert alert-warning">
                                        <strong>{{ session('subscriber_deletion') }} <i class="fa fa-exclamation-triangle"></i></strong>
                                    </span>
                                @endif
                            <!-- =================Message response ends here =======================-->
                            <!--==================loader================ -->
                            @include('livewire.backend.general-settings.volunteer.loader')
                            <!--=====================================================-->
                                <span class="float-right">
                                    <div class="shadow btn-group">
                                        <a  href="#" class="btn btn-success btn-sm" title="print subscribers"> <i class="fa fa-print"></i> Print</a>
                                        <a href='#' wire:click.prevent="exportPDF" title="export to pdf" class=" btn-sm btn btn-info"> <i class="fa fa-download"></i> download PDF </a>
                                        <a href='#' wire:click.prevent="subscriptionExport" class="btn btn-warning btn-sm" title="Convert to CSV format"> <i class="fa fa-file-excel"></i> CSV file </a>
                                        <a href='#' data-toggle="modal" data-target="#messageAll" class="btn btn-secondary btn-sm" title="Sent message"> <i class="fa fa-envelope"></i> Compose </a>
                                    </div>
                                </span>
                                <span class="float-left">
                                    <div class="shadow btn-group">
                                        <a  href="{{ route('trashedSubscribers') }}" class="btn theme-yellow btn-sm" title="archived subscribers"> <i class="fa fa-sync"></i> restore from information</a>
                                    </div>
                                </span>
                                <br>
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
                                                    <th>Exact Data & Time</th>
                                                    <th>Updated On</th>
                                                    <td>Status</td>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody> 
                                                 @forelse ($showAll['subscribers'] as $count => $subscriber)
                                                     <tr>
                                                         <td>{{ ++ $count }}</td>
                                                         <td>
                                                            <input type="checkbox" name="" id="">
                                                         </td>
                                                         <td>{{ $subscriber->name }}</td>
                                                         <td>{{ $subscriber->email }}</td>
                                                         <td>{{ $subscriber->created_at->diffForHumans()}}</td>
                                                         <td>{{ $subscriber->created_at}}</td>
                                                         <td>{{ $subscriber->updated_at->diffForHumans() }}</td>
                                                         <td>
                                                             <a href="#" class="shadow badge badge-success badge-pill">active</a>
                                                         </td>
                                                         <td class="shadow">
                                                            <small>
                                                                <a href="#" class="text-warning" data-toggle="modal" wire:click.prevent="showMessageDialog({{ $subscriber->id }})" data-target="#message"><i class="fas fa-envelope"></i> Message</a>
                                                            </small>&nbsp
                                                            <span class="border-right"></span>&nbsp
                                                            <small>
                                                                <a href="#" class="text-info" data-toggle="modal" data-target="#editSubscriber" wire:click.prevent="edit({{ $subscriber->id }})"><i class="fas fa-pencil-alt"></i> Edit</a>
                                                            </small>&nbsp<span class="border-right"></span>&nbsp<small>
                                                            <a href="#" class="text-danger" data-toggle="modal" data-target="#delete-subscriber-modal"  wire:click.prevent="showDeleteConfirmation({{ $subscriber->id}} )"><i class="fas fa-trash"></i> Archive</a>                
                                                         </td>
                                                     </tr>
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
