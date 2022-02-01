<div wire:ignore.self class="shadow modal fade" id="delete-county-modal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <input type="hidden" wire:model="county_id">
                <strong class="modal-title" title="Executive Role" id="exampleModalLabel"><i class="fa fa-user-tag"></i> Deletion Confirmation</strong>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body card-background">
                <div  class="p-2 shadow alert-danger" style="border-radius: 20px 0 50px 0">
                    <strong>You're about to delete  ( {{ $code }} County ) ? This Action is irreversible
                    <i class="fa fa-exclamation-triangle"></i>
                    </strong>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Discard</button>
                <button type="button" wire:click.prevent="destroy" class="btn btn-success btn-sm">Confirm</button>
            </div>
        </div>
    </div>
</div>