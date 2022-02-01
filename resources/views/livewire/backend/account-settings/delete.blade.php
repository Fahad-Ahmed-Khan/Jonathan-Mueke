<div wire:ignore.self class="shadow modal fade" id="delete-user-modal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <strong class="modal-title" title="Executive Role" id="exampleModalLabel"><i class="fa fa-user-tag"></i> Delete Confirmation</strong>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body card-background">
                <strong>You're about to delete  <strong class="text-danger">{{$name}} </strong> ? This Action is irreversible</strong>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Discard</button>
                <button type="button" wire:click.prevent="destroy" class="btn btn-success btn-sm">Confirm</button>
            </div>
        </div>
        <div wire:loading wire:target="destroy" class="text-success">
            <img src="{{URL::to('backend/assets/images/green2Loading.gif')}}" width="50" height="50" class="rounded-circle" height="auto" alt="">
            <strong>Moving account to trash. Please wait...</strong></div>

    </div>
</div>