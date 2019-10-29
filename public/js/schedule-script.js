$(function () {

 $('#calendar').fullCalendar({
    header: { 
      left: 'prev,next today',
      center: 'title',
      right: 'month,agendaWeek,agendaDay,listWeek'
    },
    defaultView: 'agendaWeek',
    navLinks: true, // can click day/week names to navigate views
    editable: true,
    droppable: true, // this allows things to be dropped onto the calendar
    eventLimit: true, // allow "more" link when too many events,
    eventDurationEditable: false,
    eventStartEditable: false,
    weekends: false,
    allDaySlot: false,
    minTime: '08:00:00',
    maxTime: '20:00:00',
    defaultTimedEventDuration: '01:00:00',
    selectable: true,
    selectHelper: true,
    /* render events from database */
    eventSources: [

    ],
    events: '/getEvents',
    /* function eventRender: triggered while an event is being rendered. */
    eventRender: function(event) {
    },
    /* function loading: Triggered when event or resource fetching starts/stops. */
    loading: function (isLoading) {
      $("#loader-agenda").css('display', 'block');
    },
    /* function eventAfterAllRender: Triggered after all events have finished rendering. */
    eventAfterAllRender: function (view) {
      $("#loader-agenda").css('display', 'none');
    },
    /* function eventClick: Triggered when the user clicks an event. */
    eventClick: function(event) {
      
    }
  });
});