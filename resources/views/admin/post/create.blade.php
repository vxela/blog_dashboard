@extends('admin.layouts.main')

@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Post Forms</h4>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="basicInput">Title</label>
                            <input type="text" class="form-control" id="title" placeholder="Post title" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="basicInput">Sub Title</label>
                            <input type="text" class="form-control" id="sub_title" placeholder="Sub Title" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="basicInput">Title</label>
                            <input type="text" class="form-control" id="title" placeholder="Post title" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="basicInput">Title</label>
                            <input type="text" class="form-control" id="title" placeholder="Post title" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="disabledInput">Disabled Input</label>
                            <input type="text" class="form-control" id="disabledInput" placeholder="Disabled Text" disabled="">
                        </div>
                        <div class="form-group">
                            <label for="disabledInput">Readonly Input</label>
                            <input type="text" class="form-control" id="readonlyInput" readonly="readonly" value="You can't update me :P">
                        </div>

                        <div class="form-group">
                            <label for="disabledInput">Static Text</label>
                            <p class="form-control-static" id="staticInput">email@mazer.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Post Form</h4>
            </div>
            <div class="card-body">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, commodi? Ullam quaerat similique iusto
                temporibus, vero aliquam praesentium, odit deserunt eaque nihil saepe hic deleniti? Placeat delectus
                quibusdam ratione ullam!
            </div>
        </div>
    </section>
@stop