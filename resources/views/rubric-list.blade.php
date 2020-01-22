@extends('layout.mainlayout')
@section('title', 'Rubric-List')
@section('content')

<div class="row">
   <div class="d-none d-sm-block col-sm-1 col-md-2">
   </div>
    <div class="col-12 col-sm-10 col-md-8">

        <!-- show no rubric created message -->
        <!-- <div class="no-rubric">
            <form class="mt-5" action="index.html" method="post">
                <div class="d-flex justify-content-between mx-5">
                    <h5 class="rubric-list-title">Rubric List</h5>
                    <button type="button" name="button" class="btn new-rubric px-4">New Rubric+</button>
                </div>
                <div class="mt-3">

                </div>
                <div class="mt-5 rubric-instruction d-flex justify-content-center">
                    <div class="">
                        <p>You currently do not have any rubric templates.</p>
                        <p>Click the <button ype="button" name="button" class="btn new-rubric px-4">New Rubric+</button> to create your first rubric</p>
                        <p>and using them for your assessments!</p>
                    </div>

                </div>
            </form>

        </div> -->

        <!-- show list of rubric created -->
        <div class="has-rubric">
            <form class="mt-5" action="index.html" method="post" visibility="false">
                <div class="">
                    <div class="row d-flex justify-content-between mb-3">
                        <h5 class="rubric-list-title">Rubric List</h5>
                        <button type="button" name="button" class="btn new-rubric px-4">New Rubric+</button>
                    </div>
                    <div class="header-cells row rubric-table-header d-flex justify-content-between mt-5 pl-3">
                        <p class="col-4 text-left px-0">Template Name</p>
                        <p class="col-2 text-left px-0">Date Created</p>
                        <p class="col-4 text-left px-0">Skills</p>
                    </div>

                    <!-- populate more cells as per rubric -->
                    <div class="body-cells row ">
                        <button type="button" name="button" class="row btn btn-block rubric-list-row d-flex justify-content-between pl-3 m-0">
                            <p class="col-4 rubric-list-text text-truncate align-self-center text-left px-0">Cold Write - Narrative - What I did on the weekend</p>
                            <p class="col-2 rubric-list-text text-truncate align-self-center text-left px-1">20 - Feb - 2020</p>
                            <p class="col-4 rubric-list-text text-truncate align-self-center text-left px-2">Paragraphing, Sequencing, Text Pattern, Ending, Sentence Length, Modality, Vocabulary, Figurative language, Writer’s voice (Tone), Fluency...</p>
                        </button>
                    </div>
                </div>
            </form>
        </div>

   </div>
    <div class="d-none d-sm-block col-sm-1 col-md-2">
   </div>
</div>
@endsection
