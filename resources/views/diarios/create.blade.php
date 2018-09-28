@extends('layouts.admin')


<!--Css Local-->
@section('cssLocal')

@endsection


<!--Conteudo Local-->
@section('content')
<div class="panel panel-white">
                            <form id="demo-form2" data-parsley-validate="" method="post" action="{{url('Diarios/Save')}}" class="form-horizontal form-label-left" novalidate="">
                                <input type="hidden" value="{{csrf_token()}}" name="_token" id="token">
                            <div class="panel-heading clearfix">
                                <h4 class="panel-title">Diarios</h4>
                                <hr>
                            </div>
                            <br>
                                <div class="col-md-1">
                                    <div class="control-group">
                                        <div class="controls">
                                        </div>
                                    </div>
                                </div>
                            <div class="form-group">
                                <label class="control-label col-md-1 col-sm-3 col-xs-12" for="first-name">Designacao<span class="required">*</span>
                                </label>
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <input type="text" id="designacao" name="designacao" required="required" class="form-control col-md-7 col-xs-12" placeholder="Ex.: Fornecedores">
                                </div>
                                <label class="control-label col-md-1 col-sm-3 col-xs-12" for="first-name">Numero<span class="required">*</span></label>
                                <div class="col-md-2 col-sm-6 col-xs-12">
                                        <input type="text" id="numero" name="numero" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                                <br>
                            </div>

                            <br>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-1">
                                        <div class="control-group">
                                            <div class="controls">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="control-group" id="toastTypeGroup">
                                            <div class="controls">
                                                <label> <h4> Contabilidade Geral</h4></label>
                                                <label>
                                                    <br>
                                                    <input type="radio" name="c_geral" value="Obriga Débito=Crédito" checked/> Obriga Débito=Crédito
                                                </label>
                                                <label>
                                                    <input type="radio" name="c_geral" value="Avisa Diferenças"/> Avisa Diferenças
                                                </label>
                                                <label>
                                                    <input type="radio" name="c_geral" value="Não Controla"/> Não Controla
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="control-group">
                                            <div class="controls">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="control-group" id="toastTypeGroup">
                                            <div class="controls">
                                                <label> <h4> Contabilidade Analitica</h4></label>
                                                <label>
                                                    <br>
                                                    <input type="radio" name="c_analitica" value="Obriga Débito=Crédito" checked/> Obriga Débito=Crédito
                                                </label>
                                                <label>
                                                    <input type="radio" name="c_analitica" value="Avisa Diferenças"/> Avisa Diferenças
                                                </label>
                                                <label>
                                                    <input type="radio" name="c_analitica" value="Não Controla"/> Não Controla
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="control-group">
                                            <div class="controls">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="control-group">
                                            <div class="controls">
                                                <label for="showDuration"><h4> Contabilidade de Ordem</h4></label>
                                                <label>
                                                    <br>
                                                    <input type="radio" name="c_ordem" value="Obriga Débito=Crédito" checked/> Obriga Débito=Crédito
                                                </label>
                                                <label>
                                                    <input type="radio" name="c_ordem" value="Avisa Diferenças"/> Avisa Diferenças
                                                </label>
                                                <label>
                                                    <input type="radio" name="c_ordem" value="Não Controla"/> Não Controla
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row m-t-lg">
                                    <div class="form-group">
                                        <div class="col-md-5 col-sm-6 col-xs-12 col-md-offset-3">
                                            <a href="{{url('Diarios')}}" class="btn btn-primary" type="button">Voltar</a>
                                            <button class="btn btn-primary" type="reset">Limpar</button>
                                            <button class="btn btn-success" type="submit">Submeter</button>

                                        </div>
                                        <div class="col-md-2">
                                            <select class="form-control" name="moeda" id="moeda">
                                                <option value="MT (Metical)">MT (Metical)</option>
                                                <option value="USD (Dolar)">USD (Dolar)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            </form>
                        </div>

@endsection
<!--Fim do Conteudo Local-->

<!--Javascript Local-->
@section('scripts')

@endsection
<!-- fim Javascript Local-->