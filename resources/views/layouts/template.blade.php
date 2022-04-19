<!DOCTYPE html>
<html lang="th">
<head>

<!-- Basic Page Needs
================================================== -->
<title>ไลฟ์สด VIP กลุ่มลับอันดับ1 abaiav.net</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:title" content="ไลฟ์สด VIP กลุ่มลับอันดับ1 abaiav.net">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ url('assets/img/S__22954059.jpeg') }}">
    <meta property="og:description" content="กลุ่มลับไลน์ ปัจจุบันนี้ความนิยมการติดตามชมคลิปลับหรือการไลฟ์สด มันทำให้ทุกท่านได้เปิดประสบการณ์ในรูปแบบใหม่ที่มีสีสันและความเร้าใจให้ได้ลุ้นตื่นเต้นไปตลอดเวลา สามารถเข้ามาใช้บริการกลุ่มลับไลน์ที่จะทำให้การติดตามคลิปเด็ด ๆ จากสาวสวย">

<!-- CSS
================================================== -->
@include('layouts.inc-style')
@yield('stylesheet')

</head>

    <body>

    <!-- Wrapper -->
    <div id="wrapper">

    @include('layouts.inc-header')

    @yield('content')


    @include('layouts.inc-footer')

        <!-- Back To Top Button -->
        <div id="backtotop"><a href="#"></a></div>


    </div>
    <!-- Wrapper / End -->

    @include('layouts.inc-script')
    @yield('scripts')

    </body>
</html>