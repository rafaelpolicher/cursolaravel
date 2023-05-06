@if ($mensagem = Session::get('erro'))
    {{$mensagem}}
@endif
@if ($errors->any())
    @foreach ($errors->all() as $error)
        {{$error}}<br>
    @endforeach
@endif

<form action="{{route('login.auth')}}" method="post">
    @csrf
    Email: <br><input  name="email"><br>
    Senha: <br><input type="password" name="password"><br>
    <button type="submit">Entrar</button>
    <input type="checkbox" name="remember">Lembrar-me
</form>