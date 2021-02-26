@extends('layouts.app')
@section('content')
<div class="row">

    <div class="col-lg-12 col-xlg-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <form class="form-horizontal form-material" action="{{ route('ttr.add') }}" method="POST">
                    @csrf
                    <div class="form-group row mb-4" style="padding-left: 15px">
                        <div class="col-md-12 border-bottom p-0">
                        <label class="p-0">Room Type</label>
                            <input
                                type="number"
                                name="figure"
                                placeholder="{{ $getlastRoom }}"
                                required
                                class="form-control p-0 border-0">
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-success">Save Room Type</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
@endsection
