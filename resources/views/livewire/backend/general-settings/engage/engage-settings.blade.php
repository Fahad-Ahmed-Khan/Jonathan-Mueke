{{-- Success is as dangerous as failure. --}}
{{-- Nothing in the world is as soft and yielding as water. --}}
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="pt-5 col-sm-12">
                    <div class="box-tools">
                        <span><strong>Shoutout Settings</strong></span>
                        <div class="float-right btn-group">
                            <div class="box-tools">
                                @include('livewire.backend.general-settings.engage.create')
                                @include('livewire.backend.general-settings.engage.edit')
                                @include('livewire.backend.general-settings.engage.message')
                            </div>
                        </div>
                    </div>
                    <ol class="m-0 mt-4 ml-2 breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{url('/main-dashboard')}}"><i class="fa fa-home"></i></a></li>
                        <li class="breadcrumb-item active"><a href="{{url('/main-dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Shoutout Settings</li>
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
                                <span class="float-left">
                                    @if (session()->has('request_message'))
                            
                                        <div class="alert alert-warning alert-dismissible" wire:poll.4000ms>
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            <strong>CONFIRMATION!</strong> {{ session('request_message') }} <i class="fa fa-exclamation-triangle"></i>
                                        </div>
                                    @endif
                                </span>
                                <span class="float-right">
                                     <!--==================loader================ -->
                                   @include('livewire.backend.general-settings.engage.loader')
                                   <!--=====================================================-->
                                    <div class="shadow btn-group">
                                        <a href="#" class="btn btn-sm btn-danger "> <i class="fa fa-print"></i> Print</a>
                                        <a href='#' wire:click.prevent="exportPDF" wire:model.lazy="exportPDF" class="btn btn-sm btn-info"> <i class="fa fa-file"></i> Export PDF </a>
                                        <a href='#' wire:click.prevent="exportCSV" class="btn btn-sm btn-warning"> <i class="fa fa-file-excel"></i> CSV file </a>
                                        <a href='#' data-toggle="modal" data-target="#addRequest" class="btn btn-sm btn-primary" title="add Request" ><i class="fa fa-plus-circle"></i> Add Shoutout</a>
                                    </div>
                                </span><br><hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        @if ($showAll['countRequest'] != 0)
                                            <table id="documentsTable" class="table shadow table-striped table-hover table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>
                                                            <label for="select">All</label>
                                                            <input type="checkbox" id="selectAllRequest">
                                                        </th>
                                                        <th>Request Title</th>
                                                        <th>Sender Name</th>
                                                        <th>Email</th>
                                                        <th>Phone</th>
                                                        <th>Description</th>
                                                        <th>Created by</th>
                                                        <th>Created On</th>
                                                        <th>Updated On</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody> 
                                                    @include('livewire.backend.general-settings.engage.show-engage')
                                                </tbody>
                                            </table>
                                        @else
                                            @include('livewire.backend.general-settings.engage.noshout-out')
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
