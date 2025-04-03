<div class="container mx-auto p-5 max-w-4xl">
    <form wire:submit.prevent="shorten" class="space-y-3">
        <div>
            <input type="url" wire:model="originalUrl" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter URL to shorten">
            @error('originalUrl') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">Shorten URL</button>
    </form>


    @if($shortUrl)
        <div class="mt-4 p-4 bg-gray-100 rounded-md">
            <p class="text-gray-700">Short URL: <a href="{{ $shortUrl }}" target="_blank" class="text-blue-600 underline">{{ $shortUrl }}</a></p>
            <button class="mt-2 bg-gray-500 text-white px-3 py-1 rounded hover:bg-gray-600 transition" onclick="navigator.clipboard.writeText('{{ $shortUrl }}')">Copy</button>
        </div>
    @endif

    @if($recentUrls && $recentUrls->count())
        <div class="mt-5">
            <h4 class="text-lg font-semibold">Recent URLs</h4>
            <ul class="mt-2 space-y-2">
                @foreach($recentUrls as $url)
                    <li class="p-2 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 transition">
                        <a href="{{ url("/{$url->short_code}") }}" target="_blank" class="text-blue-600 underline">
                            {{ url("/{$url->short_code}") }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
