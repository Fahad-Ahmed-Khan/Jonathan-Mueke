<div class="p-2 text-right text-white pull-right">
    <a class="btn btn-primary btn-sm border-radius" href="#" data-toggle="modal" data-target="#addUser" title="create news">
        <i class="fa fa-user-plus"></i> new user
    </a>
</div>
<div class="row">
    <div class="col-md-12">
        <table id="userAccount" class="table shadow table-striped table-responsive table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Role</th>
                <th>Created on</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($dataList['listUsersAccount'] as $count => $user)
              <tr>
                <td>
                  <a href="#" data-toggle="modal" data-target="#updateProductImage-{{ $user->id }}">
                    
                      @if ($user->cover_image == NULL)
                        <span class="px-3 py-3 text-white img-circle elevation-1 bg-warning">
                          <strong style="color: #fff !important;">
                              <!--Display first and second letters -->
                              <?php
                              $str=$user->name;
                              echo strtoupper($str[0]).''.strtoupper($str[1]) ;
                              ?>
                              <!--====================end-================= -->
                          </strong>
                        </span>
                      
                      {{-- {{URL::to('images/logo.png')}} --}}
                      @else
                        <img src="{{URL::to('storage/'.$user->cover_image)}}" class="rounded-circle" 
                        width="50" height="50" alt="logo" />
                      @endif
                  
                  </a>
                </td>
                <td style="width: 20%">{{ $user->name }}</td>
                <td style="width: 20%">{{ $user->email }}</td>
                <td style="width: 20%">{{ $user->phone_number }}</td>
                <td>{{ $user->role}}</td>
                <td style="width: 20%">{{ $user->created_at}}</td>
                <td style="width: 20%">
                    <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editUser" wire:click.prevent="edit({{$user->id}} )"><i class="fa fa-edit"></i></a>
                    <a href="#" class="btn btn-danger btn-sm" wire:click.prevent="deleteUserConfirmaton({{$user}})" data-target="#delete-user-modal" data-toggle="modal">
                      <i class="fa fa-trash"></i>
                    </a>
                </td>
              </tr>
                <!--including the edit modal -->
              @empty
                <tr>
                  <td></td> <td></td><td></td>
                  <td>
                      <span class="text-danger"><i class="fa fa-exclamation-triangle"></i> No account registered found
                    </span>
                </td>
                  <td></td><td></td>
                </tr>
              @endforelse
            </tbody>
        </table>
    </div>
</div>

@include('livewire.backend.account-settings.delete')
@include('livewire.backend.account-settings.edit')
@include('livewire.backend.account-settings.create')