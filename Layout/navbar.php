

		<!-- Navigation -->

      <nav class="navbar navbar-fixed-top" role="navigation">
        

          <!-- header -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php?page=user"> <span class="glyphicon glyphicon-asterisk" style="color: #748F80; margin-right: 15px"></span><strong>Cruz.pro</strong></a>
          </div>

          <!-- navbar links -->
          <div class="collapse navbar-collapse">
          <div class="col-xs-offset-4 col-md-offset-4">    
            <ul class="nav navbar-nav nav">
              <li><button type="button" class=" btn btn-md btn-default" data-toggle="modal" data-target="#myModal">Crea evento</button></li>
              <li><a href="index.php?page=lista_sale">Sale riunioni</a></li>
              <li class="divider-vertical"></li>
              <li><a href="index.php?page=lista_eventi">Eventi</a></li>
            </ul>
          </div>
   
          <ul class="nav navbar-nav navbar-right">
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profilo <b class="caret"></b></a>
            <ul class="dropdown-menu">
            
              <li><a class="btn btn-link" data-toggle="modal" data-target=".bs-example-modal-sm" style="padding-left: 0px">Modifica profilo</a>
    
              </li>
              <li role="separator" class="divider"></li>
              <li><a href="?page=lista_utenti">Colleghi</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="index.php">Log out</a></li>
            </ul>
            <li><a href="" class="img_nav"><img src="img/harper_nav.jpg" alt="harper reed" class="img-circle" style="cursor:default"></a></li>
          </ul>

              
    
          </div>
        
      </nav>
  </div>

<!-- modal modif -->

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
    
<div class="container-modal ">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
    </button>
      <h4 class="modal-title" id="gridSystemModalLabel">Modifica profilo</h4>
  </div>

  <div class="modal-body">

    <div class="row content-img">
        <div class="col-xs-offset-1 col-md-offset-1 col-md-12">
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

        </div>


        <hr>


        <input type="text" class="form-control" id="exampleInputName2" placeholder="Harper">
        <br>
        <input type="text" class="form-control" id="exampleInputName2" placeholder="Reed">
        <br>
        <input type="text" class="form-control" id="exampleInputName2" placeholder="12/04/1975">
        <br>
        <input type="text" class="form-control" id="exampleInputName2" placeholder="Harper_reed@cruzpro.com">
        <br>
        <input type="text" class="form-control" id="exampleInputName2" placeholder="+393485409834">
        <br>
        <input type="text" class="form-control" id="exampleInputName2" placeholder="+ social">
        <br>
        <input type="text" class="form-control" id="exampleInputName2" placeholder="CTO Cruz.">
        <br>
        <input type="text" class="form-control" id="exampleInputName2" placeholder="Milano la Masa">
        <hr>
        <input type="text" class="form-control" id="exampleInputName2" placeholder="Password">
        <br>
        <input type="text" class="form-control" id="exampleInputName2" placeholder="Conferma Password">
        <br>

</div>
<div class="modal-footer">
        <button type="button" class="btn btn-primary btn-xs" data-dismiss="modal">Chiudi</button>
        <button type="button" class="btn btn-secondary btn-xs">Salva modifiche</button>
      </div>




    </div>
  </div>
</div>
</div>



  <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
      </button>
        <h4 class="modal-title" id="gridSystemModalLabel">Crea evento</h4>
     </div>

     <div class="modal-body">
      <div class="row">
        <input type="text" class="form-control" id="exampleInputName2" placeholder="&#9998; Nome evento"><br>
      </div>

<!-- date picker-->

      <div class="row">
        <div class="col-sm-12" style="height:60px; height:60px;padding-left: 0px;padding-right: 0px;">
          <div class="form-group">
            <div class='input-group date' id='datetimepicker'>
              <input type="text" class="form-control" />
              <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar" style="color: #748F80;">
                </span>
              </span>
            </div>
          </div>
        </div>
      </div>

<div class="row">
  <div class="col-md-6">
        <ul class="nav navbar-nav navbar-left">
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">N.posti<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">10 posti</a></li>
              <li><a href="#">15 posti</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">20 posti</a></li>
            </ul>
          </ul>
  </div>


  <div class="col-md-6">
    <ul class="nav navbar-nav navbar-left">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sale Disponibili<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Sala Marco Aurelio</a></li>
            <li><a href="#">Sala Cesare</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Sala Cleopatra</a></li>
          </ul>
    </ul>
  </div>
</div>

<hr>
          
<div class="row">
  <textarea class="form-control" rows="3" placeholder="&#9998; Aggiungi note"></textarea><br>
</div>

<hr>

<div class="row">
  <div class="col-xs-12" style= "padding-left: 0px; padding-right: 0px">
    <div class="panel panel-warning">
      <div class="panel-heading" role="tab" id="headingTwo">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Invita i colleghi
          </a>
        </h4>
      </div>
      <div id="collapseTwo" class="panel-collapse collapse push left" role="tabpanel" aria-labelledby="headingTwo">
        <div class="panel-body">
          <h6 class="text-style">Harper reed</h6>
          <hr>
          <h6 class="text-style">Harper Reed</h6>
          <hr>
          <h6 class="text-style">harper Reed</h6>
          <hr>
          <h6 class="text-style">harper Reed</h6>
          
        </div>
      </div>
    </div>

      <div class="col-xs-12 input-group">
        <span class="input-group-addon" id="basic-addon1" style="color: #748F80;">@</span>
        <input type="text" class="form-control" placeholder="Email" aria-describedby="basic-addon1">
      </div>
    </div>
</div>



    </div>    
    
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Chiudi</button>
        <button type="button" class="btn btn-secondary">Salva evento</button>
      </div>
    </div>
  </div>
</div>




