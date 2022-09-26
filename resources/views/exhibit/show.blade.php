@extends('../layouts.user.main',[
    'links'=>[
           ['label'=>__('site.exhibits'),'url'=>'exhibits'],
            $exhibit->{'name_'.app()->getLocale()}
       ]
])
@section('content')
    <div class="bg-white p-10 shadow-lg">
        <div class="flex">
            <div class="grow">
                <h1 class="text-3xl text-center font-semibold">{{__('site.exhibit')}}</h1>
                <hr class="mx-auto w-96 my-6">
            </div>
            <div class="w-40 sm:w-52 md:80 hidden sm:block">
            </div>
        </div>
        <div class="flex flex-col sm:flex-row">
            <div class="grow mr-4 mb-4">
                <div class="rounded overflow-hidden bg-gray-200">
                    <img src="{{asset('/storage/'.$exhibit->image)}}" class="w-full" alt="">
                    <div class="px-4 py-2">
                        <h1 class="text-lg text-center border-gray-400 border-b">{{$exhibit->{'name_'.app()->getLocale()} }}</h1>
                        <p class="py-2">
                            {{$exhibit->{'description_'.app()->getLocale()} }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="border-amber-200 border-t pt-4 sm:border-l sm:border-t-0 sm:pt-0">
                <h1 class="text-xl px-2 font-semibold m-2">{{__('site.recently_added')}}</h1>
                <hr>
                <ul class="w-40 px-4 flex flex-col mt-2 sm:w-52 md:80">
                        @foreach($exhibits as $item)
                        <li class="mb-2">
                            <a class="text-lg" href="{{route('exhibit',$item->id)}}">{{$item->{'name_'.app()->getLocale()} }}</a>
                        </li>
                        @endforeach
                </ul>
            </div>
        </div>

    </div>
@endsection

