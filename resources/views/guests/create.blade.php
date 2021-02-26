@extends('layouts.app')
@section('content')
<div class="row">

    <div class="col-lg-12 col-xlg-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <form class="form-horizontal form-material" action="{{ route('guest.add') }}" method="POST">
                    @csrf
                    <div class="form-group row mb-4" style="padding-left: 15px">
                        <div class="col-md-6 border-bottom p-0">
                        <label class="p-0">Full Name</label>
                            <input
                                type="text"
                                name="name"
                                placeholder="Lucy James"
                                required
                                class="form-control p-0 border-0">
                        </div>
                        <div class="col-md-6 border-bottom p-0">
                        <label class="p-0">Ref No.</label>
                            <input type="text" name="ref_no" placeholder="123 456 7890"
                                class="form-control p-0 border-0">
                        </div>
                    </div>

                    <div class="form-group row mb-4" style="padding-left: 15px">
                        <div class="col-md-6 border-bottom p-0">
                        <label class="p-0">Email</label>
                        <input type="email" name="email" placeholder="E-Mail Address"
                        class="form-control p-0 border-0" name="example-email"
                        id="example-email">
                        </div>
                        <div class="col-md-6 border-bottom p-0">
                        <label class="p-0">Phone No</label>
                        <input type="text" name="phone_no" placeholder="123 456 7890"
                        class="form-control p-0 border-0">
                        </div>
                    </div>

                    <div class="form-group row mb-4" style="padding-left: 15px">
                        <div class="col-md-6 border-bottom p-0">
                        <label class="p-0">Room No</label>
                            <input
                            type="text"
                            name="room_no"
                            placeholder="123 456 7890"
                            required
                            class="form-control p-0 border-0">
                        </div>
                        <div class="col-md-6 border-bottom p-0">
                        <label class="p-0">Room Type</label>
                            <select
                            name="room_type"
                            required
                            class="form-control p-0 border-0">
                            @foreach ($rooms as $room)
                            <option>{{ $room->name }}</option>
                            @endforeach

                            </select>
                        </div>
                    </div>

                    <div class="form-group row mb-4" style="padding-left: 15px">
                        <div class="col-md-6 border-bottom p-0">
                        <label class="p-0">Amount Paid</label>
                            <input
                            type="text"
                            name="amnt_pd"
                            required
                            placeholder="123 456 7890"
                            class="form-control p-0 border-0">
                        </div>
                        <div class="col-md-6 border-bottom p-0">
                           <!-- Balance should be Nullable -->
                        <label class="p-0">Balance Remaining</label>
                            <input type="text" name="balance" placeholder="123 456 7890"
                                class="form-control p-0 border-0">
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-success">Add New Guest</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
@endsection
