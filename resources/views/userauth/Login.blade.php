<x-layout title="Login">

    <form method="POST" action="/login">


        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 m-auto">
            <legend class="fieldset-legend">Login</legend>

            <label class="label" for="email">Email</label>
            <input type="email" class="input" id="email" name="email" placeholder="Email" />

            <label class="label" for="password">Password</label>
            <input type="password" class="input" id="password" name="password" placeholder="Password" />

            <button class="btn btn-neutral mt-4">Login</button>
            <p class="text-center">Don't have an account?<a href="/register" class="text-blue-400 underline">
                    Register</a></p>
        </fieldset>

    </form>
</x-layout>
