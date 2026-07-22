<x-layout title="Homepage">

    @if (auth()->check())
        <p>Welcome {{ auth()->user()->username }}</p>
    @else
        <p>Welcome Guest</p>
    @endif
@auth
    <a href="/notes" class="btn btn-primary mt-3">View Your Notes</a>

    <a href="/notes/create" class="btn btn-primary mt-3">Create a new note</a>

@endauth
@guest
    <p class="text-center text-4xl w-full hover:text-blue-400 text-gray-600"><a href="/login">Please Login to create a new note</a></p>
@endguest


</x-layout>
