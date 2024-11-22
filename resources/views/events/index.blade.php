@extends('layouts.event')

@section('content')
    <div class="my-8">
        <h1 class="text-center text-5xl font-semibold font-mono  text-orange-600/75">EVENTS</h1>
    </div>
    {{-- create event button --}}
    <div class="flex justify-end m-6">
        <button type="button" class="btn btn-gradient btn-success" aria-haspopup="dialog" aria-expanded="false"
            aria-controls="modal-create{{ 0 }}" data-overlay="#modal-create{{ 0 }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" viewBox="0 0 24 24">
                <g fill="none">
                    <path
                        d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                    <path fill="currentColor"
                        d="M10.5 20a1.5 1.5 0 0 0 3 0v-6.5H20a1.5 1.5 0 0 0 0-3h-6.5V4a1.5 1.5 0 0 0-3 0v6.5H4a1.5 1.5 0 0 0 0 3h6.5z" />
                </g>
            </svg> New Event
        </button>
        <x-modal-create-events />
    </div>

    {{-- Table to display the events --}}
    <div class="card w-full">
        <div class="w-full overflow-x-auto">
            <table class="table bg-cBlack">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Location</th>
                        <th>status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($events as $event)
                        <tr class="hover">
                            <td class="text-nowrap">{{ $event->name }}</td>
                            <td>{{ $event->date }}</td>
                            <td class="text-nowrap">{{ $event->time }}</td>
                            <td class="text-nowrap">{{ $event->location }}</td>

                            {{-- Calls the component to define the status. --}}
                            <td><x-status-events :status="$event->status" /></td>

                            {{-- It calls the component to display event details and sends as parameter the object. --}}
                            <x-modal-show-events :event="$event" />

                            {{-- Calls the component to confirm event deletion and sends the object as a parameter. --}}
                            <x-modal-delete-events :event="$event" />
                            <td>
                                <button type="button" title="Delete Event" class="btn btn-circle btn-text btn-sm"
                                    aria-label="Action button" aria-haspopup="dialog" aria-expanded="false"
                                    aria-controls="modal-delete{{ $event->id }}"
                                    data-overlay="#modal-delete{{ $event->id }}"><span
                                        class="icon-[tabler--trash]"></span></button>

                                <button type="button" title="Show Details" class="btn btn-circle btn-text btn-sm"
                                    aria-label="Action button" aria-haspopup="dialog" aria-expanded="false"
                                    aria-controls="modal-show{{ $event->id }}"
                                    data-overlay="#modal-show{{ $event->id }}"><span
                                        class="icon-[tabler--list-search]"></span></button>

                                <button type="button" title="Edit Event" class="btn btn-circle btn-text btn-sm"
                                    aria-label="Action button" aria-haspopup="dialog" aria-expanded="false"
                                    aria-controls="modal-create{{ $event->id }}" data-overlay="#modal-create{{ $event->id }}"><span
                                        class="icon-[tabler--edit]"></span></button>
                            </td>
                            {{-- Calls the component to edit event and sends the object as a parameter. --}}
                            <x-modal-create-events :event="$event" />
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-4 whitespace-nowrap text-center">No events available</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
