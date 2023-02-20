<x-layout title="Register">
    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <h1 class="h3 mb-3 fw-normal">Registration Form</h1>

        <div class="form-floating">
            <input type="text" class="form-control" id="username" name="name" required>
            <label for="username">Username</label>
            @error('username')
            <p>{{ $message }}</p>
            @enderror
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" id="phonenumber" name="phone" required>
            <label for="phonenumber">Phonenumber</label>
            @error('phonenumber')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2023</p>
    </form>
</x-layout>
