<div class="container">
  {{-- <div class="media">
    <img class="mr-3" height="150" width="150" alt="{{$album->name}}" src="/albums/{{$album->cover_image}}" width="350px">
    <div class="media-body">
      <h5>Nombre del Album:</h5>
      <p>{{$album->name}}</p>
      <h5>Descripcion del album:</h5>
      <p>{{$album->description}}<p>
    </div>
  </div> --}}
  <div class="row">
    <div class="col-md-12 mb30">
      <div class="card">
        <div class="card-top bg-info">
          <h4 class="card-title text-white">{{$album->name}}</h4>
        </div>
        <div class="card-content">
          <div class="row">
            <div class="col-md-3">
              <img height="150" width="200" alt="{{$album->name}}" src="/albums/{{$album->cover_image}}">
            </div>
            <div class="col-md-9">
              <p>{{$album->description}}</p>
              <p>{{count($album->Photos)}} fotos</p>
              <a href="{{route('addImage',['id'=>$album->id])}}"><button type="button"class="btn btn-primary btn-large">Agregar nueva imagen al Album</button></a>
              <a href="{{URL::route('delete_album',array('id'=>$album->id))}}" onclick="return confirm('Are yousure?')"><button type="button"class="btn btn-danger btn-large">Borrar Album</button></a>
              {{-- <p>Created date:  {{ date("d F Y",strtotime($album->created_at)) }} at {{date("g:ha",strtotime($album->created_at)) }}</p> --}}
              {{-- <p><a href="{{route('album',['id'=>$album->id])}}" class="btn btn-info mb5 btn-rounded">Ver galeria</a></p> --}}
            </div>
          </div>

        </div>
      </div>
    </div><!--/col-->

</div>
<hr>

{{--
  <div class="media">

          <div class="media-body">
            <h2 class="media-heading" style="font-size: 26px;">Album Name:</h2>
            <p>{{$album->name}}</p>
            <div class="media">
            <h2 class="media-heading" style="font-size: 26px;">Album Description :</h2>
            <p>{{$album->description}}<p>
            <a href="{{route('addImage',['id'=>$album->id])}}"><button type="button"class="btn btn-primary btn-large">Add New Image to Album</button></a>
            <a href="{{URL::route('delete_album',array('id'=>$album->id))}}" onclick="return confirm('Are yousure?')"><button type="button"class="btn btn-danger btn-large">Delete Album</button></a>
        </div>
      </div>
  </div> --}}
</div>
<div class="row">
        @foreach($album->Photos as $photo)
          <div class="col-lg-6">
            <div class="thumbnail">
              <p>Fecha de creación:  {{ date("d F Y",strtotime($photo->created_at)) }}at {{ date("g:ha",strtotime($photo->created_at)) }}</p>
              <img  alt="{{$album->name}}" src="{{Storage::disk('public')->url($photo->imageLittle)}}">
              <div class="caption">
                <p>{{$photo->description}}</p>

                <a href="{{route('deleteImage',['id'=>$photo->id])}}" onclick="returnconfirm('Are you sure?')"><button type="button"class="btn btn-danger btn-small">Borrar imagen</button></a>
                {{-- <p>Move image to another Album :</p> --}}
                {{-- <form name="movephoto" method="POST"action="{{URL::route('move_image')}}">
                  {{csrf_field()}}
                  <select name="new_album">
                    @foreach($albums as $others)
                      <option value="{{$others->id}}">{{$others->name}}</option>
                    @endforeach
                  </select>
                  <input type="hidden" name="photo"value="{{$photo->id}}" />
                  <button type="submit" class="btn btn-smallbtn-info" onclick="return confirm('Are you sure?')">Move Image</button>
                </form> --}}
              </div>
            </div>
            <hr>
          </div>

        @endforeach
</div>
