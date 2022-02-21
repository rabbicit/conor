<div class="all-tracks">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="card-areas">
                <h4 class="card-title">Album Publish Calendar</h4>
            </div>
            <div class="card-body">
              <div id='calendar'></div>
            </div>
          </div>
        </div>
      </div>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.js"></script>
      <script>
        $(document).ready(function() {

$('#calendar').fullCalendar({

  displayEventTime: false,
  timeFormat: 'H(:mm)',

  header: {
    left: 'prev,next today',
    center: 'title',
    right: 'month'
  },

  allDayDefault: false,
  editable: true,
  droppable: true,
  @if($albums)
  eventRender: function(event, el) {

    el.find('.fc-content').html("<p style='text-align:center;'><i style='font-size:30px;'class='mdi mdi-information-outline'></i><br>"+event.title+"</p>");

  },
  events: [
  @foreach($albums as $album)
  {
    title: '{{$album->name}}',
    start: '{{ date('Y-m-d', strtotime($album->published_at)) }}'
  },
  @endforeach
  ]
  @endif
})

});
      </script>
</div>