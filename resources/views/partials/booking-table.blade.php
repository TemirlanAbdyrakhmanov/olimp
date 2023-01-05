<div class="container-fluid">
    <br>
    <div class="row">
        <div class="col-md-12 text-center">
            <a @if($i > 0 && $i <= 4) href="/booking?i={{ $i-1 }}" @endif> <img class="arrow"
                    src="img/previous.svg" alt=""> </a>
            <h5 style="font-weight: 600; text-align: center; display: inline-block; padding: 0px 10px;">
                {{ $week[$i][0]." - ".end($week[$i]) }} </h5>
            <a @if($i >= 0 && $i <= 3) href="/booking?i={{ $i+1 }}" @endif><img class="arrow"
                    src="img/skip.svg" alt=""></a>
        </div>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr id="weekdays">
                <th></th>
                @for($w = 0; $w < count($week_days); $w++)

                <th colspan="2" style="background: {{ $color[$w] }}"> {{ $week_days[$w] }} </th>
                @endfor
            </tr>
            <tr id="dates">
                <th>Time</th>
                @for($w = 0; $w < count($week[$i]); $w++)

                <th colspan="2" style="background: {{ $color[$w] }}">{{ $week[$i][$w] }}</th>
                @endfor
            </tr>
            <tr id="fields">
                <th></th>
                @for($w = 0; $w < 7; $w++)

                <th style="background: #77ec77">{{ $field."1" }}</th>
                <th style="background: #4cae4c">{{ $field."2" }}</th>
                @endfor
            </tr>
        </thead>
        <tbody>
            @for($t = 0; $t < count($time_array)-1; $t++)

            <tr>
                <td>{{ $time_array[$t]}} -<br>{{ $time_array[$t+1] }}</td>
                @for($w = 0; $w < count($week[$i]); $w++)
                    @php
                    $field1 = \App\Models\Schedule::query()
                                ->selectRaw("comment, name, book_date as date, id, user_id, from_time, to_time")
                                ->where('field_id', '1')
                                ->where('from_time', $time_array[$t])
                                ->where('to_time', $time_array[$t+1])
                                ->where('book_date', date("Y-m-d", strtotime($week[$i][$w])))
                                ->first();
                    $field2 = \App\Models\Schedule::query()
                                ->selectRaw("comment, name, book_date as date, id, user_id, from_time, to_time")
                                ->where('field_id', '2')
                                ->where('from_time', $time_array[$t])
                                ->where('to_time', $time_array[$t+1])
                                ->where('book_date', date("Y-m-d", strtotime($week[$i][$w])))
                                ->first();

                               
                    @endphp
                <td @if(isset($field1)) style="background: #ec5964" @endif>
                    <div id="div{{ $w.$t.'1' }}" style="margin-top: 25%;">
                        @if(isset($field1))
                        <span id="{{ $w.$t }}1">Booked</span>
                        @if(auth()->user())
                            @if(auth()->user()->id == $field1->user_id)
                                @if(strtotime($field1->date) == strtotime("today"))
                                    @if(strtotime($field1->from_time) >= strtotime("2 hours"))
                                    <form method="POST" action="{{ route('booking.destroy', $field1->id) }}">
                                        @csrf
                                        @method('delete')
                                    <input type="submit"
                                        class="btn delete-book btn-default" title="Cancel booking" value="Cancel"/>
                                    </form>
                                    @endif
                                @elseif(strtotime($field1->date) >= strtotime("today"))
                                <form method="POST" action="{{ route('booking.destroy', $field1->id) }}">
                                    @csrf
                                    @method('delete')
                                <input type="submit"
                                    class="btn delete-book btn-default" title="Cancel booking" value="Cancel"/>
                                </form>

                        @endif
                        @endif
                        @endif
                        @else
                        @if(strtotime($week[$i][$w]) > strtotime("today"))
                           <input onclick="book_field(1, {{ $w }}, {{ $t }}, '{{ $week[$i][$w] }}', '{{ $time_array[$t] }}', '{{ $time_array[$t+1] }}', {{ auth()->user()->id }})" type="button" value="Book" class="btn btn-primary text-black">
                        @elseif(strtotime($week[$i][$w]) == strtotime("today") && strtotime($time_array[$t]) >= strtotime("now"))
                           <input onclick="book_field(1, {{ $w }}, {{ $t }}, '{{ $week[$i][$w] }}', '{{ $time_array[$t] }}', '{{ $time_array[$t+1] }}', {{ auth()->user()->id }})" type="button" value="Book" class="btn btn-primary text-black">
                        @else
                           <input onclick="book_field(1, {{ $w }}, {{ $t }}, '{{ $week[$i][$w] }}', '{{ $time_array[$t] }}', '{{ $time_array[$t+1] }}', {{ auth()->user()->id }})" type="button" value="Book" class="btn btn-default" disabled>
                        @endif
                    @endif
                </div>
                </td>

                <td @if(isset($field2)) style="background: #ec5964" @endif>
                    <div id="div{{ $w.$t.'2' }}" style="margin-top: 25%;">
                        @if(isset($field2))
                        <span id="{{ $w.$t }}2">Booked</span>
                        @if(auth()->user())
                            @if(auth()->user()->id == $field2->user_id)
                                @if(strtotime($field2->date) == strtotime("today"))
                                    @if(strtotime($field2->from_time) >= strtotime("2 hours"))

                                    <form method="POST" action="{{ route('booking.destroy', $field2->id) }}">
                                        @csrf
                                        @method('delete')
                                    <input type="submit"
                                        class="btn delete-book btn-default" title="Cancel booking" value="Cancel"/>
                                    </form>
                        @endif
                                @elseif(strtotime($field2->date) >= strtotime("today"))
                                <form method="POST" action="{{ route('booking.destroy', $field2->id) }}">
                                    @csrf
                                    @method('delete')
                                <input type="submit"
                                    class="btn delete-book btn-default" title="Cancel booking" value="Cancel"/>
                                </form>

                        @endif
                        @endif
                        @endif


                    @else
                        @if(strtotime($week[$i][$w]) > strtotime("today"))
                            <input onclick="book_field(2, {{ $w }}, {{ $t }}, '{{ $week[$i][$w] }}', '{{ $time_array[$t] }}', '{{ $time_array[$t+1] }}', {{ auth()->user()->id }})" type="button" value="Book" class="btn btn-primary text-black">
                        @elseif(strtotime($week[$i][$w]) == strtotime("today") && strtotime($time_array[$t]) >= strtotime("now"))
                            <input onclick="book_field(2, {{ $w }}, {{ $t }}, '{{ $week[$i][$w] }}', '{{ $time_array[$t] }}', '{{ $time_array[$t+1] }}', {{ auth()->user()->id }})" type="button" value="Book" class="btn btn-primary text-black">
                        @else
                            <input onclick="book_field(2, {{ $w }}, {{ $t }}, '{{ $week[$i][$w] }}', '{{ $time_array[$t] }}', '{{ $time_array[$t+1] }}', {{ auth()->user()->id }})" type="button" value="Book" class="btn btn-default" disabled>
                        @endif
                    @endif</div>
                </td>


                @endfor
            </tr>
            @endfor
        </tbody>
    </table>
