@auth
    @if(Auth::user()->role === 'admin')
        <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">Go to Admin Dashboard</a>
    @else
        <a href="{{ route('dashboard') }}" class="btn btn-primary">Go to User Dashboard</a>
    @endif
@else
    <div class="mb-4">
        <a href="{{ route('login') }}" class="text-blue-500">Login</a> |
        <a href="{{ route('register') }}" class="text-blue-500">Register</a>
    </div>
@endauth
