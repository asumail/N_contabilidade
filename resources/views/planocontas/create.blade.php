@extends('layouts.admin')


<!--Css Local-->
@section('cssLocal')

@endsection


<!--Conteudo Local-->
@section('content')
<div class="panel panel-white">
                             <!--conteudo-->
                            <br>
                            <form id="demo-form2" data-parsley-validate="" method="post" action="{{url('PlanoContas/Save')}}" class="form-horizontal form-label-left" novalidate="">
                                    <input type="hidden" value="{{csrf_token()}}" name="_token" id="token">
                                <div class="form-group">
                                    <div class="panel-heading clearfix">
                                        <h4 class="panel-title"> Cadastro de Plano de Contas</h4>
                                        <hr>
                                    </div>
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Conta<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="nr_conta" name="nr_conta" required="required" class="form-control col-md-7 col-xs-12" placeholder="Ex.: 12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Designação<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="descricao" name="descricao" required="required" class="form-control col-md-7 col-xs-12" placeholder="Ex.: Bancos">
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <a href="{{url('PlanoContas')}}" class="btn btn-primary" type="button">Voltar</a>
                                        <button class="btn btn-primary" type="reset">Limpar</button>
                                        <button type="submit" class="btn btn-success">Submeter</button>
                                    </div>
                                </div>

                            </form>
                            <br>
                            <!--conteudo-->
                        </div>

@endsection
<!--Fim do Conteudo Local-->

<!--Javascript Local-->
@section('scripts')

@endsection
<!-- fim Javascript Local-->