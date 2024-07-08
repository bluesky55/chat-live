@section('title')
    Dark Room
@endsection
<div>
    {{-- Do your work, then step back. --}}
    <div class="container" style="margin-top: 10%;width: 28rem;height: 18rem">
        <div class="d-flex justify-content-center flex-column">
            <div class="mb-3">
                <h3 class="text-center">Dark Room</h3>
            </div>
            <div class="card card-body bg-dark text-light shadow">
                
                @forelse ($chats as $c)
                    <p>{{ $c->user->name }}: {{ $c->text }}</p>
                @empty
                    <p>Kosong.</p>
                @endforelse
                <form wire:submit.prevents='sendChat'>
                    <div class="d-flex">
                        <input type="text" placeholder="Ketik Pesan..." wire:model.live.debounce.100ms='text' class="form-control">
                        <button type="submit" class="btn btn-success btn-sm">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
