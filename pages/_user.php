
<div class= "container-esterno">
  <div class="container-fluid">

  	<hr>

  	<div class="row content-img">
      <div class="col-xs-offset-1 col-md-offset-1 col-md-3">
        <div class="panel panel-default">
          <div class="panel-heading">
            <blockquote class="blockquote-reverse">
              <h5 class="caratteristiche-titolo">Harper Reed</h5>
              <h6 class="caratteristiche-titolo">CTO</h6>
              <h6 class="text-style">Cruz.pro</h6>
            </blockquote>
          </div>
          <div class="panel-body"></div>
        </div>
      </div>
      <img src="img/harper.jpg" alt="harper reed" class="img-circle">
      <div class="col-md-7">
       <div class="panel panel-default">
        <div class="panel-heading">
          <blockquote><h5 class="caratteristiche-titolo">Contatti</h5>
            <h6 class="caratteristiche-titolo">harper_reed@cruzpro.it</h6>
            <h6 class="text-style">+393485409834</h6>
          </blockquote>
        </div>
        <div class="panel-body col-xs-offset-5">
          <a class="btn btn-info" href="#">
            <i class="fa-li fa fa-facebook-official"></i>
            <h5 class="caratteristiche-titolo-info">Facebook</h5>
          </a>
          <a class="btn btn-info" href="#">
            <i class="fa-li fa fa-linkedin-square"></i>
            <h5 class="caratteristiche-titolo-info">Linkedin</h5>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--eventi in ordine -->

  <div class="row content">

    <div class="col-xs-offset-1 col-md-offset-1 col-md-3">
      <div class="panel panel-success">
        <div class="panel-heading secondo-contenuto"><h5 class="caratteristiche-titolo text-center">Eventi della sala</h5></div>
        <div class="panel-body">


         <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="panel panel-warning">
            <div class="panel-heading" role="tab" id="headingOne">
              <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  I miei eventi
                </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
              <div class="panel-body">
                <h6 class="text-style">mar15 Marzo H. 10:00 - 12:00 - Revisione Chicco: Sala Marco Aurelio</h6><hr>
                <h6 class="text-style">mar15 Marzo H. 10:00 - 12:00 - Revisione Chicco: Sala Marco Aurelio</h6><hr>
                <h6 class="text-style">mar15 Marzo H. 10:00 - 12:00 - Revisione Chicco: Sala Marco Aurelio</h6>
              </div>
            </div>
          </div>

          <div class="panel panel-warning">
            <div class="panel-heading" role="tab" id="headingThree">
              <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  I miei eventi passati
                </a>
              </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
              <div class="panel-body">
                <h6 class="text-style">mar15 Marzo H. 10:00 - 12:00 - Revisione Chicco: Sala Marco Aurelio</h6><hr>
                <h6 class="text-style">mar15 Marzo H. 10:00 - 12:00 - Revisione Chicco: Sala Marco Aurelio</h6><hr>
                <h6 class="text-style">mar15 Marzo H. 10:00 - 12:00 - Revisione Chicco: Sala Marco Aurelio</h6>
              </div>
            </div>
          </div>
        </div>



      </div>
    </div>
  </div>
  <div class="col-md-7">
   <div class="panel panel-success">
    <div class="panel-heading">

      <div id="custom-search-input">
        <div class="input-group">
         <input type="text" class="  search-query form-control" placeholder="cerca eventi" />
         <span class="input-group-btn">
           <button class="btn btn-danger" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
    </div>
  </div>


  <div class="panel-body">
    <h5 class="caratteristiche-titolo text-center">Calendario</h5>

    <!-- calendar -->


    <!--fine calendar -->
    <div id="calendar"></div>
    <div class="popup-text-custom">


              <!-- modal evento-->


<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Evento</button>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
           <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="gridSystemModalLabel">Eventi Chicco</h4>
        <h5 class="caratteristiche-titolo">Revisione Chicco</h5>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-4"><h4 class="modal-title text-center">mar15 Marzo </h4>
          </div>
          <div class="col-md-4"><h4 class="modal-title text-center">H. 12:00 - 13:00</h4>
          </div>
          <div class="col-md-4"><h4 class="modal-title text-center">Sala marco Aurelio</h4><h6 class="text-style text-center">Milano La Masa</h6>
          </div>
        </div><hr>
        <div class="row">
          <textarea class="form-control" rows="3" placeholder="Aggiungi note" style="margin-top:10px; margin-bottom:10px;"></textarea>
        </div><hr>


        <div class= "row">
         <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
          <div class="panel panel-warning">
            <div class="panel-heading" role="tab" id="headingOne">
              <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNomi" aria-expanded="true" aria-controls="collapseOne">
                  Persone Invitate
                </a>
              </h4>
            </div>
            <div id="collapseNomi" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
              <div class="panel-body">
                <h6 class="text-style">Harper Reed</h6><hr>
                <h6 class="text-style">Harper Reed</h6><hr>
                <h6 class="text-style">Harper Reed</h6>
              </div>
            </div>
          </div>


        </div>
      </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-xs" data-dismiss="modal">Chiudi</button>
        <button type="button" class="btn btn-secondary btn-xs">Salva modifiche</button>
      </div>
    </div>
  </div>
</div>






    </div>



  </div>

</div>
</div>
</div>



</div>
</div>
