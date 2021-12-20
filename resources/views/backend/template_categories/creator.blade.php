@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.letter_template_categories.store')}}" method="post">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-6">
                        <label>Category Name</label>
                        <input type="text" value="" class="form-control" name="category_name"> <br><br>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Icon</label><br>
                                        <button id="picker_icon" class="btn btn-secondary" role="iconpicker"></button> <br><br>
                                    </div>
                                    <div class="col-md-8">
                                        <p>Why you should select icon</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mollis sapien sit amet mauris hendrerit maximus.</p>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <label>Images</label>
                        <div class="input-group" data-toggle="aizuploader" data-type="image">
                            <div class="input-group-prepend">
                                <div class="input-group-text bg-soft-secondary font-weight-medium">Browse</div>
                            </div>
                            <div class="form-control file-amount">Choose File</div>
                            <input type="hidden" name="feature_image" value="" class="selected-files" >
                        </div>
                        <div class="file-preview box sm">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>Description</label>
                        <textarea class="form-control" rows="6" name="description"></textarea> <br>

                        <div class="row">
                            <div class="col-md-6">
                                <label>Order</label>
                                <input type="number" value="0" min="0" max="100" class="form-control" name="order">
                            </div>
                            <div class="col-md-6">

                                <label>Feature</label>
                                <select name="features" class="form-control">
                                    <option value="1">Enabled</option>
                                    <option value="0">Disabled</option>
                                </select>
                            </div>
                        </div>
                        <br>

                        <label>Published</label>
                        <select name="published" class="form-control">
                            <option value="1">Enabled</option>
                            <option value="0">Disabled</option>
                        </select>
                    </div>
                </div> <br>

                <button type="submit" class="btn btn-primary">Create </button>

            </form>

        </div>
    </div>





@endsection
