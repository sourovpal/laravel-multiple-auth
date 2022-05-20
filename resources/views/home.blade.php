<h1>Welcome to Home</h1>
<br><br><br>
<a href="{{route('user.logout')}}">Logout</a>
<a href="{{route('user.list')}}">User List</a>
<h1>{{Auth::guard('web')->user()->name}}</h1>