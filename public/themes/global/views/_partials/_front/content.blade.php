@include('flash::message')

@if (count($errors) > 0)
    @include($activeTheme . '::' . '_partials.errors')
@endif

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif

<div class="col-sm-4">

    @include($activeTheme . '::' . '_partials._front._extra.login')

</div>

    @yield('content')
