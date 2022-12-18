@extends('partials.layout')
<style>
textarea{
    display:block;max-width:100%;height:auto;
}
th, td{
    color: black;
    font-size: 14px;
    font-family: 'Varela Round', sans-serif;
    text-align: center;

}
.selectize-input {
    padding: 0;
}
span{
    color: black;
}

</style>
@section('content')

@include('partials.booking-wrapper')
@include('partials.booking-table')

@include('partials.footer')

@endsection
