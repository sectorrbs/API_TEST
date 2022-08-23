<!doctype html>
<html lang="en">
@include('admin.common.components.head')
<body>

<?php
//АУТЕНТИФИКАЦИЯ (ПОДКЛЮЧАЕТСЯ В WEB.PHP ЧЕРЕЗ AUTH::ROUTES())
?>

@include('admin.common.components.header')

@yield('content')

@include('admin.common.components.scripts')
@include('admin.common.components.footer')

</body>
</html>


