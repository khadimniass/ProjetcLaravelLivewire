<div>
   <h1>&#128161; {{ $bridghtness }}%</h1>

    <div class="progress" style="height: 30px;">
        <div class="progress-bar progress-bar-striped bg-warning progress-bar-animated" role="progressbar" style="width: {{ $bridghtness }}%"
             aria-valuenow="{{ $bridghtness }}" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <div class="mt-3">
        <button class="btn btn-danger" wire:click="off">Off</button>
        <button class="btn btn-secondary" wire:click="increment">+</button>
        <button class="btn btn-secondary" wire:click="decrement">-</button>
        <button class="btn btn-primary" wire:click="on">On</button>
    </div>
</div>
