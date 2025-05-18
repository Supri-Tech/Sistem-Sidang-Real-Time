<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register with Bulma</title>
    <link rel="stylesheet" href="{{ asset('/bulma/css/bulma.min.css') }}">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>

    </style>
</head>

<body data-theme="light">
    <section class="hero is-fullheight is-primary is-bold">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-centered">
                    <div class="column is-8-tablet is-6-desktop is-5-widescreen">
                        <div class="card">
                            @yield ('auth-content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>