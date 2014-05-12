function calendario(template, events_ajax) {
  
	var options = {
		events_source: events_ajax,
		view: 'month',
		tmpl_path: template,
		tmpl_cache: false,
		day: '2013-03-12',
		first_day: 1,
		language: 'es-ES',
		modal: '#events-modal',
		onAfterEventsLoad: function(events) {
			if(!events) {
				return;
			}
			var list = $('#eventlist');
			list.html('');

			$.each(events, function(key, val) {
				$(document.createElement('li'))
					.html('<a href="' + val.url + '">' + val.title + '</a>')
					.appendTo(list);
			});
		},
		onAfterViewLoad: function(view) {
		  
		  //pongo la fecha en el titulo
			$('.page-header h3').text(this.getTitle());
			
			//muestro el boton activo
			$('.btn-group button').removeClass('active');
			$('button[data-calendar-view="' + view + '"]').addClass('active');
      
      //mostrar un mensaje al usuario, segun la vista del calendario
      mensaje = '';
			if (view == 'day'){
			  mensaje = 'Haga click sobre la planilla para reservar un turno';
			}
			else if(view == 'year' || view == 'month'){
			  mensaje = 'Haga doble click sobre el calendario para ampliar';
			}
      $('#mensaje').html(mensaje);
      
      //genero un gestor para el evento click en la grilla de la vista por hora
      if (view == 'day'){
        var calendar_obj = this;
  			$('.cal-day-hour-part').click(function(){
          fecha = calendar_obj.getStartDate();
          hora_array = $(this).children().first().find('b').html().split(':') ;
          año = fecha.getFullYear(); //4 digitos
          mes = fecha.getMonth()+1; //de 1 al 12
          dia = fecha.getDate(); //de 1 al 31
          hora = hora_array[0]; //de 0 a 23
          minuto = hora_array[1]; //de 0 a 59
          alert('Se puede mostrar un modal para reservar turno el '+dia+'/'+mes+'/'+año+' a las '+ hora + ':' + minuto);
        });
      }
      
		},
		classes: {
			months: {
				general: 'label'
			}
		}
	};

	var calendar = $('#calendar').calendar(options);
  
  $('.btn-group button[data-calendar-nav]').each(function() {
  	var $this = $(this);
  	$this.click(function() {
  		calendar.navigate($this.data('calendar-nav'));
  	});
  });
  
  $('.btn-group button[data-calendar-view]').each(function() {
  	var $this = $(this);
  	$this.click(function() {
  		calendar.view($this.data('calendar-view'));
  	});
  });

  $('#events-in-modal').change(function(){
  	var val = $(this).is(':checked') ? $(this).val() : null;
  	calendar.setOptions({modal: val});
  });
  $('#events-modal .modal-header, #events-modal .modal-footer').click(function(e){
  	//e.preventDefault();
  	//e.stopPropagation();
  });
}