</div>


<!-- // hidden form -->

@if(auth()->user()->id)
<form action="{{ route('booking.store') }}" id="new_record" method="post">
    @csrf
    <input type="hidden" name="w" id="w"/>
    <input type="hidden" name="t" id="t"/>
    <input type="hidden" name="field" id="field"/>
    <input type="hidden" name="date" id="date"/>
    <input type="hidden" name="i" value="{{ $i }}"/>
    <input type="hidden" name="time_from" id="time_from"/>
    <input type="hidden" name="time_to" id="time_to"/>
</form>
@endif
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center">Reserve</h4>
            </div>
            <div class="modal-body">
                @php
                $is_logged_in = \App\Models\User::find(auth()->user()->id);
                @endphp
                @if(!auth()->user() || !$is_logged_in['is_logged_in'])

                    <a href={{ route('register') }}>Please, register first</a> или <a href={{ route('login') }}>Sign in</a> , to use the booking function.
                @elseif($_SESSION['user_type'] == '1')

                <div class="row">
                    <div class="col-md-offset-3 col-md-6">
                        <form action="new_record.php" id="new_record_admin" method="post">
                            <input type="hidden" name="w" id="w"/>
                            <input type="hidden" name="t" id="t"/>
                            <input type="hidden" name="field" id="field"/>
                            <input type="hidden" name="date" id="date"/>
                            <input type="hidden" name="i" value="<?=$i;?>"/>
                            <input type="hidden" name="time_from" id="time_from"/>
                            <input type="hidden" name="time_to" id="time_to"/>
                            <label for="name">Name</label><input type="text" name="name" id="name"/><br>
                            <label for="phone">Phone</label><input class="form-control" type="text" name="phone" id="phone"/>
                        </form>
                    </div>
                </div>

                @elseif($_SESSION['is_banned'])

                    Unfortunately, you are blocked. Please, refer booking rules.
                @endif
            </div>
            <div class="modal-footer">
                @if(auth()->user())
                <button type="button" class="btn btn-primary" id="admin-book" data-dismiss="modal">Бронь</button>
                @endif
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
