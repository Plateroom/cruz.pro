

		<!-- Navigation -->

      <nav class="navbar-default" role="navigation">
        <div class="container-fluid">

          <!-- header -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#user"> <span class="glyphicon glyphicon-asterisk" style="color: #748F80; margin-right: 15px"></span><strong>Cruz.pro</strong></a>
          </div>

          <!-- navbar links -->
          <div class="collapse navbar-collapse">
          <div class="col-xs-offset-4 col-md-offset-4">    
            <ul class="nav navbar-nav nav">
              <li><button type="button" class=" btn btn-md btn-default" data-toggle="modal" data-target="#myModal">Crea evento</button></li>
              <li><a href="#elenco-sale">Sale riunioni</a></li>
              <li class="divider-vertical"></li>
              <li><a href="#elenco-eventi">Eventi</a></li>
            </ul>
          </div>
   
          <ul class="nav navbar-nav navbar-right">
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profilo<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#dashboard">Dashboard</a></li>
              <li><a href="#modifica-profilo">Modifica</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#log-out">Log out</a></li>
            </ul>
            <li><a href="#">img</a></li>
          </ul>

              
    
          </div>
        </div>
      </nav>
  </div>



  <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h5 class="modal-title" id="myModalLabel">Crea evento</h5>
      </div>
      <div class="modal-body">



<!-- date picker-->

<div class="row">
    <div class="col-sm-12" style="height:60px;">
        <div class="form-group">
            <div class='input-group date' id='datetimepicker10'>
                <input type='text' class="form-control" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar">
                    </span>
                </span>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker10').datetimepicker({
                viewMode: 'years',
                format: 'MM/YYYY'
            });
        });
    </script>
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
          
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sede<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Milano</a></li>
                  <li><a href="#">Roma</a></li>
                  <li><a href="#">Napoli</a></li>
                </ul>
        </ul>
  </div>


</div>
          

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
</div>






        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Chiudi</button>
        <button type="button" class="btn btn-secondary">Salva evento</button>
      </div>
    </div>
  </div>
</div>




