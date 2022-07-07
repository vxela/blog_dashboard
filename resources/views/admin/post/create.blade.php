@extends('admin.layouts.main')

@section('css')
<link rel="stylesheet" href="{{ asset('vendors/mazer/assets/css/pages/form-element-select.css') }}">
@stop

@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Post Forms</h4>
            </div>

            <div class="card-body">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="formTitle" class="form-label">Title</label>
                                <textarea name="title" id="formTitle" class="form-control" rows="2" maxlength="100" placeholder="Title here..." required></textarea>
                                <p>
                                    <small class="text-muted">Max 100 character</small>
                                </p>
                            </div>
                            <div class="form-group">
                                <label for="formSubTitle" class="form-label">Subtitle</label>
                                <textarea name="subtitle" id="formSubTitle" class="form-control" rows="3" maxlength="200" placeholder="Subtitle here..." required></textarea>
                                <p>
                                    <small class="text-muted">Max 200 character</small>
                                </p>
                            </div>
                            <div class="form-group">
                                <label for="formContent" class="form-label">Content</label>
                                <textarea name="content" id="formContent" class="form-control" rows="10" placeholder="Subtitle here..." required></textarea>
                                <p>
                                    <small class="text-muted">Drag the bottom right cornet to expand the content form</small>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="formFileBgTitle" class="form-label">Title Image</label>
                                <input class="form-control" name="bg_title" type="file" id="formFileBgTitle">
                                <p>
                                    <small class="text-muted">*png, jpg, Maks 1Mb</small>
                                </p>
                            </div>
                            <div class="form-group">
                                <label for="formLabels" class="form-label">Labels</label>
                                <select class="choices mb-0 multiple-remove form-select" name="labels" multiple="multiple" id="formLabels" required>
                                    <option value="square">Square</option>
                                    <option value="rectangle">Rectangle</option>
                                    <option value="rombo">Rombo</option>
                                    <option value="romboid">Romboid</option>
                                    <option value="trapeze">Trapeze</option>
                                    <option value="traible">Triangle</option>
                                    <option value="polygon">Polygon</option>
                                </select>
                                <p>
                                    <small class="text-muted">Select labels may contain your post</small>
                                </p>
                            </div>
                            <div class="form-group">
                                <label for="formCategory" class="form-label">Category</label>
                                <select class="choices" name="category" id="formCategory" required>
                                    <option value="square">Square</option>
                                    <option value="rectangle">Rectangle</option>
                                    <option value="rombo">Rombo</option>
                                    <option value="romboid">Romboid</option>
                                    <option value="trapeze">Trapeze</option>
                                    <option value="traible">Triangle</option>
                                    <option value="polygon">Polygon</option>
                                </select>
                                <p>
                                    <small class="text-muted">Select category of your post</small>
                                </p>
                            </div>
                            <div class="form-group">
                                <button type="button"id="asdasdASDSDASD" class="btn btn-sm btn-secondary" onclick="addSourceInputForm()">Add Source</button>
                            </div>
                            <div id="source_box">
                            </div>
                        </div>
                    </div>
                </form>
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

@section('js')
    <script src="{{ asset('vendors/mazer/assets/js/extensions/form-element-select.js') }}"></script>
    <script>
        function addSourceInputForm() {
            const formString = `
            <div class="form-group">
                <input type="text" class="form-control form-control-sm" name="source_author[]" id="formSourceAuthor" placeholder="Enter Source Autor" required>
                <input type="text" class="form-control form-control-sm" name="source_reference[]" id="formSourceReference" placeholder="Enter Source Reference" required>
                <button type="button" class="btn btn-sm btn-danger mt-1" onclick="deleteThisInputGroup(this)">Remove</button>
            </div>
            `
            const parentElement = document.getElementById('source_box').insertAdjacentHTML('beforeend', formString)
        }

        function deleteThisInputGroup(e) {
            let author = e.parentElement.querySelectorAll("input[name='source_author[]']")[0].value
            let reference = e.parentElement.querySelectorAll("input[name='source_reference[]']")[0].value
            if (confirm(`Delete source ?\nauthor : ${author}\nreference : ${reference}`)) {
                e.parentElement.remove();
            }
        }
    </script>
@stop