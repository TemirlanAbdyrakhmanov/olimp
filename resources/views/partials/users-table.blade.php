@extends('partials.header-no-bg')
@section('wrapper')

<div class="container-fluid bg-white">
    <br>
    <br>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <table class="table table-striped table-responsive">
                <thead>
                <tr>
                    <h3 style="display: inline-block">Users</h3> &nbsp
                    <div class="btn-success count">{{ count($users) }}</div>
                </tr>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Books</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th></th>
                    <th>All Booking List</th>
                    <th></th>
                    <th></th>
                    <th><a href="{{ route('books') }}">View</a></th>
                </tr>
                @foreach($users as $r=>$u)

                    <tr>
                        <td>{{ $r+1 }}</td>
                        <td>{{ $u['name'] }}</td>
                        <td>{{ $u['email'] }}</td>
                        <td>{{ $u['phone'] }}</td>
                        <td><a href="{{ route('user.books', $u->id) }}">View</a></td>
                    </tr>

              @endforeach

                </tbody>
            </table>
        </div>

    </div>




</div>

@endsection

