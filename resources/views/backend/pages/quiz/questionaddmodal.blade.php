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

                    <div class="form-group">
                        <label for="custom select">Select Course</label>
                        <select class="form-control" name="elearning_course_id">
                          <option label="Choose Course"></option>
                          <?php foreach ($courses as $item): ?>
                            <option value="{{$item->id}}">{{$item->course_title}}</option>
                          <?php endforeach; ?>
                        </select>
                      </div>

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
                        <label for="Hints 1">Option 1</label>
                        <input type="text" class="form-control" name="option1" aria-describedby="hints1"
                               placeholder="Options 1">

                    </div>
                    <div class="form-group">
                        <label for="Hints 2">Option 2</label>
                        <input type="text" class="form-control" name="option2" aria-describedby="hints2"
                               placeholder="Options 2">
                    </div>
                    <div class="form-group">
                        <label for="Hints 3">Option 3</label>
                        <input type="text" class="form-control" name="option3" aria-describedby="hints3"
                               placeholder="Options 3">
                    </div>
                    <div class="form-group">
                        <label for="Hints 4">Option 4</label>
                        <input type="text" class="form-control" name="option4" aria-describedby="hints4"
                               placeholder="Options 4">

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
