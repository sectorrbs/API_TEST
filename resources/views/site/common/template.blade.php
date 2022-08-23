<!doctype html>
<html lang="en">
@include('site.common.components.head')
<body>

<?php
//АУТЕНТИФИКАЦИЯ (ПОДКЛЮЧАЕТСЯ В WEB.PHP ЧЕРЕЗ AUTH::ROUTES())
?>

@yield('content')

@include('site.common.components.scripts')

</body>
</html>


