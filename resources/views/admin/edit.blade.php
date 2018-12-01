@include('layouts.header')

<div class="container">
    <div class="row">
        <h4 style="margin-top: 80px;">Atualizar Links</h3>
    </div>
</div>


<br><br><br><br><br>
<div class="container edit-section">
        <div class="row">
            <form class="col s12" method="POST" action="{{route('update', [$smart->id]) }}">
                <div class="row">

                    <div class="input-field col s12">
                        <i class="material-icons prefix">format_size</i>
                        <input  type="text" value="{{$smart->title }}"  name="title" class="validate">
                        <label for="">Título</label>
                    </div>

                    <div class="input-field col s12">
                        <i class="material-icons prefix">insert_link</i>
                        <input  type="text" value="{{$smart->link }}" name="link" class="validate">
                        <label for="">Link</label>
                    </div>

                    <div class="input-field col s12">
                            <i class="material-icons prefix">event_note</i>
                            <input  type="text" value="{{$smart->category }}" name="category" class="validate">
                            <label for=" ">Categoria</label>
                    </div>
                </div><!--row-->
                <button type="submit"  class="waves-effect waves-light btn blue-grey darken-2"><i class="material-icons left">cloud</i>Salvar alteração</button>
                @csrf
            </form>
    </div><!--row-->
</div>

@include('layouts.footer')
