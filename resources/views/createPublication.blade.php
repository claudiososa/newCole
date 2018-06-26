@extends('layouts.admin')
@section('content')
  <script type="text/javascript">
  $("#input-img").fileinput({showCaption: false});
  </script>
  <div class="container">
    <h2>Nueva Publicación</h2>
    <hr>
    <form  enctype="multipart/form-data" class="" action="{{route('publicationCreatePost')}}" method="post">
      {{csrf_field()}}
      <div class="form-group @if($errors->has('title')) has-danger @endif">
        <label for="title">Título</label>
        <input type="text" name="title" value="" class="form-control"
        placeholder="Nombre de Publicación">
        @if ($errors->has('title'))
          @foreach ($errors->get('title') as $error)
            <div class="form-control-feedback">
              {{$error}}
            </div>
          @endforeach
        @endif
      </div>

      <div class="form-group @if($errors->has('album_id')) has-danger @endif">
        <label for="album_id">Album</label>
        <select class="form-control" name="album_id">
          @foreach ($albums as $album)
            <option value="{{$album->id}}">{{$album->name}}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group @if($errors->has('category_id')) has-danger @endif">
        <label for="marginClient">Categoria</label>
        <select class="form-control" name="category_id">
          @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->description}}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group @if($errors->has('content')) has-danger @endif">
        <label for="title">Contenido</label>
        <textarea placeholder="Contenido"  rows='15' name="content" id="content" class="form-control" >
        </textarea>
        @if ($errors->has('content'))
          @foreach ($errors->get('content') as $error)
            <div class="form-control-feedback">
              {{$error}}
            </div>
          @endforeach
        @endif
      </div>
      <div class="row">
          <div class="form-group @if($errors->has('image')) has-danger @endif">
            <label for="title">Imagen</label>
            <div class="row">
                <input id="input-img" name="input-img" type="file" class="file">
                <!--<input id="input-img" name="input-img[]"  multiple="true" type="file" class="file-loading">-->
              </div>
          </div>
    </div>
    <div class="row">
        <div class="form-group @if($errors->has('image')) has-danger @endif">
          <label for="title">Archivo Adjunto</label>
          <div class="row">
              <input id="input-file" name="input-file" type="file" class="file">
              <!--<input id="input-img" name="input-img[]"  multiple="true" type="file" class="file-loading">-->
            </div>
        </div>
  </div>

  <div class="row">
      <div class="form-group @if($errors->has('image')) has-danger @endif">
        <label for="title">Archivo Adjunto 1</label>
        <div class="row">
            <input id="input-file" name="input-file1" type="file" class="file">
            <!--<input id="input-img" name="input-img[]"  multiple="true" type="file" class="file-loading">-->
          </div>
      </div>
</div>

      <button type="submit" class="btn btn-success" name="button">Guardar Publicación</button>
    </form>
  </div>

  <script type="text/javascript">
  CKEDITOR.replace( 'content', {
      toolbar: [
          { name: 'clipboard', groups: [ 'clipboard', 'undo' ], items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] },
          { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'Strike', 'Subscript', 'Superscript', '-' ] },
          { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl', 'Language' ] },
          { name: 'links', items: [ 'Link', 'Unlink' ] },
          '/',
          { name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
          { name: 'colors', items: [ 'TextColor', 'BGColor' ] },
          { name: 'others', items: [ '-' ] }
      ]
    });


  </script>
@endsection
