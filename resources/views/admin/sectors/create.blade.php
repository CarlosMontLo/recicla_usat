{!! Form::open(['route' => 'admin.sectors.store', 'files' => true]) !!}
@include('admin.sectors.template.form')
<button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Registrar</button>
<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-arrow-alt-circle-left"></i> Cerrar</button>

{!! Form::close() !!}