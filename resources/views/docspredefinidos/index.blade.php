@extends('layouts.admin')


<!--Css Local-->
@section('cssLocal')

@endsection


<!--Conteudo Local-->
@section('content')
<div class="panel panel-white">
                            <br>
                            <div class=" left col-md-2 ">
                                <a class="btn btn-success"  href="{{url('DocsPredefinidos/Add')}}"><i class="fa fa-plus"></i>&nbsp;Adicionar</a>
                            </div><br><br>

                            <div class="panel-heading clearfix">
                                <h4 class="panel-title">Documentos Pre-definidos Cadastrados</h4>
                                <hr>
                            </div><br>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                        <thead>
                                        <tr>
                                            <th>Descrição do Documento</th>
                                            <th>Abreviatura</th>
                                            <th>Conta</th>
                                            <th>Valor Fixo</th>
                                            <th>factor Multiplicativo</th>
                                            <th>Acções</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($docs_predefinidos  as $dado)
                                            <tr>
                                                <td>{{$dado->descricao}}</td>
                                                <td>{{$dado->abreviatura}}</td>
                                                <td>{{$dado->conta}}</td>
                                                <td>{{$dado->valor_fixo}}</td>
                                                <td>{{$dado->factor_multiplicativo}}</td>
                                                <td align="Center">
                                                    <a class="btn btn-primary" href="{{url('Lancamentos/'.$dado->idLancamentos)}}"><i class="fa fa-edit"></i>&nbsp;Actualizar</a>
                                                    <form method="POST" action="{{url('Lancamentos/delete/'.$dado->idLancamentos)}}" accept-charset="UTF-8" style="display:inline">
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
                                                <th>Descrição do Documento</th>
                                                <th>Abreviatura</th>
                                                <th>Conta</th>
                                                <th>Valor Fixo</th>
                                                <th>factor Multiplicativo</th>
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