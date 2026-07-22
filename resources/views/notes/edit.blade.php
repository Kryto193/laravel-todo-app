<x-layout title="New note">
    <form method="POST" action="/notes/{note}/edit">
        @csrf
        @method('PATCH')
        <fieldset class="fieldset  w-2/3 bg-base-200 border-base-300 rounded-box  border p-4 mx-auto">
            <legend class="fieldset-legend">Edit Note</legend>

            <label class="label" for="title">{{ $note->title }}</label>
            <input type="text" for="title" name="title" class="input w-full" placeholder="Note Title" />

            <label class="label">D{{ $note->description }}</label>
            <textarea name="description" class="textarea w-full" placeholder="Write your note here"></textarea>

            <button type="submit" class="btn btn-neutral mt-4">Update</button>
        </fieldset>
    </form>

</x-layout>
