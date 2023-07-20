@extends('../layouts.user.main',[
    'links' =>[__('site.archive')]
])
@section('content')
    <div class="bg-white p-10 shadow-lg">

        <div class="flex">
            <div class="grow">
                <h1 class="text-3xl text-center font-semibold">{{__('site.archive')}}</h1>
                <hr class="mx-auto w-96 my-6">
            </div>
            <div class="w-40 sm:w-52 md:80 hidden sm:block">
            </div>
        </div>
        <div class="flex flex-col sm:flex-row">
            <div class="grow mr-4 mb-4">
                <ul>
                    @foreach($archives as $archive)
                        <li>
                            <a class="text-xl" href="{{ asset('/storage/'.$archive->filename) }}" target="_blank">{{ $archive->{'title_'.app()->getLocale()} }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="w-1/5">
                <x-last-exhibits/>
            </div>
        </div>

    </div>
@endsection
