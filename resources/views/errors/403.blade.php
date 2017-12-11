@extends('layouts.app')

@section('htmlheader_title')
	ERROR
@endsection

@section('contentheader_title')
    
@endsection

@section('$contentheader_description')
@endsection

@section('main-content')

<div class="error-page">
    <div class="error-content">
        <h2 class="text-red"><i class="fa fa-warning text-red"></i> Acesso negado!</h2>
        <p>
            Você não tem permissão para acessar esta página. Para mais informações, contate o administrador do sistema.
        </p>
    </div><!-- /.error-content -->
</div><!-- /.error-page -->
@endsection