@extends('layout.mainlayout')
@section('title', 'Assessment-List')
@section('content')

<div class="row">
   <div class="d-none d-sm-block col-sm-1 col-md-2">
   </div>
    <div class="col-12 col-sm-10 col-md-8">
        <!-- show no assessment created message -->


        <!-- show list of assessment created -->
        <div class="has-rubric">
            <form class="mt-5" action="index.html" method="post" visibility="false">
                <div class="">
                    <div class="row d-flex justify-content-between mb-3">
                        <h5 class="rubric-list-title">Assessments</h5>
                        <button type="button" name="button" class="btn new-rubric px-4">New Assessment+</button>
                    </div>

                    <!-- do a student count; if 0 count then display below div -->
                    @if(count($assessment-list===0))
                    <div class="mt-5 rubric-instruction d-flex justify-content-center">
                        <div class="">
                            <p>You currently do not have any assessments.</p>
                            <p>Create assessment for your students by</p>
                            <p>clicking<button type="button" name="button" class="btn new-rubric px-4 mx-2">New Assessment+</button></p>
                        </div>

                    </div>
                    <!-- if student count >0 then display below-->
                    @elseif($assessment-list>0))
                    <div class="header-cells row rubric-table-header d-flex justify-content-between mt-5 pl-3">
                        <p class="col-4 text-left px-0">Title</p>
                        <p class="col-2 text-left px-0">Date Created</p>
                        <p class="col-2 text-left px-0">Rubric</p>
                        <p class="col-2 text-left px-0">Status</p>
                    </div>

                    <!-- populate more cells as per assessment -->
                    <div class="body-cells row ">
                        <button type="button" name="button" class="row btn btn-block rubric-list-row d-flex justify-content-between pl-3 m-0">
                            <p class="col-4 rubric-list-text text-truncate align-self-center text-left px-0">Cold Write - Narrative - What I did on the weekend</p>
                            <p class="col-2 rubric-list-text text-truncate align-self-center text-left px-1">20 - Feb - 2020</p>
                            <p class="col-2 rubric-list-text text-truncate align-self-center text-left px-0">Cold Write - Narrative - What I did on the weekend</p>
                            <p class="col-2 rubric-list-text text-truncate align-self-center text-left px-2">In Progress</p>
                        </button>
                    </div>
                    @endif
                </div>
            </form>
        </div>


   </div>
    <div class="d-none d-sm-block col-sm-1 col-md-2">
   </div>
</div>



@endsection