<div wire:ignore.self class="shadow modal" id="viewFile" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <strong class="modal-title" title="Document" id="exampleModalLabel">
                   You've opened. {{ $document_title }}
                </strong>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body card-background">
               <iframe src="{{URL::to('storage/'.$document_file)}}" frameborder="0" width="100%" height="500"></iframe>
            </div>
        </div>
    </div>
</div>