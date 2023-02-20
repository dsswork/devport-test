<x-layout title="Register">
    <div>
        <button class="btn btn-danger my-2" form="play">Imfeelinglucky</button>
        <button class="btn btn-success my-2" data-bs-toggle="modal" data-bs-target="#history">History
        </button>
        <button class="btn btn-dark my-2" form="deactivate">Deactivate Link</button>
        <button class="btn btn-primary my-2" form="generate">Generate New Link</button>
    </div>
    @if($points)
        <div>
            <h2>Points: {{ $points }}</h2>
        </div>
        <div>
            @if($isWin)
                <button class="btn btn-success">WIN {{ $value }}</button>
            @else
                <button class="btn btn-secondary">LOSE</button>
            @endif
        </div>
    @endif

    <form action="{{ route('links.destroy', compact('link')) }}" method="post" id="deactivate">
        @csrf
        @method('delete')
    </form>

    <form action="{{ route('site.play', compact('slug')) }}" method="post" id="play">
        @csrf
        @method('post')
        <input type="text" name="play" value="1" hidden>
    </form>

    <form action="{{ route('links.store') }}" method="post" id="activate">
        @csrf
        @method('post')
    </form>

    <form action="{{ route('links.store') }}" method="post" id="generate">
        @csrf
        @method('post')
        <input type="text" name="user_id" value="{{ $user_id }}" hidden>
    </form>

    <x-history-modal :$history/>

</x-layout>
