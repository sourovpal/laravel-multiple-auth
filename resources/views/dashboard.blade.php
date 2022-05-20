<h1>Welcome to Dashboard</h1>
<br><br><br>
<a href="{{route('admin.logout')}}">Logout</a>

<h1>{{Auth::guard('admin')->user()->name}}</h1>