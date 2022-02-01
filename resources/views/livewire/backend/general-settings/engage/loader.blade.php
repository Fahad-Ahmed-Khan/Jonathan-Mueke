<div wire:loading 
    wire:target="exportPDF" 
    class="p-2 shadow-lg text-success" 
    style="border-radius: 50px;border-bottom:2px solid rgb(8, 238, 8)">
    <img src="{{URL::to('backend/assets/images/downloadingPDF.gif')}}" width="50" height="50" class="rounded-circle" height="auto" alt="">
    <strong>Downloading in progress. Please wait...</strong>
</div>