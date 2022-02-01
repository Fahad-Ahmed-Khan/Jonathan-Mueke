{{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    {{-- <h1 class="m-0 mt-4 ml-2 text-muted"><strong>Welcome</strong>, {{Auth::user()->name}}!</h1> --}}
                    <ol class="m-0 mt-4 ml-2 breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{url('/home')}}"><i class="fa fa-home"></i></a></li>
                        <li class="breadcrumb-item active"><a href="{{url('/home')}}">Home</a></li>
                        <li class="breadcrumb-item active">account</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--section 1-->
    <section class="content">

        <div class="row">
          <div class="col-md-3">
            <!-- Profile Image -->
            <div class="box box-success">
              <div class="box-body box-profile">
                <img class="profile-user-img img-responsive img-circle" src="
                {{-- ############################################## --}}
                    @if (Auth::user()->cover_image == NULL)
                        {{URL::to('assets/images/profilePhoto.jpeg')}}
                    @else
                        {{ URL::to('storage/'.Auth::user()->cover_image) }}
                    @endif
                " alt="profile">
                <!--#####################END ################################### -->
                <h3 class="text-center profile-username">{{Auth::user()->name }}</h3>
                <p class="text-center text-muted">
                  @if (Auth::user()->role)
                      <strong class="badge badge-success"><h6>{{ Auth::user()->role}}</h6></strong>
                  @else
                      <strong>No role Asign, </strong>
                  @endif
                </p>
                <ul class="list-group list-group-unbordered">
                  <li class="list-group-item">
                    <b><i class="fa fa-envelope"></i> Email Address</b> <a class="float-right">{{ Auth::user()->email }}</a>
                  </li>
                  <li class="list-group-item">
                    <b><i class="fa fa-phone"></i> Phone:</b> <a class="float-right">{{Auth::user()->phone_number==!NULL ? Auth::user()->phone_number: 'no phone provided'}}</a>
                  </li>
                  <li class="list-group-item">
                    <b><i class="fa fa-user"></i>  Role</b> <a class="float-right">
                      @if (Auth::user()->role)
                        <strong class="badge badge-success">{{ Auth::user()->role}}</strong>
                      @else
                        <strong>No role Asign, </strong>
                      @endif
                    </a>
                  </li>
                </ul>
  
                <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#updateProfileImage" wire:click.prevent="imageDialog({{ Auth::user()->id }})"><b>update profile picture</b></a>
                @include('livewire.backend.account-settings.update-profile-image')
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
           
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card card-outline card-primary" >
                <nav class="p-1">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">  
                        <a class="nav-item nav-link text-primary active" id="nav-home-tab" data-toggle="tab" href="#nav-program" role="tab" aria-controls="nav-home" aria-selected="true">
                            <i class="fa fa-user"></i> <span class="text-dark"> Accounts </span>
                            <span><h3 class="badge badge-dark badge-pill">{{ $dataList['countUsers']}}</h3></span>
                        </a>
                        <a class="nav-item nav-link text-primary" id="nav-home-tab" data-toggle="tab" href="#nav-password" role="tab" aria-controls="nav-home" aria-selected="true">
                          <i class="fa fa-key"></i> <span class="text-dark"> Change Password </span>
                      </a>
                    </div>
                </nav>
                <div class="tab-content card-background" id="nav-tabContent">
                    <hr>
                    <!-- ####################### Display list of all Users############################## -->
                    <div class="tab-pane fade show active" id="nav-program" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="p-2 content-panel">
                            @include('livewire.backend.account-settings.list-users')
                        </div>
                    </div>
                      <!--################################Password Update Tab ########################### -->
                    <div class="tab-pane fade show" id="nav-password" role="tabpanel" aria-labelledby="nav-home-tab">
                      <div class="p-2 content-panel" wire:ignore>
                        {{-- @include('livewire.backend.account-settings.change-password') --}}
                        <livewire:backend.account-settings.update-password />
                      </div>
                      <!-- ###############################END PASSWORD UPDATE############################### -->
                  </div>
                </div>
            </div>
                  
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
</div>