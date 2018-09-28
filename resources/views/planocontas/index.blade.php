@extends('layouts.admin')


<!--Css Local-->
@section('cssLocal')

@endsection


<!--Conteudo Local-->
@section('content')
<div class="panel panel-white">
                            <br>
                            <div class=" col-md-12">
                                <a class="btn btn-success"  href="/PlanoContas/Add"><i class="fa fa-plus"></i>&nbsp;Adicionar</a>
                            </div>
                            <div class="panel-heading clearfix">
                                <h4 class="panel-title">Plano de Contas Cadastradas</h4>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table id="plano"  class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                        <tr >
                                            {{--<td align="center"><strong>ID</strong></td>--}}
                                            <td align="center"><strong>Nº da Conta </strong></td>
                                            <td align="center"><strong>Descrição</strong></td>
                                            <td align="center"><strong>Tipo</strong></td>
                                            <td align="center"><strong>Acções</strong></td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($planocontas as $dado)
                                            <tr>
                                                {{--<td align="center">{{$dado->idPlanocontas}}</td>--}}
                                                <td align="center">{{$dado->nr_conta}}</td>
                                                <td align="center">{{$dado->descricao}}</td>
                                                <td align="center">{{$dado->status}}</td>
                                                <td align="center">
                                                    <a class="btn btn-primary" href="{{url('/PlanoContas/'.$dado->idPlanocontas)}}"><i class="fa fa-edit"></i>&nbsp;Actualizar</a>
                                                    <form method="POST" action="{{url('PlanoContas/delete/'.$dado->idPlanocontas)}}" accept-charset="UTF-8" style="display:inline">
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
                                            <tr >
                                                {{--<td align="center"><strong>ID</strong></td>--}}
                                                <td align="center"><strong>Nº da Conta </strong></td>
                                                <td align="center"><strong>Descrição</strong></td>
                                                <td align="center"><strong>Tipo</strong></td>
                                                <td align="center"><strong>Acções</strong></td>
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
<script>
        $(document).ready(function () {
            $('#plano').dataTable({
                "aaSorting": [],
                "order": []
            });
        })
    </script>
@endsection
<!-- fim Javascript Local-->