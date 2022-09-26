<?php
use Illuminate\Support\Facades\App;
?>
<div class="text-right">
    <form action="{{route('language')}}" method="POST">
        @csrf
        @method('post')
        <label>
            <select class="border-0 bg-transparent focus:border-amber-600" name="locale" id="language" onchange="this.form.submit()">
                <option class="hover:bg-amber-500" value="kz" {{app()->getLocale()=='kz'?'selected':''}}>KAZ</option>
                <option class="hover:bg-amber-500" value="ru" {{app()->getLocale()=='ru'?'selected':''}}>RUS</option>
                <option class="hover:bg-amber-500" value="en" {{app()->getLocale()=='en'?'selected':''}}>ENG</option>
            </select>
        </label>
   </form>

{{--     @foreach($available_locales as $locale_name => $available_locale)--}}
{{--        @if($available_locale === $current_locale)--}}
{{--            <span class="ml-2 mr-2 text-gray-700">{{ $locale_name }}</span>--}}
{{--        @else--}}
{{--            <a class="ml-1 underline ml-2 mr-2" href="language/{{ $available_locale }}">--}}
{{--                <span>{{ $locale_name }}</span>--}}
{{--            </a>--}}
{{--        @endif--}}
{{--    @endforeach--}}
</div>

