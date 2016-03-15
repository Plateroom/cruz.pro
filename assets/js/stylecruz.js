	$(function () {
		$('#datetimepicker input').datetimepicker();

		$('#calendar').fullCalendar({
			defaultView: 'agendaDay',
			selectable: true,
			slotEventOverlap: false,
			select: function(start, end, jsEvent, view, resource) {
				alert('fai comparire il popup');
			},
			eventClick: function (event, jsEvent, view) {
				$('.popup-text-custom').show();
			},
			events: [
				{ id: '1', resourceId: 'a', start: '2016-03-06', end: '2016-01-08', title: 'event 1' },
				{ id: '2', resourceId: 'a', start: '2016-03-15T09:00:00', end: '2016-03-15T14:00:00', title: 'event 2' },
				{ id: '3', resourceId: 'b', start: '2016-03-15T12:00:00', end: '2016-03-16T06:00:00', title: 'event 3' },
				{ id: '4', resourceId: 'c', start: '2016-03-15T07:30:00', end: '2016-03-15T09:30:00', title: 'event 4' },
				{ id: '5', resourceId: 'd', start: '2016-03-15T10:00:00', end: '2016-03-15T15:00:00', title: 'event 5' }
			]
		});
	});