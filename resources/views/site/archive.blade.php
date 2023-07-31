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
            <div class="w-4/5 mr-4 mb-4">
                <ul class="define">
                    @foreach($archives as $archive)
                        <li class="flex items-center">
                            <a class="text-lg underline mr-2" href="{{ asset('/storage/'.$archive->filename) }}" target="_blank">{{ $archive->{'title_'.app()->getLocale()} }}</a>
                            @if($archive->{'description_'.app()->getLocale()})
                            <button onclick="Livewire.emit('openModal', 'modal-info',{{ json_encode(["title" => $archive->{'title_'.app()->getLocale()},'content'=>$archive->{'description_'.app()->getLocale()}]) }})">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#1266f1" class="bi bi-info-square-fill" viewBox="0 0 16 16"> <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.93 4.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM8 5.5a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/> </svg>
                            </button>
                            @endif
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

