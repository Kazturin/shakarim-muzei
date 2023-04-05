<div class="bg-white flex items-center flex-wrap border border-gray-200 py-3 my-2 px-5 rounded-lg">
    <ul class="flex items-center">
        <li class="inline-flex items-center">
            <a href="{{route('home')}}" class="text-gray-600 hover:text-amber-500">
                <svg class="w-5 h-auto fill-current mx-2 text-gray-400 hover:text-amber-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M10 19v-5h4v5c0 .55.45 1 1 1h3c.55 0 1-.45 1-1v-7h1.7c.46 0 .68-.57.33-.87L12.67 3.6c-.38-.34-.96-.34-1.34 0l-8.36 7.53c-.34.3-.13.87.33.87H5v7c0 .55.45 1 1 1h3c.55 0 1-.45 1-1z"/></svg>
            </a>

            <span class="mx-2 h-auto text-gray-400 font-medium">/</span>
        </li>
        @foreach($links as $link)
            @if(!is_array($link))
                <li class="inline-flex items-center text-gray-500">
                   {{$link}}
                </li>
                @break
            @endif
        <li class="inline-flex items-center">
            <a href="{{$link['url']}}" class="text-gray-600 hover:text-amber-600">
                {{$link['label']}}
            </a>
            <span class="mx-2 h-auto text-gray-400 font-medium">/</span>
        </li>
        @endforeach
    </ul>
</div>
