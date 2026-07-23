<x-layout title="Notes">

    <a href="/notes/create" class="btn btn-primary mt-3 mx-5 mb-4">Create a new note</a>
    @if ($notes->isNotEmpty())
        <div class="grid grid-cols-2 px-5 gap-2">
            @foreach ($notes as $note)
                <fieldset class="fieldset w-full bg-base-200 border-base-300 rounded-box  border p-4 mx-auto">
                    <legend class="fieldset-legend">{{ $note->title }}</legend>
                    <p class="truncate">{{ $note->description }}</p>
                    <div class="flex">
                        <a href="/notes/{{ $note->id }}" class="btn">View</a>

                        <a href="/notes/{{ $note->id }}/edit" class="btn">Edit</a>
                        <form method="POST" action="/notes/{{ $note->id }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn">Delete</button>
                        </form>
                    </div>
                </fieldset>
            @endforeach
        @else
            <p class="mt-4 mx-10 w-full text-gray-500 italic text-center">No notes found. Press the Create a new Note
                button
                to create one.</p>
    @endif
    </div>
</x-layout>
