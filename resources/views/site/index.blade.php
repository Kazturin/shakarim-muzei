@extends('../layouts.user.main')
@section('content')
    <div class="bg-white p-10 shadow-lg">

{{--        <div class="text-center">--}}
{{--            <h1 class="text-2xl text-center font-montserrat">{{ $history?->{'title_'.app()->getLocale()} }}</h1>--}}
{{--            <hr class="mx-auto w-96 my-6">--}}
{{--        </div>--}}

        <div class="flex">
            <div class="grow">
                <h1 class="font-montserrat text-lg md:text-xl text-center font-semibold uppercase">{{ $history?->{'title_'.app()->getLocale()} }}</h1>
                <hr class="mx-auto w-96 my-6">
            </div>
            <div class="sm:w-52 md:w-80 hidden sm:block">
            </div>
        </div>

        <div class="flex flex-col sm:flex-row">
            <div class="grow mr-4">
                @if($history)
                <div>
                   {!! $history->{'content_'.app()->getLocale()} !!}
                </div>
                @else
                    <div class="text-xl">{{__('site.nothing_found')}} ...</div>
                @endif
            </div>
            <div class="border-amber-200 border-t pt-4 sm:border-l sm:border-t-0 sm:pt-0">
                <div class="w-full md:w-52 lg:w-80 px-4 mx-auto flex flex-col">
                    @foreach($categories as $category)
                        <a class="block" href="{{route('home',$category->id)}}">
                            <x-category-button :active="$history && $history->category->id==$category->id">
                                {{ $category->{'name_'.app()->getLocale()} }}
                            </x-category-button>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection




