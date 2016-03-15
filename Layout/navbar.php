

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
              <li><a href="#lista-sale">Sale riunioni</a></li>
              <li class="divider-vertical"></li>
              <li><a href="#elenco-eventi">Eventi</a></li>
            </ul>
          </div>
   
          <ul class="nav navbar-nav navbar-right">
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profilo<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#dashboard">Dashboard</a></li>
              <li><a class="btn btn-link" data-toggle="modal" data-target=".bs-example-modal-lg" style="
    padding-left: 0px">Modifica profilo</a>
              </li>
              <li role="separator" class="divider"></li>
              <li><a href="#lista_utenti">Colleghi</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#log-out">Log out</a></li>
            </ul>
            <li><a href="#">img</a></li>
          </ul>

              
    
          </div>
        
      </nav>
  </div>

<!-- modal modif -->

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    
<div class="container-modal ">
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
<div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Chiudi</button>
        <button type="button" class="btn btn-secondary">Salva modifiche</button>
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
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       
        <form class="form-inline col-sm-offset-3">
          <div class="form-group">
            <label class="modal-title" id="myModalLabel">Crea evento</label>
            <input type="text" class="form-control" id="exampleInputName2" placeholder="Nome evento">
          </div>
        </form>
      </div>

      <div class="modal-body">



<!-- date picker-->

<div class="row">
    <div class="col-sm-12" style="height:60px;">
        <div class="form-group">
            <div class='input-group date' id='datetimepicker'>
                <input type="text" class="form-control" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar">
                    </span>
                </span>
            </div>
        </div>
    </div>
  <!--  <script type="text/javascript">
        $(function () {
            $('#datetimepicker10').datetimepicker({
                viewMode: 'years',
                format: 'MM/YYYY'
            });
        });
    </script> -->

<!--<div class="row">
  <div id="datepicker" class="input-append">
    <input data-format="MM-dd-yyyy" type="data"></input>
    <span class="add-on">
      <i data-time-icon="icon-time" data-date-icon="icon-calendar">
      </i>
    </span>
  </div>
</div> -->
<!-- <script type="text/javascript">
  $(function() {
    $('#datetimepicker3').datetimepicker({
      pickDate: false
    });
  });
</script> -->

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
          
        <!--   <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sede<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Milano</a></li>
                  <li><a href="#">Roma</a></li>
                  <li><a href="#">Napoli</a></li>
                </ul> -->
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
          

<textarea class="form-control" rows="3" placeholder="Aggiungi note" style="margin-top:30px; margin-bottom:30px;"></textarea>



<div class="row">
<div class="col-xs-5">
  <div class="panel panel-warning">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Invita i colleghi
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 
      </div>
    </div>
  </div>
</div>


<div class="col-xs-5 input-group">
  <span class="input-group-addon" id="basic-addon1">@</span>
  <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
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




