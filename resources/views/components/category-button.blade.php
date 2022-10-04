@props(['active'=>false])
<button @class(
        ['bg-amber-700'=>$active,
         'bg-amber-600'=>!$active,
         'mb-2',
         'p-2',
         'md:p-4',
         'md:text-lg',
         'rounded',
         'text-white',
         'w-full',
         'text-md',
         'font-semibold'])>
   {{$slot}}
</button>
