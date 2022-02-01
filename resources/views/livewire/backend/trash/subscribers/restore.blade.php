<div wire:ignore.self class="shadow modal fade" id="restore" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <strong class="modal-title" title="Executive Role" id="exampleModalLabel"><i class="fa fa-user-tag"></i>Restore From trash Confirmation</strong>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body card-background">
                <strong>Are you sure you want to restore  <strong class="text-danger">{{ $name }} </strong> ? Subscription information</strong>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Discard</button>
                <button type="button" 
                        wire:click.prevent="restore"  
                        wire:model.lazy="restore"
                        class="btn btn-success btn-sm">Confirm
                    </button>
            </div>
        </div>
    </div>
</div>