@extends('../layouts.admin.main')
@section('content')

    <div class="my-2">
        <x-breadcrumbs :links="[['url'=>route('faculty.index'),'label'=>'Факультеты'],'Добавить факультет']"></x-breadcrumbs>
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

        <form action="{{ route('faculty.store') }}" method="POST">
            @csrf
            @method('post')
            <div class="my-2">
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Факультет(kz)</span>
                    <input
                        class="block w-full rounded border-gray-300 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        placeholder="Факультет"
                        name="name_kz"
                    />
                </label>
            </div>
            <div class="my-2">
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Факультет(ru)</span>
                    <input
                        class="block w-full rounded border-gray-300 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        placeholder="Факультет"
                        name="name_ru"
                    />
                </label>
            </div>
            <div class="my-2">
                <label class="block text-sm">
                    <span class="text-gray-700 dark:text-gray-400">Факультет(en)</span>
                    <input
                        class="block w-full rounded border-gray-300 mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        placeholder="Факультет"
                        name="name_en"
                    />
                </label>
            </div>

            <div class="px-4 py-3 text-right sm:px-6">
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Добавить
                </button>
            </div>
        </form>
    </div>
@endsection
