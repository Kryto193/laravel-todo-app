<div class="navbar bg-base-100 shadow-sm">
    <div class="navbar-start">
        <div class="dropdown">
            
            @if (!request()->is('/'))
                <a href="{{ url()->previous() }}" class="btn">Back</a>
            @endif
        </div>
        <a href="/" class="btn btn-ghost text-xl">Notes</a>
    </div>
    <div class="navbar-center hidden lg:flex">

    </div>
    @guest
        <div class="navbar-end">
            <a href="/register" class="btn">Register/Login</a>
        </div>
    @endguest
    @auth
        <form method="POST" action="/logout" class="navbar-end">
            @csrf
            @method('DELETE')
            <button class="btn btn-ghost">Logout</button>
        </form>
    @endauth
</div>
