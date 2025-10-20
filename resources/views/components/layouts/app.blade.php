<!DOCTYPE html>
<html lang="en">

<head>
    <x-head />
</head>

<body class="min-h-screen flex flex-col">

    <x-navbar/>

    <div class="container d-flex justify-content-center">
        <div class="row">
            <div class="col-md-8">
                <x-header/>

                <ul class="breadcrumb">
                    <li><a href="/" title="{{ __('misc.home_alt') }}"
                    
                            alt="{{ __('misc.home_alt') }}">{{ __('misc.home') }}</a></li>
                    {{ $breadcrumb ?? '' }}
                    <li><a href="{{ route('categories.index') }}">Categories</a></li>
                </ul>

                @if ( isset($_GET['q']) )
                    <x-search_results/>
                @else
                    {{ $slot }}
                @endif

                <ul class="breadcrumb">
                    <li>
                        <a href="/" title="{{ __('misc.home_alt') }}" alt="{{ __('misc.home_alt') }}">{{ __('misc.home') }}</a>
                    </li>
                    {{ $breadcrumb ?? '' }}
                </ul>
            </div>
        </div>
    </div>

    <footer class="w-full bg-dark mt-auto">
        <div class="container text-white">
            <x-footer/>
        </div>
        
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="{{ asset('/js/app.js') }}"></script>

</body>

</html>
