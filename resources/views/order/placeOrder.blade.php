@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Order</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <form action="">
                              <div class="form-group">
                                <label for="date">Date</label>
                                <input type="date" class="form-control" id="date" name="date">
                              </div>
                              <div class="form-group">
                                <label for="party">Party:</label>
                                <input type="party" class="form-control" id="party" name="party">
                              </div>
                              <button type="submit" class="btn btn-default">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
