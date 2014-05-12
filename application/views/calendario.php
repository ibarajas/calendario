<!DOCTYPE html>
<html>
<head>
  <title>Twitter Bootstrap jQuery Calendar component</title>

  <meta name="description" content="Full view calendar component for twitter bootstrap with year, month, week, day views.">
  <meta name="keywords" content="jQuery,Bootstrap,Calendar,HTML,CSS,JavaScript,responsive,month,week,year,day">
  <meta name="author" content="Serhioromano">
  <meta charset="UTF-8">

  <link rel="stylesheet" href="<?php echo site_url('css/bootstrap.min.css')?>">
  <link rel="stylesheet" href="<?php echo site_url('css/bootstrap-theme.min.css')?>">
  <link rel="stylesheet" href="<?php echo site_url('css/calendar.css')?>">

  <style>
    #cal-slide-content {background-image: url("<?php echo site_url('img/dark_wood.png')?>");}
    #cal-slide-tick {background-image: url("<?php echo site_url('img/tick.png')?>");}
  </style>
</head>
<body>
<div class="container">

  <div class="page-header">
    <h3></h3>
    <small>Ejemplo de implementacion de un calendario interactivo. Para ver el ejemplo con eventos ir al mes de marzo de 2013</small>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="form-inline">
        <div class="btn-group">
          <button class="btn btn-primary" data-calendar-nav="prev"><< Anterior</button>
          <button class="btn" data-calendar-nav="today">Hoy</button>
          <button class="btn btn-primary" data-calendar-nav="next">Siguiente >></button>
        </div>
        <div class="btn-group">
          <button class="btn btn-warning" data-calendar-view="year">Año</button>
          <button class="btn btn-warning active" data-calendar-view="month">Mes</button>
          <button class="btn btn-warning" data-calendar-view="week">Semana</button>
          <button class="btn btn-warning" data-calendar-view="day">Día</button>
        </div>
      </div>
    </div>
    <div class="col-md-9"><br />
      <span id="mensaje" style="font-size:16pt;line-height:32pt;"></span>
      <div id="calendar"></div>
    </div>
    <div class="col-md-3">
      <div class="row-fluid">
        <span>Aquí se puede poner el filtro por "Espacios"!!!</span>
      </div>

    </div>
  </div>
  
  <div class="modal fade" id="events-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Event</h4>
        </div>
        <div class="modal-body" style="height: 400px">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
  <br /><br />

  <script type="text/javascript" src="<?php echo site_url('js/jquery.min.js')?>"></script>
  <script type="text/javascript" src="<?php echo site_url('js/underscore-min.js')?>"></script>
  <script type="text/javascript" src="<?php echo site_url('js/bootstrap.min.js')?>"></script>
  <script type="text/javascript" src="<?php echo site_url('js/language/es-ES.js')?>"></script>
  <script type="text/javascript" src="<?php echo site_url('js/calendar.js')?>"></script>
  <script type="text/javascript" src="<?php echo site_url('js/app.js')?>"></script>

  <script>
    calendario('<?php echo site_url('assets/calendar/tmpls')?>/', '<?php echo site_url('calendario/events_json')?>');
    $(document).onload(function(){
      $('.cal-day-hour-part').click(function(){
        alert('');
      })
    });
  </script>

  <script type="text/javascript">
    var disqus_shortname = 'bootstrapcalendar'; // required: replace example with your forum shortname
    (function() {
      var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
      dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
      (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
  </script>
</div>
</body>
</html>