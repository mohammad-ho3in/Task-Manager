<!DOCTYPE html>
<html lang="fa">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   @include('task-manager.layouts.head')
   @yield('head-tag')
   <title>{{ $title }}</title>
   
</head>
<body>
   @yield('content')
   @include('task-manager.layouts.script')
   @yield('script')
</body>
</html>