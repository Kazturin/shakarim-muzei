<div class="h-64">
    <div class="h-64 w-full" style="background-image: url({{asset('/img/bg-header.png')}})">
        <div class="container mx-auto h-full">
            <div class="flex flex-col h-full justify-center items-center sm:justify-between sm:flex-row">
                <div class="font-header text-gray-500">
                    <h1 class="text-4xl">{{__('site.university')}}</h1>
                    <h1 class="text-3xl uppercase">{{__('site.museum')}}</h1>
                </div>
                <div class="h-full flex flex-col">
                    @include('partials/language_switcher')
                    <div class="flex items-center justify-center grow mt-4 sm:mt-0">
                        <a href="{{route('home')}}" title="{{__('site.main_page')}}" class="{{Route::currentRouteName()==='home'?'text-amber-700':'text-amber-600'}}">
                            <svg id="changeColor" fill="currentColor" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64" zoomAndPan="magnify" viewBox="0 0 375 374.999991" height="64"><defs>&lt; path id="pathAttribute" d="M 8.917969 7.773438 L 367.417969 7.773438 L 367.417969 366.273438 L 8.917969 366.273438 Z M 8.917969 7.773438 " /&gt; </defs> <g> <path id="pathAttribute" d="M 344.105469 366.273438 L 32.230469 366.273438 C 19.386719 366.273438 8.917969 355.808594 8.917969 342.960938 L 8.917969 31.085938 C 8.917969 18.242188 19.386719 7.773438 32.230469 7.773438 L 344.105469 7.773438 C 356.949219 7.773438 367.417969 18.242188 367.417969 31.085938 L 367.417969 342.960938 C 367.417969 355.808594 356.949219 366.273438 344.105469 366.273438 " fill-opacity="1" fill-rule="nonzero"></path> </g><g id="inner-icon" transform="translate(90,80) "> <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor" class="bi bi-bank" viewBox="0 0 16 16" id="IconChangeColor"> <path d="M8 .95 14.61 4h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.379l.5 2A.5.5 0 0 1 15.5 17H.5a.5.5 0 0 1-.485-.621l.5-2A.5.5 0 0 1 1 14V7H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 4h.89L8 .95zM3.776 4h8.447L8 2.05 3.776 4zM2 7v7h1V7H2zm2 0v7h2.5V7H4zm3.5 0v7h1V7h-1zm2 0v7H12V7H9.5zM13 7v7h1V7h-1zm2-1V5H1v1h14zm-.39 9H1.39l-.25 1h13.72l-.25-1z" id="mainIconPathAttribute" fill="orange"></path> </svg> </g>
                            </svg>
                        </a>
                        <a href="{{route('exhibits')}}" title="{{__('site.exhibits')}}" class="{{Route::currentRouteName()==='exhibits'?'text-amber-700':'text-amber-600'}}">
                            <svg id="changeColor " fill="currentColor" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64" zoomAndPan="magnify" viewBox="0 0 375 374.999991" height="64"><defs>&lt; path id="pathAttribute" d="M 8.917969 7.773438 L 367.417969 7.773438 L 367.417969 366.273438 L 8.917969 366.273438 Z M 8.917969 7.773438 " /&gt; </defs> <g> <path id="pathAttribute" d="M 344.105469 366.273438 L 32.230469 366.273438 C 19.386719 366.273438 8.917969 355.808594 8.917969 342.960938 L 8.917969 31.085938 C 8.917969 18.242188 19.386719 7.773438 32.230469 7.773438 L 344.105469 7.773438 C 356.949219 7.773438 367.417969 18.242188 367.417969 31.085938 L 367.417969 342.960938 C 367.417969 355.808594 356.949219 366.273438 344.105469 366.273438 " fill-opacity="1" fill-rule="nonzero"></path> </g><g id="inner-icon" transform="translate(90,80) "> <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor" class="bi bi-trophy-fill" viewBox="0 0 16 16" id="IconChangeColor"> <path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935z" id="mainIconPathAttribute" fill="orange"></path> </svg> </g> </svg>
                        </a>
                        <a href="#" title="{{__('site.archive')}}">
                            <svg id="changeColor " fill="#DC7633" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64" zoomAndPan="magnify" viewBox="0 0 375 374.999991" height="64"><defs>&lt; path id="pathAttribute" d="M 8.917969 7.773438 L 367.417969 7.773438 L 367.417969 366.273438 L 8.917969 366.273438 Z M 8.917969 7.773438 " /&gt; </defs> <g> <path id="pathAttribute" d="M 344.105469 366.273438 L 32.230469 366.273438 C 19.386719 366.273438 8.917969 355.808594 8.917969 342.960938 L 8.917969 31.085938 C 8.917969 18.242188 19.386719 7.773438 32.230469 7.773438 L 344.105469 7.773438 C 356.949219 7.773438 367.417969 18.242188 367.417969 31.085938 L 367.417969 342.960938 C 367.417969 355.808594 356.949219 366.273438 344.105469 366.273438 " fill-opacity="1" fill-rule="nonzero"></path> </g><g id="inner-icon" transform="translate(90,80) "> <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor" class="bi bi-archive-fill" viewBox="0 0 16 16" id="IconChangeColor"> <path d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z" id="mainIconPathAttribute" fill="orange"></path> </svg> </g> </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
   </div>
</div>
<div class="bg-amber-100">
    <div class="h-6 bg-contain" style="background-image: url('/img/line.png')">
    </div>
</div>
