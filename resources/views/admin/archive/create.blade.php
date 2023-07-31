@extends('../layouts.admin.main')
@section('content')
    <div class="my-2">
        <x-breadcrumbs :links="[['url'=>route('archives.index'),'label'=>'Архивы'],'Добавить']"></x-breadcrumbs>
    </div>
    <div
        class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
    >

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="bg-red-500 text-white my-2 p-2 rounded">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('archives.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div>
                <ul id="tabs" class="inline-flex pt-2 px-1 w-full border-b">
                    <li class="bg-white px-4 text-gray-800 font-semibold py-2 rounded-t border-t border-r border-l -mb-px"><a id="default-tab" href="#kz">KZ</a></li>
                    <li class="px-4 text-gray-800 font-semibold py-2 rounded-t"><a href="#ru">RU</a></li>
                    <li class="px-4 text-gray-800 font-semibold py-2 rounded-t"><a href="#en">EN</a></li>
                </ul>
                <div id="tab-contents">
                    <div id="kz">
                        <div class="my-2">
                            <label class="block text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Название(kz)</span>
                                <input
                                    class="block w-full rounded border-gray-300 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Name"
                                    name="title_kz"
                                />
                            </label>
                        </div>
                        <div class="my-2">
                            <label class="block text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Content</span>
                                <textarea
                                    id="content"
                                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Content"
                                    name="description_kz">
                                </textarea>
                            </label>
                        </div>
                    </div>

                    <div id="ru" class="hidden">
                        <div class="my-2">
                            <label class="block text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Название(ru)</span>
                                <input
                                    class="block w-full rounded border-gray-300 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Name"
                                    name="title_ru"
                                />
                            </label>
                        </div>
                        <div class="my-2">
                            <label class="block text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Content</span>
                                <textarea
                                    id="content-ru"
                                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Content"
                                    name="description_ru">
                                </textarea>
                            </label>
                        </div>
                    </div>

                    <div id="en" class="hidden">
                        <div class="my-2">
                            <label class="block text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Название(en)</span>
                                <input
                                    class="block w-full rounded border-gray-300 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Name"
                                    name="title_en"
                                />
                            </label>
                        </div>
                        <div class="my-2">
                            <label class="block text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Content</span>
                                <textarea
                                    id="content-en"
                                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Content"
                                    name="description_en">
                                </textarea>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="my-4">
                <input
                    type="file" name="file">
            </div>
            <div class="px-4 py-3 text-right sm:px-6">
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Добавить
                </button>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <script src="{{asset('/ckeditor5/ckeditor.js')}}">
    </script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#content' ),{
                ckfinder:{
                    uploadUrl: "{{route('ckeditor.image-upload', ['_token' => csrf_token() ])}}"
                }
            } )
            .then( editor => {
                console.log('success')
                console.log(editor)
            })
            .catch( error => {
                console.error( error );
            } );
        ClassicEditor
            .create( document.querySelector( '#content-ru' ),{
                ckfinder:{
                    uploadUrl: "{{route('ckeditor.image-upload', ['_token' => csrf_token() ])}}"
                }
            } )
            .then( editor => {
                console.log('success')
                console.log(editor)
            })
            .catch( error => {
                console.error( error );
            } );
        ClassicEditor
            .create( document.querySelector( '#content-en' ),{
                ckfinder:{
                    uploadUrl: "{{route('ckeditor.image-upload', ['_token' => csrf_token() ])}}"
                }
            } )
            .then( editor => {
                console.log('success')
                console.log(editor)
            })
            .catch( error => {
                console.error( error );
            } );
    </script>
    <script>
        let tabsContainer = document.querySelector("#tabs");

        let tabTogglers = tabsContainer.querySelectorAll("#tabs a");

        console.log(tabTogglers);

        tabTogglers.forEach(function(toggler) {
            toggler.addEventListener("click", function(e) {
                e.preventDefault();

                let tabName = this.getAttribute("href");

                let tabContents = document.querySelector("#tab-contents");

                for (let i = 0; i < tabContents.children.length; i++) {

                    tabTogglers[i].parentElement.classList.remove("border-t", "border-r", "border-l", "-mb-px", "bg-white");  tabContents.children[i].classList.remove("hidden");
                    if ("#" + tabContents.children[i].id === tabName) {
                        continue;
                    }
                    tabContents.children[i].classList.add("hidden");

                }
                e.target.parentElement.classList.add("border-t", "border-r", "border-l", "-mb-px", "bg-white");
            });
        });

    </script>
@endpush
