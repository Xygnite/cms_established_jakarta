@extends('layouts.auth')
@section('content')
    <div class="content-wrapper">
        <div class="content">





            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-default">
                        <div class="card-header card-header-border-bottom">
                            <h2>Create Post</h2>
                        </div>

                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label for="postTitle">Post TItle</label>
                                    <input type="email" class="form-control" id="postTitle" placeholder="Post Title">
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" id="description" rows="3"></textarea>
                                </div>


                                <div class="form-footer pt-4 pt-5 mt-4 border-top">
                                    <button type="submit" class="btn btn-primary btn-default">Submit</button>
                                    <button type="submit" class="btn btn-secondary btn-default">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Content -->
    </div> <!-- End Content Wrapper -->
@endsection
