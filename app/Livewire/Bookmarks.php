<?php

namespace App\Livewire;

use App\Models\Bookmark;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Notifications\ActionConfirmed;

class Bookmarks extends Component
{

    public $url;
    public $name;

    public function updatedUrl($value)
    {
        $trimmedValue = trim($value);
        if (!empty($trimmedValue) && !preg_match('/^https?:\/\//i', $trimmedValue)) {
            $this->url = 'https://' . $trimmedValue;
        }
    }

    public function save()
    {

        $trimmedUrl = trim($this->url);
        if (!empty($trimmedUrl) && !preg_match('/^https?:\/\//i', $trimmedUrl)) {
            $this->url = 'https://' . $trimmedUrl;
        } elseif (strpos($trimmedUrl, 'http://') === 0) {
            $this->url = str_replace('http://', 'https://', $this->url);
        }
    
        Auth::user()->bookmarks()->create([
            'url' => $this->url,
            'name' => $this->name,
            'user_id' => Auth::user()->id,
        ]);

        $this->reset(['url', 'name']);
    }

    public function delete($bookmarkId)
    {
        $bookmark = Bookmark::find($bookmarkId);
    
        $this->authorize('delete', $bookmark);

        $bookmark->delete();
    }

    public function sendNotification()
    {
        sleep(5);
        Auth::user()->notify(new ActionConfirmed());
    }
    
    public function mount()
    {
        Auth::loginUsingId(1);
    }

    public function render()
    {
        return view('livewire.bookmarks', [
            'bookmarks' => Auth::user()->bookmarks,
        ]);
    }
}
