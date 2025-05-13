<div>
    <h1>Bird Count Form</h1>
    <form wire:submit.prevent="submit">
        <div>
            <label for="birdCount">Bird Count</label>
        <input type="number" wire:model="birdCount" />
        </div>
        <div>
            <label for="notes">Notes</label>
        <textarea wire:model="notes"></textarea>
        </div>
        <div>
        <button type="submit">Add a new entry</button>
        </div>
    </form>
</div>
