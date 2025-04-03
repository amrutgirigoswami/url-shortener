<?php

namespace App\Livewire;

use App\Models\Url;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;

#[Layout('layouts.app')]
class UserLinks extends Component
{
    public $urls;

    public function mount()
    {
        $this->urls = Url::where('user_id', Auth::user()->id)
                        ->latest()
                        ->get();
    }

    public function delete($id)
    {
        Url::findOrFail($id)->delete();
        $this->mount(); // Refresh the list
    }

    public function render()
    {
        return view('livewire.user-links');
    }
}
