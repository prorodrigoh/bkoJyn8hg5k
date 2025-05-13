<div>
    <h1>Counter</h1>
    <h2>{{ $count }}</h2>
    <button wire:click="increment">Increment</button>
    <button wire:click="decrement">Decrement</button>
    <button wire:click="resetCount">Reset</button>
    <input type="number" wire:model.blur="number">
    <button wire:click="setCount({{ $number }})">Set Counter</button>
</div>
