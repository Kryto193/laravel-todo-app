<x-layout title="Notes">

    <a href="/notes/create" class="btn btn-primary mt-3">Create a new note</a>
    @if ($notes->isNotEmpty())
        <div class="grid grid-cols-2">
            @foreach ($notes as $note)
                <fieldset class="fieldset  w-2/3 bg-base-200 border-base-300 rounded-box  border p-4 mx-auto">
                    <legend class="fieldset-legend">{{ $note->title }}</legend>
                    <p>{{ $note->description }}</p>
                    <div class="flex">
                        <a href="/notes/{note}/edit" class="btn">Edit</a>
                        <form method="POST" action="/notes/{note}/delete">
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
