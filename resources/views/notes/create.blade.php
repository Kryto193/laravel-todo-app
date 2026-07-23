<x-layout title="New note">
    <form method="POST" action="/notes/create">
        @csrf
        <fieldset class="fieldset  w-2/3 bg-base-200 border-base-300 rounded-box  border p-4 mx-auto">
            <legend class="fieldset-legend">Create a New Note</legend>

            <label class="label" for="title">Title</label>
            <input type="text" for="title" name="title" class="input w-full" placeholder="Note Title" />

            <textarea name="description" id="description" class="textarea w-full" placeholder="Write your note here"></textarea>

            <button type="submit" class="btn btn-neutral mt-4">Create</button>
        </fieldset>
    </form>

</x-layout>
