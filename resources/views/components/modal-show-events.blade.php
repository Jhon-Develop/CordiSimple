@props(['event'])

{{-- Modal to display event details. --}}
<div id="modal-show{{ $event->id }}" class="overlay modal overlay-open:opacity-100 hidden" role="dialog" tabindex="-1">
    <div class="modal-dialog overlay-open:opacity-100">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">General Information</h3>
                <button type="button" class="btn btn-text btn-circle btn-sm absolute end-3 top-3" aria-label="Close"
                    data-overlay="#modal-show{{ $event->id }}">
                    <span class="icon-[tabler--x] size-4"></span>
                </button>
            </div>
            <div class="modal-body">
                <p><span class="font-bold">Name: </span>{{ $event->name }}</p>
                <p><span class="font-bold">Description: </span>{{ $event->description }}</p>
                <p><span class="font-bold">Date: </span>{{ $event->date }}</p>
                <p><span class="font-bold">Time: </span>{{ $event->time }}</p>
                <p><span class="font-bold">Location: </span>{{ $event->location }}</p>
                <p><span class="font-bold">Max Seats: </span>{{ $event->max_seats }}</p>
                <p><span class="font-bold">Available Seats: </span>{{ $event->available_seats }}</p>
                <p><span class="font-bold">Status: </span>{{ $event->status }}</p>
                <p><span class="font-bold">Created By: </span>{{ $event->user?->name ?? 'Name is not available' }}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-soft btn-warning"
                    data-overlay="#modal-show{{ $event->id }}">Close</button>
            </div>
        </div>
    </div>
</div>
