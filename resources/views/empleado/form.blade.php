<h1>{{ $modo }} Empleado</h1>

@if(count($errors)>0)

<div class="alert alert-danger" role="alert">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>

@endif

<div class="form-group">

    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" name="nombre" value="{{isset($empleado->Nombre)?$empleado->Nombre:old('nombre')}}" id="nombre">

</div>
<div class="form-group">
    <label for="primerApellido">Primer Apellido</label>
    <input type="text" class="form-control" name="primerApellido" value="{{isset($empleado->PrimerApellido)?$empleado->PrimerApellido:old('primerApellido')}}" id="primerApellido">

</div>
<div class="form-group">
    <label for="segundoApellido">Segundo Apellido</label>
    <input type="text" class="form-control" name="segundoApellido" value="{{isset($empleado->SegundoApellido)?$empleado->SegundoApellido:old('segundoApellido')}}" id="segundoApellido">

</div>
<div class="form-group">
    <label for="correo">Correo</label>
    <input type="text" class="form-control" name="correo" value="{{isset($empleado->Correo)?$empleado->Correo:old('correo')}}" id="correo">

</div>
<div class="form-group">

    <label for="foto">Foto</label>
    @if(isset($empleado->Foto))
    <img class="img-thumbnail img-fuild" src="{{asset('storage').'/'.$empleado->Foto}}" alt="img" width="64" height="64">
    @endif
    <input class="form-control" type="file" name="foto" value="" id="foto">

</div>

<br />
<input class="btn btn-success" type="submit" value="{{ $modo }} datos">

<a class="btn btn-primary" href="{{ url('empleado/') }}">Regresar</a>
