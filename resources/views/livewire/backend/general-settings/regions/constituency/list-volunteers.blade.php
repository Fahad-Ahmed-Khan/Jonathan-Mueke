<div wire:ignore.self class="shadow modal" id="listVolunteer" tabindex="-1" role="dialog"
aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <strong class="modal-title" title="Social Media" id="exampleModalLabel">
                Voluteers From: {{ $constituency->name }} Constituency ,{{ $constituency->county->name }} County</strong>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <h3> <span class="float-right shadow badge badge-warning badge-pill">{{ $constituency->volunteers->count() }} </span></h3>
            <span>
                <div class="shadow btn-group">
                    <a  href="#" class="btn btn-sm btn-danger" title="Print Voluteers From: {{ $constituency->name }} Constituency ,{{ $constituency->county->name }} County" > <i class="fa fa-print"></i> Print</a>
                    <a href='#' class="btn btn-sm btn-info" title="download  PDF format" > <i class="fa fa-file"></i> Export PDF </a>
                    <a href='#' class="btn btn-sm btn-warning" title="Convert to CSV file" > <i class="fa fa-file-excel"></i> CSV file </a>
                </div>
            </span><br><hr>
            <div class="row">
                <div class="col-lg-12">
                    <table id="constituencyVolunteerTable" class="table shadow table-striped table-hover table-responsive">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Category</th>
                                <th>County</th>
                                <th>Constituency</th>
                                <th>Registered on</th>
                                <th>Updated on</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($constituency->volunteers as $count => $volunteer)
                                <tr>
                                    <td>{{ ++ $count }}</td>
                                    <td><span>{{ $volunteer->name }}</span></td>
                                    <td><span >{{ $volunteer->email }}</span></td>
                                    <td><span>{{ $volunteer->phone }}</span></td>
                                    <td>{{ $volunteer->volunteer_category }}</td>
                                    <td>{{ $constituency->county->name }}</td>
                                    <td>{{ $constituency->name }}</td>
                                    <td><span>{{ $volunteer->created_at }}</span></td>
                                    <td><span>{{ $volunteer->updated_at }}</span></td>
                                    <td  class="shadow">
                                        <small>
                                            <a href="#" class="text-info" data-toggle="modal" data-target="#" wire:click.prevent=""><i class="fas fa-pencil-alt"></i> Edit</a>
                                            &nbsp<span class="border-right"></span>&nbsp
                                            <a href="#" class="text-warning" data-toggle="modal" data-target="#" wire:click.prevent=""><i class="fas fa-lock"></i> Suspend</a>
                                            &nbsp<span class="border-right"></span>&nbsp
                                            <a href="#" class="text-success" data-toggle="modal" data-target="#"  wire:click.prevent=""><i class="fas fa-envelope"></i> Email</a>
                                            &nbsp<span class="border-right"></span>&nbsp
                                            <a href="#" class="text-danger" data-toggle="modal" data-target="#"  wire:click.prevent=""><i class="fas fa-trash"></i> Archive</a>
                                        </small>
                                    </td>
                                </tr>
                            @empty
                                No volunteer Registered 
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>