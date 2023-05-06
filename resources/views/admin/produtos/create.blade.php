   <!-- Modal Structure -->
   <div id="create" class="modal">
    <div class="modal-content">
      <h4><i class="material-icons">playlist_add_circle</i> Novo produto</h4>
      <form class="col s12" action="" method="POST" enctype="multipart/form-data">
        <div class="row">

          <div class="input-field col s6">
            <input name="nome" placeholder="Nome" id="nome" type="text" class="validate">
            <label for="nome">Nome</label>
          </div>
          <div class="input-field col s6">
            <input id="preco" type="number" class="validate" name="preco">
            <label for="preco">Preço</label>
          </div>

          <div class="input-field col s12">
            <input id="descricao" type="text" class="validate" name="descricao">
            <label for="descricao">Descrição</label>
          </div>

          <div class="input-field col s12">
            <select name="categoria">
              <option value="" disabled selected>Escolha uma opção</option>
              @foreach ($produtos as $produto)
                  <option value="{{$produto->categoria->id}}"> {{$produto->categoria->nome}}</option>
              @endforeach

            </select>
            <label>Categoria</label>
          </div>
          
          <form action="#">
            <div class="file-field input-field col s12">
              <div class="btn">
                <span>Imagem</span>
                <input type="file" name="imagem">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
              </div>
            </div>
          </form>

        </div> 
       
        <a href="#!" class="modal-close waves-effect waves-green btn blue right">Cancelar</a>
        <button type="submit" class="waves-effect waves-green btn green right">Cadastrar</button><br>

    </div>
    
  </form>
  </div>