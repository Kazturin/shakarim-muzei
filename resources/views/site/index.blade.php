@extends('../layouts.user.main')
@section('content')
    <div class="bg-white p-10 shadow-lg">

        <div class="text-center">
            <h1 class="text-2xl text-center font-montserrat">{{__('site.history')}}</h1>
            <hr class="mx-auto w-96 my-6">
        </div>

        <div class="flex flex-col sm:flex-row">
            <div class="grow mr-4">
                @if($history)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                   {!! $history->{'content_'.app()->getLocale()} !!}
                </div>
                @else
                    <div class="text-xl">{{__('site.nothing_found')}} ...</div>
                @endif
            </div>
            <div class="border-amber-200 border-t pt-4 sm:border-l sm:border-t-0 sm:pt-0">
                <div class="w-full sm:w-52 md:w-80 px-4 mx-auto flex flex-col">
                    @foreach($faculties as $faculty)
                        <a class="block" href="{{route('home',$faculty->id)}}">
                            <x-category-button :active="$history && $history->faculty->id==$faculty->id">
                                {{ $faculty->{'name_'.app()->getLocale()} }}
                            </x-category-button>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection




