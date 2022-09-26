@extends('../layouts.user.main')
@section('content')
    <div class="bg-white p-10 shadow-lg">

        @if($welcome)
            <div class="pb-6 border-b">
                <h1 class="text-3xl text-center font-semibold mt-8">{{$welcome->{'title_'.app()->getLocale()} }}</h1>
                <hr class="mx-auto w-96 my-6">
                <p>{!! $welcome->{'content_'.app()->getLocale()} !!}</p>
            </div>
        @endif

        <div class="rounded-lg overflow-hidden mt-6">
            <div id="container" style="width:100%;height:100%;overflow:hidden;">
                <br>Loading...<br><br>
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="{{asset('js/pano2vr_player.js')}}"></script>
        <script src="{{asset('js/skin.js')}}"></script>
        <script src="{{asset('js/webxr/three.min.js')}}"></script>
        <script src="{{asset('js/webxr/webxr-polyfill.min.js')}}"></script>
        <script type="text/javascript">

            // create the panorama player with the container
            pano=new pano2vrPlayer("container");
            // add the skin object
            skin=new pano2vrSkin(pano);
            // load the configuration

            window.addEventListener("load", function() {
                pano.readConfigUrlAsync("pano.xml");
            });
            if (window.navigator.userAgent.match(/Safari/i)) {
                // fix for white borders, rotation on iPhone
                function iosHfix(e) {
                    window.scrollTo(0, 1);
                    var container=document.getElementById("container");
                    var oh=container.offsetHeight;
                    document.documentElement.style.setProperty('height', '100vh');
                    if (oh!=container.offsetHeight) {
                        container.style.setProperty('height',"100%");
                    } else {
                        container.style.setProperty('height',window.innerHeight+"px");
                    }
                    window.scrollTo(0, 0);
                    pano.setViewerSize(container.offsetWidth, container.offsetHeight);
                }
                setTimeout(iosHfix,0);
                setTimeout(iosHfix,100);
                window.addEventListener("resize", function() {
                    setTimeout(iosHfix,0);
                    // hide toolbar on iPad happens with a delay
                    setTimeout(iosHfix,500);
                    setTimeout(iosHfix,1000);
                    setTimeout(iosHfix,2000);
                });
            }
        </script>
    @endpush

@endsection




