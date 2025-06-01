<!DOCTYPE html>
<html data-theme="light" lang="id">

@include('components.user.head')

<body class="has-background-white-ter">
    @include('components.user.navbar')

    @yield('content')

    @include('components.user.footer')

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>

        $(document).ready(function () {
            $(".navbar-burger").click(function () {
                $(".navbar-burger").toggleClass("is-active");
                $("#navbarBasicExample").toggleClass("is-active");
            });
        });

    </script>
</body>

</html>

