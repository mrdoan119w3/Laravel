<script src="{{ asset('js/jquery.quicksearch.min.js') }}"></script>
//Select remove all
<input id="exam_team-select-remove-all" type="checkbox" class="filled-in chk-col-light-blue"/>
<label for="exam_team-select-remove-all"></label>
//
<input type="checkbox" id="remove_exam_team_{{$team->id}}" class="filled-in chk-col-light-blue" name="dataRemoveExamTeam[]" value="{{$team->id}}" />
<label for="remove_exam_team_{{$team->id}}"></label>

var data_exam_team = $('#data_exam_team').DataTable();
  $('#exam_team-select-remove-all').on('click', function(){
      var rows = data_exam_team.rows({ 'search': 'applied' }).nodes();
      $('input[type="checkbox"]', rows).prop('checked', this.checked);
  });
