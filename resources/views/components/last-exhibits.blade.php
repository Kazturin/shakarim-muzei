<div class="rounded-md border-amber-200 border-t pt-4 sm:border-l sm:border-t-0 sm:pt-0">
    <h1 class="pb-2 text-center border-b border-gray-200 text-xl px-2 font-semibold m-2">{{__('site.recently_added')}}</h1>

    <ul class="w-full px-4 flex flex-col mt-2">
        @foreach($exhibits as $item)
            <li class="mb-2 border-b border-gray-200">
                <div class="flex w-full items-center">
                    <div>
                        <img class="w-18" src="{{asset('/storage/'.$item->image)}}" alt="{{ $item->name_kz }}">
                    </div>
                    <div class="ml-2">
                        <a class="text-lg" href="{{route('exhibit',$item->id)}}">{{$item->{'name_'.app()->getLocale()} }}</a>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
</div>
