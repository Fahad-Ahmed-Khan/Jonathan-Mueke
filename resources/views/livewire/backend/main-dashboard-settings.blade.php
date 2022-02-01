
{{-- Stop trying to control. --}}
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="mb-2 row">
                <div class="col-sm-6">
                    <h1 class="m-0 mt-4 ml-2 text-muted"><strong>Welcome </strong>, {{Auth::user()->name}}!</h1>
                    <ol class="ml-2 breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{url('/home')}}"><i class="fa fa-home"></i></a></li>
                        <li class="breadcrumb-item active"><a href="{{url('/home')}}">Home</a></li>
                        <li class="breadcrumb-item active">Control Panel</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <br>
    <section class="content">
        <div class="container-fluid">
              <!-- Info boxes -->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="bg-white shadow-sm info-box">
                        <span class="info-box-icon bg-info elevation-1" style="opacity:.6; border-radius: 50%;"><i class=" fas fa-users-cog"></i></span>
                        <div class="info-box-content">
                            <a href="{{ route('account')}}">
                                <span class="info-box-text">Users</span>
                                <span class="float-right info-box-number">
                                    <h4 id="infoNo"><strong>{{ $showAll['users']}}</strong></h4>
                                </span>
                            </a>
                        </div>
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="mb-3 shadow-sm info-box">
                        <span class="info-box-icon bg-danger elevation-1" style="opacity:.6; border-radius: 50%;"><i class="fas fa-envelope-square"></i></span>
                        <div class="info-box-content">
                            <span class=" info-box-text">Incoming Requests</span>
                            <span class="float-right">
                                <h4 id="infoNo"><strong>{{ $showAll['shout-out']}}</strong></h4>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="mb-3 shadow-sm info-box">
                        <span class="info-box-icon bg-success elevation-1" style="opacity:.6; border-radius: 50%;"><i class="fas fa-users"></i></span>
                        <div class="info-box-content">
                            <a href="{{ route('subscribe') }}">
                                <span class="info-box-text">Subscribers</span>
                                <span class="float-right">
                                    <h4 id="infoNo"><strong>{{ $showAll['subscribers']}}</strong></h4>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="mb-3 shadow-sm info-box">
                        <span class="info-box-icon bg-warning elevation-1" style="opacity:.6; border-radius: 50%;"><i class="text-white fas fa-newspaper"></i></span>
                        <div class="info-box-content">
                            <a href="{{ route('volunteer')}}">
                                <span class="info-box-text">Volunteers</span>
                                <span class="float-right">
                                    <h4 id="infoNo"><strong>{{ $showAll['volunteers']}}</strong></h4>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="card card-white">
                        <div class="card-header">
                            <h3 class="card-title">Statistics</h3>
                        </div>
                        <div class="card-body">
                            <div id="popultion_id"></div>
                            @donutchart('Population','popultion_id')
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="card card-white" style="height: 263px; overflow: auto;">
                        <div class="card-header">
                            <h3 class="card-title">Latest Donations</h3>
                            <span>
                                <a href="{{ route('donate') }}" class="float-right text-white btn theme-green btn-sm" type data-toggle="tooltip" title="All information submitted">
                                <i class=" fa fa-eye"></i>
                                <span>view</span>
                            </a>
                            </span>
                        </div>
                        <div class="table card-body">
                            <table id="donorTable" class="table table-responsive table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Amount</th>
                                        <th>Donated On</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($showAll['latest-donations'] as $count => $donation)
                                    <tr>
                                        <td>{{++ $count }}</td>
                                        <td>{{ $donation->name }}</td>
                                        <td>{{ $donation->amount }}</td>
                                        <td>{{ $donation->created_at->diffForHumans() }}</td>
                                    </tr>
                                    @empty
                                        
                                    @endforelse
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Volunteers</h4>
                            <span >
                                <a href="{{ route('volunteer') }}" class="float-right text-white btn theme-purple btn-sm" type data-toggle="tooltip" title="All information submitted">
                                    <i class=" fa fa-eye"></i>
                                    <span>view</span>
                                </a>
                            </span>
                        </div>
                        <div class="card-body"> 
                            <!-- the events -->
                            <div id="external-events" class="outer" style="height: 200px; overflow: auto;"> 
                                @forelse ($showAll['volunteerShow'] as $count => $volunteer)
                                    <div class="px-3 py-3 shadow" style=" border-bottom: 1px solid rgb(8, 102, 156)">
                                        <span>{{ ++$count}} .</span>
                                        <img src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png"
                                            class="rounded-circle"
                                            width="50"
                                            height="50"
                                        >
                                        <small class="text-bold text-primary">{{$volunteer->name}}</small> |
                                        <span>{{$volunteer->county->name}}</span> | <span>{{$volunteer->constituency->name}}</span>
                                        <span class="dropdown">
                                            <a title="Action tab" id="wp-icon" class="float-right btn" style="border: 1px dashed rgb(241, 132, 7); border-radius: 50%; width: 30px; height: 30px; margin-top: -6px !important;cursor: pointer;" href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="text-warning fas fa-ellipsis-h" style="margin-top: -12px !important;" ></i></a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#editModal11"><i class="fas fa-pencil-alt text-muted"></i> Edit</a>
                                                <a class="dropdown-item" href="#" da    ta-toggle="modal" data-target="#viewModal11"><i class="fas fa-eye text-info"></i> View</a>
                                                <a class="dropdown-item" href="#" onclick="return(confirm('You are about to delete this event. Do you want to proceed?'))"><i class="fas fa-trash text-danger"></i> Delete</a>
                                            </div>
                                        </span> 
                                    </div><br>
                                @empty
                                    
                                @endforelse                                                   
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Volunteers By Gender</h4>
                        </div>
                        <div class="card-body"> 
                            <div id="poll_div"></div>
                            @barchart('Volunteer By Gender','poll_div')
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </section>
</div>
