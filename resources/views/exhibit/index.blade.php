@extends('../layouts.user.main',[
    'links' =>[__('site.exhibits')]
])
@section('content')
<div class="bg-white p-10 shadow-lg">

    <div class="text-center">
            <h1 class="text-2xl text-center font-montserrat">{{__('site.exhibits')}}</h1>
            <hr class="mx-auto w-96 my-6">
    </div>
    <div class="flex">
        <div class="grow mr-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                @foreach($exhibits as $exhibit)
                    <div class="rounded overflow-hidden bg-gray-200  drop-shadow-lg hover:drop-shadow-2xl">
                        <img src="{{asset('/storage/'.$exhibit->image)}}" alt="{{$exhibit->{'name_'.app()->getLocale()} }}">
                        <div class="px-4 py-2">
                            <h1 class="text-lg text-center border-gray-400 border-b">{{$exhibit->{'name_'.app()->getLocale()} }}</h1>
                            <p class="py-2">
                                {!! Illuminate\Support\Str::limit($exhibit->{'description_'.app()->getLocale()},50) !!}
                            </p>
                            <a href="{{route('exhibit',$exhibit->id)}}" class="block underline text-right text-sm hover:text-amber-600">{{__('site.more')}}</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-2">
                {{$exhibits->links()}}
            </div>
        </div>
        <div class="border-amber-200 border-t pt-4 sm:border-l sm:border-t-0 sm:pt-0">
            <div class="w-40 sm:w-52 md:80 px-4 mx-auto flex flex-col">
                @foreach($categories as $category)
                    <a class="block" href="{{route('exhibits.category',$category->id)}}">
                        <x-category-button :active="$category->title==$exhibit->category->title">
                            {{$category->{'title_'.app()->getLocale()} }}
                        </x-category-button>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

</div>
@endsection

