<?php

namespace App\Livewire;

use App\Models\Url;
use Livewire\Component;
use App\Helpers\ShortCodeGenerator;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;

#[Layout('layouts.app')]
class ShortenUrl extends Component
{
    public $originalUrl;
    public $shortUrl;
    public $recentUrls;

    protected $rules = [
        'originalUrl' => 'required|url',
    ];

    public function shorten()
    {
        $this->validate();

        $shortCode = ShortCodeGenerator::generate();

        $url = Url::create([
            'original_url' => $this->originalUrl,
            'short_code' => $shortCode,
            'user_id' => Auth::user()->id, // Associate with logged-in user
        ]);

        $this->shortUrl = url("/{$shortCode}");
        $this->recentUrls = Url::where('user_id',Auth::user()->id)->latest()->take(5)->get();
        $this->reset('originalUrl');
    }
    public function render()
    {
        return view('livewire.shorten-url');
    }
}
