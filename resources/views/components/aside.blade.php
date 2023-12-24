@auth
    @if (Auth::user()->type == 'superadmin')
        @include('include.admin_aside')
    @else
        @include('include.user_aside')
    @endif
@endauth
