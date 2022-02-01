@forelse( $showAll['showRequests'] as $count => $request )
<tr>
    <td>{{ ++$count }}</td>
    <td>
        <input type="checkbox" id="selectAllRequest">
    </td>
    <td>{{ $request->shoutout_title }}
        <br>
            <span class="border-right"></span>&nbsp
            <small>
                <a href="#" class="text-info" data-toggle="modal" 
                    data-target="#editRequest"
                    wire:click.prevent="edit({{ $request->id }})"
                    >
                    <i class="fas fa-pencil-alt"></i> Edit</a>
            </small>&nbsp<span class="border-right"></span>&nbsp<small>
            <a href="#" 
                class="text-danger" 
                data-toggle="modal" 
                data-target="#delete-request-modal" 
                wire:click.prevent="showDeleteConfirmation({{ $request }})">
                <i class="fas fa-trash"></i> Archive
            </a>
            @include('livewire.backend.general-settings.engage.delete')
        </small>
    </td>
    <td>{{ $request->name }}</td>
    <td>{{ $request->email }}</td>
    <td>{{ $request->phone }}</td>
    <td>{{ Str::limit($request->description, 50) }}
        <small>
            <a href="#" class="text-success" data-toggle="modal" data-target="#viewRequest"><i class="fas fa-eye"></i> View more</a>
        </small>
    </td>
    <td>{{ $request->created_by }}</td>
    <td>{{ $request->created_at->diffForHumans() }}</td>
    <td>{{ $request->updated_at->diffForHumans() }}</td>
    
    <td class="bg-white shadow">
        <center>
            <div class="shadow dropdown dropleft bg-success" style="width: 30px; cursor: pointer; height: 30px; border-radius: 50%; " id="dropdownMenu" data-toggle="dropdown"><i class="fas fa-ellipsis-v" style="margin-top: 8px;"  ></i>
                <div class="dropdown-menu" >
                    <a class="dropdown-item" href="#" ><i class="fa fa-eye"></i> View</a>
                    <a class="dropdown-item" href="#" 
                        data-toggle="modal" 
                        data-target="#editRequest"
                        wire:click.prevent="edit({{ $request->id }})"
                        ><i class="fas fa-pencil-alt" ></i> Edit
                    </a>
                    <a class="dropdown-item" href="#"
                        data-toggle="modal"
                        data-target="#delete-request-modal"
                        wire:click.prevent="showDeleteConfirmation({{ $request }})">
                        <i class="fa fa-trash"></i> Archive
                    </a>
                    <a class="dropdown-item" href="#"
                        data-toggle="modal"
                        data-target="#message"
                        >
                        <i class="fa fa-envelope"></i> Reply
                    </a>
                </div>
            </div>
        </center>
    </td>
</tr>
@empty
@include('livewire.backend.general-settings.engage.noshout-out')
@endforelse