<x-layout title="Link">
    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <h1 class="h3 mb-3 fw-normal">Your link</h1>
        <p>{{ $link }}</p>
        <a class="btn btn-primary" href="{{ $link }}">Go to link</a>
        <p class="mt-5 mb-3 text-muted">&copy; 2023</p>
    </form>
</x-layout>
