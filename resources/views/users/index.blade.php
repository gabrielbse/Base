@extends('layouts.app')

<script src ="{{ asset('js/jquery-3.1.0.js') }}" type = "text/javascript" ></script>
<script src ="{{ asset('js/jquery.maskedinput.js') }}" type = "text/javascript" ></script>
<script src ="{{ asset('js/jquery-ui-1.12.0/jquery-ui.js') }}" type = "text/javascript" ></script>
<link href="{{ asset('js/jquery-ui-themes-1.12.0/themes/base/jquery-ui.css') }}" rel="stylesheet">
<!-- DataTables -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.js') }}" type = "text/javascript"></script>
<script src="{{ asset('plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
<link rel="stylesheet" href="{{ asset('plugins/datatables/dataTables.bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('css/iziToast.min.css') }}">
<script src="{{ asset('js/iziToast.min.js') }}"></script>

<!-- SCRIPT Geral -->
<script src="{{ asset('js/users/users.js') }}"></script>

@section('main-content')

	<div class="row">
		<div class="col-lg-12 margin-tb">
			@section('contentheader_title')
			<div class="pull-left">
				<h2> <i class="fa fa-users"></i> Usuários</h2>
			</div>
			@endsection
			
			<div class="pull-right">

				

				@permission('usuario-create')

				<a class="btnAdicionar btn btn-primary" title="Adicionar Usuário" data-toggle="tooltip"><span class="glyphicon glyphicon-plus"></span> Cadastrar Usuário</a>
				@endpermission
			</div>
		</div>
	</div>

<br>
	<div class="box">
		<div class="box-body">
			<table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
				
			   <thead>
					<tr>
						 <th>No</th>
						 <th>Nome</th>
						 <th>Email</th>
						 <th>Telefone</th>
						 <th>Status</th>
						 <th>Ação</th>
					 </tr>
				</thead>
				 
			</table>



		</div>
	</div>

	<!-- Modal Inserir/Editar -->
	@permission('usuario-create')
	@include('users.criar_editar')
	@endpermission
	<!-- Fim Modal Inserir/Editar -->

	<!-- Modal Visualizar Usuário -->
	@permission('usuario-list')
	@include('users.visualizar')
	@endpermission
	<!-- Fim Modal Visualizar -->
	
	<!-- Modal Excluir -->
	@permission('usuario-delete')
	@include('users.excluir')
	@endpermission
	<!-- Fim Modal Excluir -->
	
	<!-- Modal Ativar -->
	@role('Administrador')
	@include('users.ativar')
	@endrole
	<!-- Fim Modal Ativar -->
   
   
@endsection
