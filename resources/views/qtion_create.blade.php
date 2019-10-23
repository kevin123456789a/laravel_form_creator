<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="registrar.css">

    <title>Inicio</title>
   <script type="text/javascript" src="http://code.jquery.com/color/jquery.color-2.1.2.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


	<title></title>
<!-- temporal css -->
  <style>
  #onechoice {
      display: none;
  }
  #multiplechoice{
    display: none;
  }
  </style>
</head>
<body>


<div>
<h3 align="center" style="margin-top: 50px;margin-bottom: 100px; color: #aaa;">Registrar nueva pregunta:</h3>
</div>

<div class="container" align="center">
	<div class="col-md-6">
		<form role="form" id="contact-form" class="contact-form" method="post" action="registrar_preguntas.php">
                    <div class="row">
                		<div class="col-md-6">
                  		<div class="form-group">
                          <label>Responder mediante:</label>
                      </div>
                  	</div>
                    	<div class="col-md-6">
                  		<div class="form-group">
                          <select class="form-control" id="type" name="Seleccione">
                              <option  value="1">Abierta</option>
                             <option value="2">Única respuesta</option>
                             <option value="3">Múltiples respuesta</option>
                          </select>

                  		</div>
                  	</div>
                  	</div>
                  	<div class="row">
                  		<div class="col-md-12">
                  		<div class="form-group">
                            <textarea class="form-control textarea" rows="3" name="pregunta" id="pregunta" placeholder="Pregunta..." ></textarea>
                  		</div>
                  	</div>
                    </div>

                    <div class="row">
                      <div class="col-12">
                        <hr>
                          Vista previa
                        </div>
                        <div id="abierta" class="col-12">
                          <div class="row">
                            <div class="col-6">
                              <input type="text" class="form-control mt-3 mb-3" placeholder="Respuesta:" disabled></input>
                            </div>
                            <div class="col-6">
                              <div class="col-12 mt-3">
                                <!-- Default inline 1-->
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" class="custom-control-input" id="defaultInline1" name="inlineDefaultRadiosExample">
                                  <label class="custom-control-label" for="defaultInline1">Texto</label>
                                </div>

                                <!-- Default inline 2-->
                                <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" class="custom-control-input" id="defaultInline2" name="inlineDefaultRadiosExample">
                                  <label class="custom-control-label" for="defaultInline2">Numerico</label>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <hr>

                    </div>

                    <div id="onechoice" class="col-12" >
                      <!-- Group of default radios - option 1 -->
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="defaultGroupExample1" name="groupOfDefaultRadios">
                        <label class="custom-control-label" for="defaultGroupExample1">Opción de respuesta 1</label>
                      </div>

                      <!-- Group of default radios - option 2 -->
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="defaultGroupExample2" name="groupOfDefaultRadios" checked>
                        <label class="custom-control-label" for="defaultGroupExample2">Opción de respuesta 2</label>
                      </div>

                      <!-- Group of default radios - option 3 -->
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="defaultGroupExample3" name="groupOfDefaultRadios">
                        <label class="custom-control-label" for="defaultGroupExample3">Opción de respuesta 3</label>
                      </div>
                    </div>

                    <div id="multiplechoice" class="col-12" >
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                          Respuesta 1
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                        <label class="form-check-label" for="defaultCheck2">
                          Respuesta 2
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                        <label class="form-check-label" for="defaultCheck2">
                          Respuesta 3
                        </label>
                      </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12">
                  <button type="submit" class="btn main-btn pull-right">Guardar</button>
                  </div>
                  </div>
                </form>
	</div>
</div>
<footer class="footer">

	<p align="center"><a href="ver.php" class="vercu">Ver cuestionario</a></p>

</footer>
<script>


var select = document.getElementById('type');
var open =document.getElementById('abierta');
var oc =document.getElementById('onechoice');
var mc =document.getElementById('multiplechoice');
$( document ).ready(function() {
  var selectedOption = this.options[select.selectedIndex];
});
select.addEventListener('change',
  function(){
    var selectedOption = this.options[select.selectedIndex];
    if(selectedOption.value=="1"){
      abierta.style.display="initial";
    }
    else {
      abierta.style.display="none";
    }
    if(selectedOption.value=="2"){
      oc.style.display="initial";
    }
    else {
      oc.style.display="none";
    }
    if(selectedOption.value=="3"){
      mc.style.display="initial";
    }
    else {
      mc.style.display="none";
    }

  });

</script>
</body>
</html>
