@extends('layout.mainlayout')
@section('title', 'Student List')
@section('content')

<!-- NOTES -->
<!-- Last name fields must be able to fit 20+ characters -->

<div class="row">
   <div class="d-none d-sm-block col-sm-1 col-md-2">
   </div>
   <div class="col-12 col-sm-10 col-md-8">

       <!-- Add students -->
        <h4 class="top-divider mb-3 header-text"><strong>Add Students</strong></h4>
        <div class="universal-card p-2">
           <form method="post" action="/StudentPost">
                @csrf
                <div class="row ml-2 mr-2">
                    <div class="col-10">
                        <div class="student-form-inputs fname-input">
                            <input type="text" class="text-input" id="firstName" name="first_name" required />
                            <span class="bar"></span>
                            <label class="student-form-label" for="firstName">First Name</label>
                        </div>
                        <div class="student-form-inputs lname-input">
                            <input type="text" class="text-input" id="lastName" name="last_name" required />
                            <span class="bar"></span>
                            <label class="student-form-label" for="lastName">Last Name</label><br />
                        </div>
                        <div class="student-form-inputs id-input">
                            <input type="text" class="text-input" id="id" name="student_gov_id" required />
                            <span class="bar"></span>
                            <label class="student-form-label" for="id">ID</label><br />
                        </div>
                        <div class="student-form-inputs grade-input">
                            <select class="select-input" id="grade" required name='student_grade'>
                                @foreach ($grade as $g)
                                    <option value={{$g->grade_label_id}}>{{$g->grade_label}}</option>
                                @endforeach
                            </select>
                            <span class="bar"></span>
                            <label class="student-form-label" for="grade">Grade</label><br />
                        </div>
                        <div class="student-form-inputs grade-input">
                            <select class="select-input" id="assessedLevel" name="assessed_level" required>  
                                @foreach ($assessed as $a)
                                    <option value={{$a->assessed_level_label_id}}>{{$a->assessed_level_label}}</option>
                                @endforeach
                            </select>
                            <span class="bar"></span>
                            <label class="student-form-label" for="assignmentLevel">Assessed Level</label><br />
                        </div>
                    </div>
                    <div class="col-2">
                        <input type="submit" class="scriibi-primary-btn" id="submitBtn" value="Add" />
                    </div>
               </div>
           </form>
        </div>
       <!-- /Add Students -->

       <!-- Student List -->
       <h5 class="mt-5 mb-5 header-text"><strong>Student List</strong></h5>
       <div class="row">
           <div class="col-10 d-flex student-table-label">
               <p class="fname-input ml-4 mr-3">First Name</p>
               <p class="lname-input mr-2">Last Name</p>
               <p class="id-input mr-3">ID</p>
               <p class="grade-input ml-1 mr-3">Grade</p>
               <p class="grade-input mr-2">Assessed Level</p>
           </div>
           <div class="col-2"></div>
       </div>

       <!-- Student detail card -->
       @foreach ($students as $s)
        <div class="universal-card mt-2">        
                <div class="student-details row ml-2 mr-2 pt-2">
                    <div class="col-10">
                        <div class="student-form-inputs fname-input">
                            <p>{{$s->student_First_Name}}</p>
                        </div>
                        <div class="student-form-inputs lname-input">
                            <p>{{$s->student_Last_Name}}</p>
                        </div>
                        <div class="student-form-inputs id-input">
                            <p>{{$s->Student_Gov_Id}}</p>
                        </div>
                        <div class="student-form-inputs grade-input">
                            <p>{{$s->grade_label}}</p>
                        </div>
                        <div class="student-form-inputs grade-input">
                            <p>{{$s->assessed_level_label}}</p>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="student-icon-group">
                            <button class="icon-btn editStudentBtn" type="button">✏</button>
                            <button onclick="location.href='{{ url('/studentDelete/' . $s->student_Id) }}'" class="icon-btn" type="button">🗑</button>
                        </div>
                    </div>
                </div>        
            <!-- /student details -->

            <!-- Edit student form -->
            <form class="edit-form d-none" method="post">
                <div class="row ml-2 mr-2 pt-2">
                    <div class="col-10">
                        <div class="student-form-inputs fname-input">
                            <input type="text" class="text-input" id="{{$s->student_First_Name}}{{$s->Student_Gov_Id}}" value="{{$s->student_First_Name}}" required />
                            <span class="bar"></span>
                            <label class="student-form-label" for="{{$s->student_First_Name}}{{$s->Student_Gov_Id}}"></label>
                        </div>
                        <div class="student-form-inputs lname-input">
                            <input type="text" class="text-input" id="{{$s->student_Last_Name}}{{$s->Student_Gov_Id}}" value="{{$s->student_Last_Name}}" required />
                            <span class="bar"></span>
                            <label class="student-form-label" for="{{$s->student_Last_Name}}{{$s->Student_Gov_Id}}"></label>
                        </div>
                        <div class="student-form-inputs id-input">
                            <input type="text" class="text-input" id="{{$s->Student_Gov_Id}}" value="{{$s->Student_Gov_Id}}" required />
                            <span class="bar"></span>
                            <label class="student-form-label" for="{{$s->Student_Gov_Id}}"></label><br />
                        </div>
                        <div class="student-form-inputs grade-input">
                            <select class="select-input" id="grade{{$s->Student_Gov_Id}}" value="{{$s->grade_label}}" required>
                                <option>Grade 1</option>
                                <option>Grade 2</option>
                                <option>Grade 3</option>
                                <option>Grade 4</option>
                                <option>Grade 5</option>
                            </select>
                            <span class="bar"></span>
                            <label class="student-form-label" for="grade{{$s->Student_Gov_Id}}"></label><br />
                        </div>
                        <div class="student-form-inputs grade-input">
                            <select class="select-input" id="assessedLevel{{$s->Student_Gov_Id}}" value="{{$s->assessed_level_label}}" required>
                                <option>Grade 1</option>
                                <option>Grade 2</option>
                                <option>Grade 3</option>
                                <option>Grade 4</option>
                                <option>Grade 5</option>
                            </select>
                            <span class="bar"></span>
                            <label class="student-form-label" for="assignmentLevel{{$s->Student_Gov_Id}}"></label><br />
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="student-icon-group">
                            <input type="submit" class="icon-btn" value="✔" />
                            <input type="button" class="icon-btn " value="❌" />
                        </div>
                    </div>
               </div>
           </form>
            <!-- /Edit student form -->
        </div>
        @endforeach
       <!-- /Student detail card -->
    <!-- /student list -->
   </div>
   <div class="d-none d-sm-block col-sm-1 col-md-2">
   </div>
</div>
@endsection
