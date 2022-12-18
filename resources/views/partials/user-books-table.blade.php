@extends('partials.header-no-bg')
@section('wrapper')
<div class="container-fluid bg-white" >
    <br>
    <br>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <table class="table table-striped table-responsive">
                <thead>
                <tr>
                    <h3 style="display: inline-block">Заказы {{ $user?->name }}</h3> &nbsp
                    <div class="btn-success count">{{ count($books) }}</div>
                </tr>
                <tr>
                    <th>#</th>
                    @if(!isset($user))
                    <th>Имя</th>
                    @endif
                    <th>Дата</th>
                    <th>Время</th>
                    <th>Поле</th>
                    <th>Комментарий</th>
                    <th>Удалить</th>
                </tr>
                </thead>
                <tbody>
                @foreach($books as $r=>$d)
                    <tr>
                        <td>{{  $r  + 1}}</td>
                        @if(!isset($user))
                    <td>{{ $d->user->name }}</td>
                    @endif
                        <td>
                       {{ $d->book_date}}
                        </td>
                        <td>
                           {{ $d->from_time."-".$d->to_time }}
                        </td>

                        <td>
                           @if($d->field_id == 1)
                            №1
                           @else
                                №2
                            @endif
                        </td>

                        <td>
                            {{  $d->comment }}
                        </td>
                        <td>
                            <form method="POST" action="{{ route('booking.destroy', $d->id) }}">
                                @csrf
                                @method('delete')
                            <input type="submit"
                                class="btn delete-book btn-default" title="Удалить" value="Удалить"/>
                            </form>
                        </td>

                    </tr>

                @endforeach

                </tbody>
            </table>
        </div>

    </div>




</div>
@endsection
