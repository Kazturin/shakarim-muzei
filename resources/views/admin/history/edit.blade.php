@extends('../layouts.admin.main')
@section('content')
    <div class="my-2">
        <x-breadcrumbs :links="[['url'=>route('history.index'),'label'=>'История музея'],'Редактировать']"></x-breadcrumbs>
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

        <form action="{{ route('history.update', $history->id) }}" method="POST">
            @csrf
            @method('patch')
            <div>
                <ul id="tabs" class="inline-flex pt-2 px-1 w-full border-b">
                    <li class="bg-white px-4 text-gray-800 font-semibold py-2 rounded-t border-t border-r border-l -mb-px"><a id="default-tab" href="#kz">KZ</a></li>
                    <li class="px-4 text-gray-800 font-semibold py-2 rounded-t"><a href="#ru">RU</a></li>
                    <li class="px-4 text-gray-800 font-semibold py-2 rounded-t"><a href="#en">EN</a></li>
                </ul>

                <div class="my-2">
                    <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  Категория
                </span>
                        <select
                            required
                            name="category_id"
                            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                        >
                            <option value="">Выберите</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}" {{ $category->id==$history->category_id? 'selected':null }}>{{$category->name_kz}}</option>
                            @endforeach
                        </select>
                    </label>
                </div>

                <div id="tab-contents">
                    <div id="kz">
                        <div class="my-2">
                            <label class="block text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Title</span>
                                <input
                                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Name"
                                    name="title_kz"
                                    value="{{$history->title_kz}}"
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
                                    name="content_kz">
                                    {{trim($history->content_kz)}}
                                </textarea>
                            </label>
                        </div>
                    </div>
                    <div id="ru" class="hidden">
                        <div class="my-2">
                            <label class="block text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Title</span>
                                <input
                                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Name"
                                    name="title_ru"
                                    value="{{$history->title_ru}}"
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
                                    name="content_ru">
                                    {{trim($history->content_ru)}}
                                </textarea>
                            </label>
                        </div>
                    </div>
                    <div id="en" class="hidden">
                        <div class="my-2">
                            <label class="block text-sm">
                                <span class="text-gray-700 dark:text-gray-400">Title</span>
                                <input
                                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    placeholder="Name"
                                    name="title_en"
                                    value="{{$history->title_en}}"
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
                                    name="content_en">
                                    {{trim($history->content_en)}}
                                </textarea>
                            </label>
                        </div>
                    </div>
                </div>

            </div>
            <div class="px-4 py-3 text-right sm:px-6">
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Изменить
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

