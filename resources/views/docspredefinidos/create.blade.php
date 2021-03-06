@extends('layouts.admin')


<!--Css Local-->
@section('cssLocal')
<style>

ul{
    /*display: none;*/
    list-style-type:none;
    margin-left: 0%;
}

li{
    margin-left: 0;
}

.margen{
    margin-left: -17px;
}

.apagar {
    margin-left: -50px;
}

.detalhar {
    height: 150px;
    width: 100%;
    background-color: powderblue;
    margin:0;
    padding-top: 2%;
}
label>.deb{
    margin-left: 51%;
}
label>.mrg{
    margin-left: 6%;
}
label>.total{
    color: #3c90af;
    margin-right: 9px;
    padding-right: 6px;
}
    label>.tam{
        font-size: 20px;
    }
</style>

@endsection


<!--Conteudo Local-->
@section('content')
<div class="panel panel-white">
                            <!--conteudo-->
                            <br>
                            <form id="demo-form2" data-parsley-validate="" method="post"
                                  action="{{url('Facturacao/Save')}}" class="form-horizontal form-label-left"
                                  novalidate="">
                                <input type="hidden" value="{{csrf_token()}}" name="_token" id="token">

                                <div class="form-group">
                                    <div class="panel-heading clearfix">
                                        <h4 class="panel-title"> Documentos Pre-definidos</h4>
                                        <hr>
                                    </div>
                                    <div class="col-md-12">
                                        <label class=" col-md-9 col-sm-3 col-xs-12" for="first-name">Descrição do Documento
                                            <span style="color: red " class="required">*</span><br>
                                            <input id="dilnoField" name="ctl00$conteudo$dilno$dilnoField" title=""
                                                   type="text" class="form-control input-sm dilno"
                                                   data-bind="value: doRow.dilno, css: { dilno: true }"
                                                   data-tooltip="true" data-original-title="Número de ordem no Diário">
                                        </label>
                                        <label class="col-md-3 col-sm-3 col-xs-12" for="first-name">Número interno do documento
                                            <span style="color: red " class="required">*</span><br>
                                            <input id="dilnoField" name="ctl00$conteudo$dilno$dilnoField" title=""
                                                   type="text" class="form-control input-sm dilno"
                                                   data-bind="value: doRow.dilno, css: { dilno: true }"
                                                   data-tooltip="true" data-original-title="Número de ordem no Diário" disabled placeholder="67">
                                        </label>

                                    </div>
                                    <div class="col-md-12">
                                        <br>
                                        <label class=" col-md-3 col-sm-3 col-xs-12" for="first-name">Abreviatura
                                            <span style="color: red " class="required">*</span><br>
                                            <input id="dataField" name="ctl00$conteudo$data$dataField" title=""
                                                   type="text" class="form-control input-sm data"
                                                   data-bind="css: { data: true }, contabDate: doRow.data, contabMonth: doRow.mes, contabDay: doRow.dia"
                                                   data-tooltip="true"
                                                   data-original-title="Data do documento (mês de 0 a 16)">
                                        </label>
                                    </div>
                                    <div class="col-md-12">
                                        <br>
                                    </div>
                                    <div class="col-md-12">
                                        <hr>
                                        <label class=" col-md-12 col-sm-3 col-xs-12" for="first-name">
                                            <!-- /.box-header -->
                                            <div class="box-body no-padding">
                                                <dl id="movimento" >
                                                    <dt>
                                                    <div class="principal row">
                                                        <label class=" col-md-6 col-sm-3 col-xs-12" for="first-name">Conta
                                                            <span style="color: red " class="required">*</span><br>
                                                            <input id="dilnoField" name="ctl00$conteudo$dilno$dilnoField" title=""
                                                                   type="text" class="form-control input-sm dilno"
                                                                   data-bind="value: doRow.dilno, css: { dilno: true }"
                                                                   data-tooltip="true" data-original-title="Número de ordem no Diário">
                                                        </label>
                                                        <label class="margen col-md-3 col-sm-3 col-xs-12" for="first-name">Valor Fixo
                                                            <span style="color: red " class="required">*</span><br>
                                                            <input id="dilnoField" name="ctl00$conteudo$dilno$dilnoField" title=""
                                                                   type="text" class="form-control input-sm dilno"
                                                                   data-bind="value: doRow.dilno, css: { dilno: true }"
                                                                   data-tooltip="true" data-original-title="Número de ordem no Diário">
                                                        </label>
                                                        <label class="margen col-md-2 col-sm-3 col-xs-12" for="first-name">Factor Multiplicativo
                                                            <span style="color: red " class="required">*</span><br>
                                                            <input id="dilnoField" name="ctl00$conteudo$dilno$dilnoField" title=""
                                                                   type="text" class="form-control input-sm dilno"
                                                                   data-bind="value: doRow.dilno, css: { dilno: true }"
                                                                   data-tooltip="true" data-original-title="Número de ordem no Diário">
                                                        </label>
                                                        {{--<label class="margen col-md-2 col-sm-3 col-xs-12" for="first-name">Débito--}}
                                                            {{--<span style="color: red " class="required">*</span><br>--}}
                                                            {{--<input id="dilnoField" name="ctl00$conteudo$dilno$dilnoField" title=""--}}
                                                                   {{--type="text" class="form-control input-sm dilno"--}}
                                                                   {{--data-bind="value: doRow.dilno, css: { dilno: true }"--}}
                                                                   {{--data-tooltip="true" data-original-title="Número de ordem no Diário">--}}
                                                        {{--</label>--}}
                                                        {{--<label id="" class="margen col-md-2 col-sm-3 col-xs-12" for="first-name">Crédito--}}
                                                            {{--<span style="color: red " class="required">*</span><br>--}}
                                                            {{--<input id="dilnoField" name="ctl00$conteudo$dilno$dilnoField" title=""--}}
                                                                   {{--type="text" class="form-control input-sm dilno"--}}
                                                                   {{--data-bind="value: doRow.dilno, css: { dilno: true }"--}}
                                                                   {{--data-tooltip="true" data-original-title="Número de ordem no Diário">--}}
                                                        {{--</label>--}}
                                                        <label id="" class="margen  col-md-1 col-sm-3 col-xs-12" for="first-name">
                                                            <span style="color: red " class="required"></span><br>
                                                            <button type="button" class=" btn btn-default btn-sm showDetails">
                                                                <span class="glyphicon glyphicon-trash">
                                                                </span>
                                                            </button>
                                                        </label>
                                                    </div>
                                                    </dt>
                                                    <dt class="detalhes"></dt>
                                                    <dt class="custom-item"></dt>
                                                </dl>
                                                <div class="row">
                                                    <label class="col-md-offset-10 col-md-12" for="first-name">
                                                        <button id="mov" type="button"
                                                                class="btn btn-success btn btn-default btn-sm margintop"
                                                                title=""
                                                                data-bind="click: AddMov" data-tooltip="true"
                                                                data-original-title="Introduz uma nova linha abaixo da linha selecionada. [CTRL+INS]">
                                                            <span class="glyphicon glyphicon-plus"></span>
                                                            Nova linha
                                                        </button>
                                                        {{--<label class="col-md-offset-6 total deb" for="">Total Débito</label>--}}
                                                        {{--<label class="col-md-offset-1 mrg total" for="">Total Crédito</label>--}}
                                                        {{--<label class="col-md-offset-8 tam" for="">50,00</label>--}}
                                                        {{--<label class="col-md-offset-1 tam" for="">50,00</label>--}}
                                                    </label>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <hr>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-5">
                                        <a href="{{url('docspredefinidos')}}" class="btn btn-primary"
                                           type="button">Voltar</a>
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
<script>

        function show_hide () {
            var detalhes='<dt><div id="showDetails" class="detalhar row">' +
                    '<label class=" col-md-3 col-sm-3 col-xs-12" for="first-name">Nº Contribuinte<span style="color: red " class="required">*</span><br><input id="dilnoField" name="ctl00$conteudo$dilno$dilnoField" title=""type="text" class="form-control input-sm dilno"></label>'+
                    '<label class="margen col-md-3 col-sm-3 col-xs-12" for="first-name">Mapa?<span style="color: red " class="required">*</span><br><input id="dilnoField" name="ctl00$conteudo$dilno$dilnoField" title=""type="text" class="form-control input-sm dilno"></label>'+
                    '<label class="margen col-md-3 col-sm-3 col-xs-12" for="first-name">Valor<span style="color: red " class="required">*</span><br><input id="dilnoField" name="ctl00$conteudo$dilno$dilnoField" title=""type="text" class="form-control input-sm dilno"></label>'+
                    '<label class="margen col-md-3 col-sm-3 col-xs-12" for="first-name">Centro Analítico <span style="color: red " class="required">*</span><br><input id="e1" name="ctl00$conteudo$dilno$dilnoField" title=""type="text" class="form-control input-sm dilno"></label>'+
                    '<label class="margen col-md-2 col-sm-3 col-xs-12" for="first-name">Class. Estatística <span style="color: red " class="required">*</span><br><input id="dilnoField" name="ctl00$conteudo$dilno$dilnoField" title=""type="text" class="form-control input-sm dilno"></label>'+
                    '</div>'+
                    '</dt>';


            if($('#detalhes1').val()=='null'){
                $('#detalhes1').val('show');
                $(".detalhes").before(detalhes);

            }else if ($('#detalhes1').val()=='show'){
//                alert('Hide');
                $('.detalhar').hide();
                $('#detalhes1').val('hide');
            }else{
                $('.detalhar').show();
                $('#detalhes1').val('show');
            }
        }
        //
        ////Adicionar novo Movimento
        $('#mov').on("click", function (e) {
            e.preventDefault();

            var novo='<dt><div class="row">' +
                    '<label class=" col-md-6 col-sm-3 col-xs-12" for="first-name">Conta<span style="color: red " class="required">*</span><br><input id="dilnoField" name="ctl00$conteudo$dilno$dilnoField" title=""type="text" class="form-control input-sm dilno"data-bind="value: doRow.dilno, css: { dilno: true }"data-tooltip="true" data-original-title="Número de ordem no Diário"> </label>'+
//                    '<label class="margen col-md-2 col-sm-3 col-xs-12" for="first-name">Nome da conta<span style="color: red " class="required">*</span><br><input id="dilnoField" name="ctl00$conteudo$dilno$dilnoField" title=""type="text" class="form-control input-sm dilno"data-bind="value: doRow.dilno, css: { dilno: true }"data-tooltip="true" data-original-title="Número de ordem no Diário"></label>'+
                    '<label class="margen col-md-3 col-sm-3 col-xs-12" for="first-name">Valor Fixo<span style="color: red " class="required">*</span><br><input id="dilnoField" name="ctl00$conteudo$dilno$dilnoField" title=""type="text" class="form-control input-sm dilno"data-bind="value: doRow.dilno, css: { dilno: true }"data-tooltip="true" data-original-title="Número de ordem no Diário"></label>'+
                    '<label class="margen col-md-2 col-sm-3 col-xs-12" for="first-name">Fact. Mult.<span style="color: red " class="required">*</span><br><input id="dilnoField" name="ctl00$conteudo$dilno$dilnoField" title=""type="text" class="form-control input-sm dilno"data-bind="value: doRow.dilno, css: { dilno: true }"data-tooltip="true" data-original-title="Número de ordem no Diário"></label>'+
//                    '<label id="" class="margen col-md-2 col-sm-3 col-xs-12" for="first-name">Crédito<span style="color: red " class="required">*</span><br><input id="dilnoField" name="ctl00$conteudo$dilno$dilnoField" title=""type="text" class="form-control input-sm dilno"data-bind="value: doRow.dilno, css: { dilno: true }"data-tooltip="true" data-original-title="Número de ordem no Diário"></label>'+
                    '<label id="" class="margen col-md-1 col-sm-3 col-xs-12" for="first-name"><span style="color: red " class="required"></span><br><button type="button" class=" btn btn-default btn-sm showDetails"><span class="glyphicon glyphicon-trash"></span></button></label>'+
                    '</div>'+
                    '</dt>';

            // adicionando a linha
            $(".custom-item").before(novo);

        });

        //        //Mostrar ou Ocultar Detalhes
        //        $('#detalhe').on("click", function (e) {
        //            e.preventDefault();
        //
        //        });



        // Apagar uma determinada Linha
        $('#movimento').on('click', '.delete_item', function () {
            $(this).closest("dt").remove();
        });

    </script>

@endsection
<!-- fim Javascript Local-->