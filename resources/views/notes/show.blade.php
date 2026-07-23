<x-layout title="{{ $note->title }}">

    <a href="/notes" class="btn btn-primary">Back</a>

    <p class="text-3xl mt-3 font-bold mb-3">{{ $note->title }}</p>
    <textarea name="description" id="description" class="textarea w-full" placeholder="{{ $note->description }}" readonly></textarea>

    <div class="flex">
        <a href="/notes/{{ $note->id }}/edit" class="btn">Edit</a>
        <form method="POST" action="/notes/{{ $note->id }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn">Delete</button>
        </form>

</x-layout>
