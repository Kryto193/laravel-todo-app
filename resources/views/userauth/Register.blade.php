<x-layout title="Register">

    <form method="POST" action="/register">
        @csrf
        
        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 m-auto">
            <legend class="fieldset-legend">Register</legend>


            <label class="label" for="username">Name</label>
            <input type="string" id="username" name="username" class="input" placeholder="Enter Your Username" />

            <label class="label" for="email">Email</label>
            <input type="email" class="input" id="email" name="email" placeholder="Email" />

            <label class="label">Password</label>
            <input type="password" class="input" placeholder="Password" />

            <button class="btn btn-neutral mt-4">Login</button>
            <p class="text-center">Already have an account?<a href="/login" class="text-blue-400 underline"> Login</a></p>
        </fieldset>
    </form>
</x-layout>
