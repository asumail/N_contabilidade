@extends('layouts.admin')


<!--Css Local-->
@section('cssLocal')

@endsection


<!--Conteudo Local-->
@section('content')

                        <div class="panel panel-white">
                             <!--conteudo-->
                            <br>
                            <form id="form-registrar-ajax" data-parsley-validate="" method="POST"   class="form-horizontal form-label-left" novalidate="">
                            
                                    <input type="hidden" value="{{csrf_token()}}" name="_token" id="token">

                                <div class="form-group">
                                    <div class="panel-heading clearfix">
                                        <h4 class="panel-title"> Registar Empresa</h4>
                                        <hr>
                                    </div>
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nome da Empresa <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="nome_empresa" name="nome_empresa" required="required" class="form-control col-md-7 col-xs-12" placeholder="Ex.: Update Software, Lda">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Aliase <span class="required">*</span>
                                    </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="aliase" name="aliase" required="required" class="form-control col-md-7 col-xs-12" placeholder="Ex.: US, Lda">
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Localização <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="localizacao" name="localizacao" required="required" class="form-control col-md-7 col-xs-12" placeholder="Ex.: Rua Daniel Malinda">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Email <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12" placeholder="Ex.: info@ncsoftware.co.mz">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Celular <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="celular" name="celular" required="required" class="form-control col-md-7 col-xs-12" placeholder="Ex.: +258 826215197">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Fixo <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="fixo" name="fixo" required="required" class="form-control col-md-7 col-xs-12" placeholder="Ex.: +21 826215">
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <a href="{{url('/superempresa')}}" class="btn btn-primary" type="button">Voltar</a>
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
 $("#form-registrar-ajax").submit(function (event) {
            event.preventDefault();
            var  nome=$('#nome_empresa').val();
            alert(nome);

            var $form = $(this);

            $.ajax({
                type: "POST",
                url: "/superempresa",
                data: $form.serialize(),
                success: function (data) {
                    // window.location.href='login.php';
                    alert('Entrei');
                },
                error: function (error) {
                    alert("erro: ver consola");
                    console.log(error);
                }
            })

        });

</script>

@endsection
<!-- fim Javascript Local-->