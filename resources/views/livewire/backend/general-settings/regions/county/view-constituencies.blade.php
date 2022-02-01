<div wire:ignore.self class="shadow modal fade" id="viewConstituency" tabindex="-1" role="dialog"
aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <strong class="modal-title" title="Social Media" id="exampleModalLabel">
                Constituencies in {{ $constituecy->county->name }} County</strong>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <input type="hidden" wire:model="constituency_id">
        </div>
        <div class="modal-body card-background">
            <h3> <span class="float-right shadow badge badge-warning badge-pill">{{ $constituecy->volunteers->count() }} </span></h3>
            <span>
                <div class="shadow btn-group">
                    <a  href="#" class="btn btn-sm btn-danger" title="{{ $constituecy->name }} Constituency ,{{ $constituecy->county->name }} County" > <i class="fa fa-print"></i> Print</a>
                    <a href='#' class="btn btn-sm btn-info" type data-toggle="tooltip" title="download  PDF format" > <i class="fa fa-file"></i> Export PDF </a>
                    <a href='#' class="btn btn-sm btn-warning" type title="Convert to CSV file" > <i class="fa fa-file-excel"></i> CSV file </a>
                </div>
                <button class="float-right btn theme-purple btn-sm" type data-toggle="tooltip" title="All information submitted">
                    <span style="color:#fff !important">Applied</span>
                    <span style="color:#fff !important">100%</span>
                </button>
            </span><br><hr>
            <div class="row">
                <div class="col-lg-12">
                    <table id="constituencyVolunteerTable" class="table shadow table-striped table-hover table-responsive">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Constituency</th>
                                <th>Volunteers</th>
                                <th>Registered on</th>
                                <th>Updated on</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{ $constituecy->name}}
                            @foreach ($counties->constituencies as $count => $constituecy)
                                <tr>
                                    <td>{{ ++ $count }}</td>
                                    <td><span>{{ $constituecy->county->name }}</span></td>
                                    <td><span >{{ $constituecy->name }}</span></td>
                                    <td><span class="text-success">
                                        @forelse ($constituecy->volunteers as $volunteer)
                                            {{ $volunteer->name }}
                                        @empty
                                            <span class="text-danger">No Volunteer </span>
                                        @endforelse
                                        </span></td>
                                    <td><span>{{ $constituecy->created_at }}</span></td>
                                    <td><span>{{ $constituecy->updated_at }}</span></td>
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
                            @endforeach
                       
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>