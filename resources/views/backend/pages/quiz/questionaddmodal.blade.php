<div class="modal fade" id="QuestionAdd{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="QuestionAdd"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="QuestionAdd">Add Question</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('question-store') }}" method="POST">
                    @csrf

                    <input type="hidden" name="elearning_course_id" value="{{ $data->elearning_course_id }}">

                      <div class="form-group">
                        <label for="custom select">Select Quiz Name</label>
                        <select class="form-control" name="quiz_id">
                          <option label="Choose Quiz"></option>
                          <?php foreach ($quizes as $items): ?>
                            <option value="{{$items->id}}">{{$items->quiz_name}}</option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                    <div class="form-group">
                        <label for="question">Question</label>
                        <input type="text" class="form-control" name="question" aria-describedby="question"
                               placeholder="Question">
                    </div>
                    <div class="form-group">
                      <label for="options">Options</label>
                      <input class="form-control" type="text" name="options"  placeholder="Options" data-role="tagsinput">
                    </div>
                    <div class="form-group">
                        <label for="Hints 4">Correct Answer</label>
                        <input type="text" class="form-control" name="answer" aria-describedby="time"
                               placeholder="Enter">
                    </div>
                    

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
