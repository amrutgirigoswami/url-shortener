<div class="mt-5 container mx-auto p-5 max-w-6xl">
    <h3 class="text-lg font-semibold mb-3">My Shortened URLs</h3>

    @if($urls->isEmpty())
        <p class="text-gray-600">No URLs found.</p>
    @else
        <div class="overflow-x-auto">
            <table class="w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="border border-gray-300 px-4 py-2">Short URL</th>
                        <th class="border border-gray-300 px-4 py-2">Original URL</th>
                        <th class="border border-gray-300 px-4 py-2">Clicks</th>
                        <th class="border border-gray-300 px-4 py-2">Created</th>
                        <th class="border border-gray-300 px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($urls as $url)
                    <tr class="border border-gray-300 hover:bg-gray-50">
                        <td class="border border-gray-300 px-4 py-2 text-blue-600 underline">
                            <a href="{{ url('/'.$url->short_code) }}" target="_blank">
                                {{ url('/'.$url->short_code) }}
                            </a>
                        </td>
                        <td class="border border-gray-300 px-4 py-2 truncate max-w-xs">
                            {{ $url->original_url }}
                        </td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $url->clicks }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $url->created_at->diffForHumans() }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                            <button wire:click="delete({{ $url->id }})"
                                    class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition"
                                    onclick="return confirm('Are you sure?')">
                                Delete
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
