<body>
@extends('layout.app')
@section('content')
<br>
    <div class="container">
    <b>Welcome!</b><br>
    <b>For Better Health</b>
    </div>
<div class="bg-white">
<main class="my-8">
   @yield('content')
</main>
</div>
@endsection
</body>