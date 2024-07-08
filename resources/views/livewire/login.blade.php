<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="container" style="margin-top: 10%;width: 28rem;height: 18rem">
        <div class="d-flex justify-content-center flex-column">
            <div class="mb-3">
                <h3 class="text-center">Dark Room</h3>
            </div>
            <div class="card card-body bg-dark text-light shadow">
                <form wire:submit.prevents='login'>
                    <div class="mb-3">
                        <label for="" class="form-label">Username:</label>
                        <input type="text" placeholder="Username..." wire:model.defer='username' class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Password:</label>
                        <input type="password" placeholder="Password..." wire:model.defer='password' class="form-control">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Login</button>
                        <a href="/" class="btn btn-danger">Keluar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
