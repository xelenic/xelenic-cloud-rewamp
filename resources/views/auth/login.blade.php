<form action="{{route('login.post')}}" method="post">
    {{csrf_field()}}
    <input type="text" name="username" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <input type="checkbox" name="remember"> Remember Me
    <button type="submit">Login</button>
</form>
