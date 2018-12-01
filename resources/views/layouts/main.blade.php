<div class="container main-content">
    <div class="row">
        <div class="col s7">
            <h4 class="title"><a href="#"></a>Meus links úteis</h4>
        </div>
            <button data-position="right" data-target="modal1" class=" btn-medium btn-add btn-floating btn-large waves-effect waves-light blue-grey darken-2 modal-trigger"><i class="material-icons">add</i>
            </button>
    </div>

<table class="striped responsive-table ">
    <thead>
        <tr>

            <th class="title-header break-word ">Link</th>
            <th class="title-header">Categoria</th>
            <th class="title-header">Data de criação</th>
            <th class="title-header">Editar</th>
            <th class="title-header">Excluir</th>


        </tr>
    </thead>
          @if(count($smarts))
    <tbody>
        @foreach($smarts as $smart)
        <tr>

            <td class="link-style"><a  href="{{ $smart->link}}" target="_blank">{{$smart->title}} </a></td>
            <td class="cat"><span  class="btn btn-info btn-small">{{$smart->category}}</span></td>
            <td class="date">{{(new DateTime($smart->created_at))->format(' d/m/Y') }}</td>

            @can('edit-link', $smart)
            <td class="material"><a title="editar"  href="{{route('edit',$smart->id)}}"><i class="material-icons edit">edit</i></a></td>
            <td class="material"><a title="excluir" href="{{route('destroy',$smart->id)}}"   title="delete" onclick="return confirm ('Quer realmente deletar o link?')"><i class="material-icons delete">delete</i></a></td>
            @endcan
        </tr>
        @endforeach
        @else

            <span style="padding: 20px; background: #f2f2f2; color: #333;">Nenhum link foi adicionado ainda.</span>

        @endif
    </tbody>

</table>
<div class="pages">
     {{ $smarts->links('vendor.pagination.materialize')}}
</div>
<!--Pagination-->

</div><!--end of container-->

<div id="modal1" class="modal">
       <div class="container"><!--conteúdo-->
                   <form class="col s12" method="post" action="{{route('store')}}">
                       <div class="row">
                         <h5>Adicionar Link</h5>
                           <div class="input-field col s12">
                               <i class="material-icons prefix">format_size</i>
                               <input  type="text" name="title" class="validate" required>
                               <label for="">Título</label>
                           </div>

                           <div class="input-field col s12">
                               <i class="material-icons prefix">insert_link</i>
                               <input  type="text" name="link" class="validate" required>
                               <label for="">Link</label>
                           </div>

                           <div class="input-field col s12">
                                   <i class="material-icons prefix">event_note</i>
                                   <input  type="text" name="category" class="validate" required>
                                   <label for=" ">Categoria</label>
                           </div>
                       </div><!--row-->

                   <div class="modal-footer">
                       <button type="submit" class=" btn-left waves-effect waves-light btn-small blue-grey darken-2"><i class="material-icons left">add</i>Adicionar link</button>
                      <a href="#" class=" btn-right modal-close waves-effect waves-light btn-small blue-grey darken-2"><i class="material-icons left">clear</i>Fechar</a>
                       @csrf
                   </div>
               </form>
   </div><!--conteúdo-->
</div>
