<x-layout title="New note">
    <form method="POST" action="/notes/{{ $note->id }}">
    @csrf
    @method('PATCH')

    <fieldset class="fieldset  w-2/3 bg-base-200 border-base-300 rounded-box  border p-4 mx-auto">
        <legend class="fieldset-legend">Edit Note</legend>

        <label class="label" for="title">Title</label>
        <input type="text" for="title" name="title" class="input w-full" value="{{ $note->title }}" />

        
        <textarea name="updated" id="updated" class="textarea w-full" value=""> {{ $note->description }}</textarea>

        <button type="submit" class="btn btn-neutral mt-4">Update</button>
    </fieldset>
    </form>

</x-layout>
