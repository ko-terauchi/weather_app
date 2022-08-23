<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>旅行天気予報</title>

    <!-- Stylesheet -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('styles')

</head>
<body>
    <h1>都道府県天気予報</h1>
    <div>
        <select required>
            <option value="" hidden>選択してください</option>
            @foreach(config('pref') as $pref_id => $name)
            <option value="{{ $pref_id }}">{{ $name }}</option>
            @endforeach
        </select>
        <form ethod="post" action="{{ route('weatherAPI.weatherdata')}}" class="inline">
            @csrf
            <input type="submit" value="検索">
        </form>
    </div>
</body>
</html>
