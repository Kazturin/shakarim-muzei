@extends('../layouts.admin.main')
@section('content')
    <x-breadcrumbs :links="[['url'=>route('archives.index'),'label'=>'Архивы'],'Редактировать']"></x-breadcrumbs>
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

        <form action="{{ route('archives.update',$archive->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="my-2">
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Название файла(kz)</span>
                    <input
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        placeholder="Название файла"
                        name="title_kz"
                        value="{{$archive->title_kz}}"
                    />
                </label>
            </div>
            <div class="my-2">
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Название файла(ru)</span>
                    <input
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        placeholder="Название файла"
                        name="title_ru"
                        value="{{$archive->title_ru}}"
                    />
                </label>
            </div>
            <div class="my-2">
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Название файла(en)</span>
                    <input
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        placeholder="Название файла"
                        name="title_en"
                        value="{{$archive->title_en}}"
                    />
                </label>
            </div>
            <div class="my-4">
                <input type="file" name="file">
            </div>
            <div class="px-4 py-3 text-right sm:px-6">
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Изменить
                </button>
            </div>
        </form>
    </div>
@endsection
