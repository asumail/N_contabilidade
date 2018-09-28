@extends('layouts.admin')


<!--Css Local-->
@section('cssLocal')
<style>
    .right{
        float: right;
        height: auto;
        width: auto;
        padding-left: 756px;
    }
    .left{
        float: left;
        height: auto;
        width: auto;
    }
</style>
@endsection


<!--Conteudo Local-->
@section('content')
<div class="panel panel-white">
                            <br>
                            <div class=" left col-md-2 ">
                                <a class="btn btn-success"  href="{{url('Sub_Empresa/Add')}}"><i class="fa fa-plus"></i>&nbsp;Adicionar</a>
                            </div><br><br><br>
                            <div class="panel-heading clearfix">
                                <h4 class="panel-title">Empresas Registradas</h4>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                        <tr>
                                            <th>Nome da Empresa</th>
                                            <th>Aliase</th>
                                            <th>Localização</th>
                                            <th>Email</th>
                                            <th>Celular</th>
                                            <th>Fixo</th>
                                            <th>Acções</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($sub_empresa  as $dado)
                                            <tr>
                                                <td>{{$dado->nome}}</td>
                                                <td>{{$dado->aliase}}</td>
                                                <td>{{$dado->localizacao}}</td>
                                                <td>{{$dado->email}}</td>
                                                <td>{{$dado->celular}}</td>
                                                <td>{{$dado->fixo}}</td>
                                                <td align="Center">
                                                    <a class="btn btn-primary" href="{{url('/Sub_Empresa/'.$dado->idSub_empresa)}}"><i class="fa fa-edit"></i>&nbsp;Actualizar</a>
                                                    <form method="POST" action="{{url('Sub_Empresa/delete/'.$dado->idSub_empresa)}}" accept-charset="UTF-8" style="display:inline">
                                                        {!! csrf_field() !!}
                                                        <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#confirmDelete" data-title="{{ trans('message.invoice.delete_invoice') }}" data-message="{{ trans('message.invoice.delete_invoice_confirm') }}">
                                                            <i class="fa fa-remove" aria-hidden="true"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                        <tfooter>
                                            <tr>
                                                <th>Nome da Empresa</th>
                                                <th>Aliase</th>
                                                <th>Localização</th>
                                                <th>Email</th>
                                                <th>Celular</th>
                                                <th>Fixo</th>
                                                <th>Acções</th>
                                            </tr>
                                        </tfooter>
                                    </table>
                                </div>
                            </div>
                        </div>

@endsection
<!--Fim do Conteudo Local-->

<!--Javascript Local-->
@section('scripts')

@endsection
<!-- fim Javascript Local-->