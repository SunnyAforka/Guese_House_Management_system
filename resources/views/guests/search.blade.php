@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <p class="text-muted">Guest House Record</p>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="border-top-0">S/N</th>
                            <th class="border-top-0">Reference No.</th>
                            <th class="border-top-0">Full Name</th>
                            <th class="border-top-0">Room No</th>
                            <th class="border-top-0">Room Type</th>
                            <th class="border-top-0">Amount Paid</th>
                            <th class="border-top-0">Balance</th>
                            <th class="border-top-0">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($guests as $key => $guest)
                        <tr>
                            <td> {{ $guests->firstItem() + $key }} </td>
                            <td> {{ $guest->ref_no }} </td>
                            <td>{{ $guest->name }}</td>
                            <td>{{ $guest->room_no }}</td>
                            <td>{{ $guest->room_type }}</td>
                            <td>{{ $guest->amnt_pd }}</td>
                            <td>{{ $guest->balance }}</td>
                            <td><form class="delete_guest" action="/guest/{{ $guest->id }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                        </tr>
                        @endforeach
                        <nav aria-label="Page navigation">
                            {{ $guests->links('pagination::bootstrap-4') }}
                        </nav>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
