{{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    {{-- <h1 class="m-0 mt-4 ml-2 text-muted"><strong>Welcome</strong>, {{Auth::user()->name}}!</h1> --}}
                    <ol class="m-0 mt-4 ml-2 breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{url('/home')}}"><i class="fa fa-home"></i></a></li>
                        <li class="breadcrumb-item active"><a href="{{url('/home')}}">Region</a></li>
                        <li class="breadcrumb-item active">Region Settings</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--section 1-->
    <section class="content">

        <div class="row"> 
          <!-- /.col -->
          <div class="col-lg-12">
            <div class="card card-outline " >
                <nav class="p-1" style="background: #1f3c6b">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">  
                        <a class="nav-item nav-link text-success active" id="nav-home-tab" data-toggle="tab" href="#nav-program" role="tab" aria-controls="nav-home" aria-selected="true">
                            <i class="fa fa-home"></i> <strong class="text-success"> County </strong>
                            <span><h3 class="badge badge-success badge-pill">{{ $showInRegion['countCounties'] }}</h3></span>
                        </a>
                        <a class="nav-item nav-link text-success" id="nav-home-tab" data-toggle="tab" href="#nav-password" role="tab" aria-controls="nav-home" aria-selected="true">
                          <i class="fa fa-factory"></i> <strong class="text-success">Constituency</strong>
                          <span><h3 class="badge badge-success badge-pill">{{ $showInRegion['countConstituencies'] }}</h3></span>
                      </a>
                    </div>
                </nav>
                <div class="tab-content card-background" id="nav-tabContent">
                    <hr>
                    <!-- ####################### Counties############################## -->
                    <div class="tab-pane fade show active" id="nav-program" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="p-2 content-panel">
                            <livewire:backend.general-settings.regions.county.county-settings />
                        </div>
                    </div>
                      <!--################################Constituency ########################### -->
                    <div class="tab-pane fade show" id="nav-password" role="tabpanel" aria-labelledby="nav-home-tab">
                      <div class="p-2 content-panel">
                        <livewire:backend.general-settings.regions.constituency.constituency-settings />
                      </div>
                      <!-- ###############################ENDCONSTITUENCY############################### -->
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
