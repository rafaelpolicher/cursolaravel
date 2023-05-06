@if ($mensagem = Session::get('sucesso'))
    <div class="card green">
        <div class="card-content white-text">
            <span class="card-title">
                <p>{{$mensagem}}</p>
            </span>
        </div>
    </div>
@endif