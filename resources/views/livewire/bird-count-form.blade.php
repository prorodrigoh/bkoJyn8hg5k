<div>
    <h1>Bird Count Form</h1>
    <form wire:submit.prevent="submit">
        <div>
            <label for="bird_count">Bird Count</label>
        <input type="number" wire:model="bird_count" />
        </div>
        <div>
            <label for="notes">Notes</label>
        <textarea wire:model="notes"></textarea>
        </div>
        <div>
        <button type="submit">Add a new entry</button>
        </div>
    </form>
    @if($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div>
        @foreach ($entries as $entry)
            <div>
                <ul>
                    <li>Bird Count: {{ $entry->bird_count }}</li>
                    <li>Notes: {{ $entry->notes }}</li>
                </ul>
            </div>
        @endforeach
    </div>
</div>
