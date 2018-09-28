@extends('layouts.admin')


<!--Css Local-->
@section('cssLocal')

@endsection


<!--Conteudo Local-->
@section('content')
<div class="panel panel-white">
                        <br>
                        <div class=" col-md-12">
                            <a class="btn btn-success"  href="{{url('Diarios/Add')}}"><i class="fa fa-plus"></i>&nbsp;Adicionar</a>
                        </div>
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">Diarios Cadastrados</h4>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                    <thead>
                                    <tr>
                                        <th>Designação</th>
                                        <th>Contabilidade Geral</th>
                                        <th>Contabilidade Analitica</th>
                                        <th>Contabilidade de Ordem</th>
                                        <th>Moeda</th>
                                        <th>Acções</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($diarios  as $dado)
                                    <tr>
                                        <td>{{$dado->designacao}}</td>
                                        <td>{{$dado->contabilidade_geral}}</td>
                                        <td>{{$dado->contabilidade_analitica}}</td>
                                        <td>{{$dado->Contabilidade_ordem}}</td>
                                        <td>{{$dado->moeda}}</td>
                                        <td align="Center">
                                            <a class="btn btn-primary" href="{{url('Diarios/'.$dado->idDiarios)}}"><i class="fa fa-edit"></i>&nbsp;Actualizar</a>
                                            <form method="POST" action="{{url('Diarios/delete/'.$dado->idDiarios)}}" accept-charset="UTF-8" style="display:inline">
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
                                            <th>Designação</th>
                                            <th>Contabilidade Geral</th>
                                            <th>Contabilidade Analitica</th>
                                            <th>Contabilidade de Ordem</th>
                                            <th>Moeda</th>
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