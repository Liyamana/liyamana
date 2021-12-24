@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.letter_template_categories.update')}}" method="post">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-6">
                        <label>Category Name</label>
                        <input type="text" value="{{$category_details->category_name}}" class="form-control" name="category_name"> <br><br>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Icon</label><br>
                                        <button id="picker_icon" data-icon="{{$category_details->icon}}" class="btn btn-secondary" role="iconpicker">

                                        </button> <br><br>
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
                            <input type="hidden" name="feature_image" value="{{$category_details->feature_image}}" class="selected-files">
                        </div>
                        <div class="file-preview box sm">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>Description</label>
                        <textarea class="form-control" rows="6" name="description">{{$category_details->description}}</textarea> <br>

                        <div class="row">
                            <div class="col-md-6">
                                <label>Order</label>
                                <input type="number" value="{{$category_details->order}}" min="0" max="100" class="form-control" name="order">
                            </div>
                            <div class="col-md-6">

                                <label>Feature</label>
                                <select name="features" class="form-control">
                                    <option value="1" {{$category_details->features == "1" ? "selected" : ""}}>Enabled</option>
                                    <option value="0" {{$category_details->features == "0" ? "selected" : ""}}>Disabled</option>
                                </select>
                            </div>
                        </div>
                        <br>

                        <input type="hidden" name="id" value="{{$category_details->id}}">

                        <label>Published</label>
                        <select name="published" class="form-control">
                            <option value="1" {{$category_details->status == "0" ? "selected" : ""}}>Enabled</option>
                            <option value="0" {{$category_details->status == "0" ? "selected" : ""}}>Disabled</option>
                        </select>
                    </div>
                </div> <br>

                <button type="submit" class="btn btn-primary">Create </button>

            </form>

        </div>
    </div>





@endsection
