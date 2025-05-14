<div>
    <h1>Bookmarks</h1>
    <p>User: {{ Auth::user()->name }}</p>
    <form wire:submit='save'>
        <input type="text" wire:model.blur="name">
        <input type="text" wire:model.blur="url">
        <button type="submit">Save</button>
    </form>

<form wire:submit='sendNotification' wire:confirm="Are you sure?">
    <p wire:loading>
        <span wire:loading.delay>
            <i class="fa fa-spinner fa-spin"></i>
        </span>
        Sending message to {{ Auth::user()->name }}. Please wait...
    </p>
    <button type="submit">Send Notification</button>
</form>
    

    <div>
    @foreach($bookmarks as $bookmark)
        <p>{{ $bookmark->name }} : <a href="{{ $bookmark->url }}">{{ $bookmark->url }}</a></p>
        <button wire:click="delete({{ $bookmark->id }})">Delete</button>
    @endforeach
    </div>

</div>
