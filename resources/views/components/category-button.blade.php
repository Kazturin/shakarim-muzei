@props(['active'=>false])
<button @class(
        ['bg-amber-700'=>$active,
         'bg-amber-600'=>!$active,
         'mb-2',
         'px-4',
         'py-2',
         'md:px-8',
         'md:py-4',
         'md:text-lg',
         'rounded',
         'text-white',
         'w-full',
         'text-md',
         'font-semibold'])>
   {{$slot}}
</button>
