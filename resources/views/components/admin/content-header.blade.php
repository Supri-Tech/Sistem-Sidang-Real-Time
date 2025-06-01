<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">@yield('admin-header')</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <!-- <li class="breadcrumb-item">Admin</li>-->

                    @foreach(request()->segments() as $index => $segment)
                    @php
                    $url = url(implode('/', array_slice(request()->segments(), 0, $index + 1)));
                    $isLast = $loop->last;
                    @endphp

                    @if($isLast)
                    <li class="breadcrumb-item active text-capitalize">
                        {{ str_replace('-', ' ', $segment) }}
                    </li>

                    @else
                    <li class="breadcrumb-item text-capitalize">
                        <a href="{{ $url }}">{{ str_replace('-', ' ', $segment) }}</a>
                    </li>
                    @endif
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
</div>
