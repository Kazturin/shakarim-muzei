@extends('../layouts.admin.main')
@section('content')
    <x-breadcrumbs :links="[['url'=>route('history-category.index'),'label'=>'Категории истории'],'Редактировать категорию']"></x-breadcrumbs>

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

        <form action="{{ route('history-category.update',$historyCategory->id) }}" method="POST">
            @csrf
            @method('patch')
            <div class="my-2">
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Категория(kz)</span>
                    <input
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        placeholder="Категория"
                        name="name_kz"
                        value="{{$historyCategory->name_kz}}"
                    />
                </label>
            </div>
            <div class="my-2">
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Категория(ru)</span>
                    <input
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        placeholder="Категория"
                        name="name_ru"
                        value="{{$historyCategory->name_ru}}"
                    />
                </label>
            </div>
            <div class="my-2">
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Категория(en)</span>
                    <input
                        class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        placeholder="Категория"
                        name="name_en"
                        value="{{$historyCategory->name_en}}"
                    />
                </label>
            </div>
            <div class="my-2">
                <label
                    for="sort"
                    class="block text-sm font-medium text-gray-700"
                >Сортировка</label>
                <input
                    class="w-full rounded border-gray-300 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    id="sort"
                    name="sort"
                    type="number"
                    min="0"
                    step="1"
                    value="{{$historyCategory->sort}}"
                />
            </div>
            <div class="px-4 py-3 text-right sm:px-6">
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Изменить
                </button>
            </div>
        </form>
    </div>
@endsection
