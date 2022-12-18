<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class BookingController extends Controller
{
    public function books(Request $request)
    {
        $books = Schedule::all();
        return view('user-books', [ 'user' => null, 'books' => $books]);
    }

    public function index(Request $request)
    {

        $i = 0;
        if ($request->has('i')) {
            if ($i >= 0 || $i <= 3) {
                $i = $request->get('i');
            }
        }
        // if(isset($_POST['submit'])){
        //     $i = getpost("i");
        //     if($_SESSION['user_type'] == 0){$name = $_SESSION['name'];}else{ $name = getpost("name");}
        //     $date = date("Y-m-d",strtotime(getpost("date")));
        //     $from = getpost("from");
        //     $to = getpost("to");
        //     $field = getpost("field");
        //     $comment = getpost("comment");
        //     $insert = array("user_id"=>$_SESSION['user_id'],"name"=>$name,
        //         "field_id" => $field,"date"=>$date,"from_time"=>$from,"to_time"=>$to,"comment"=>$comment);
        //     $db->insert("schedule",$insert);
        //     echo '<script>window.location = "booking.php?i='.$i.'";</script>';
        // }
        $day_of_week = date("N");
        $today = date("d.m.Y");
        $week[0] = array();
        $week[1] = array();
        $week[2] = array();
        $week[3] = array();
        $week[4] = array();
        $field = "Поле №";
        switch ($day_of_week) {
            case 1:
                array_push($week[0], $today);
                for ($m = 1; $m <= 6; $m++) {
                    array_push($week[0], date("d.m.Y", strtotime("+" . $m . " day", strtotime($today))));
                }
                for ($m = 7; $m <= 13; $m++) {
                    array_push($week[1], date("d.m.Y", strtotime("+" . $m . " day", strtotime($today))));
                }
                for ($m = 14; $m <= 20; $m++) {
                    array_push($week[2], date("d.m.Y", strtotime("+" . $m . " day", strtotime($today))));
                }
                for ($m = 21; $m <= 27; $m++) {
                    array_push($week[3], date("d.m.Y", strtotime("+" . $m . " day", strtotime($today))));
                }
                for ($m = 28; $m <= 34; $m++) {
                    array_push($week[4], date("d.m.Y", strtotime("+" . $m . " day", strtotime($today))));
                }

                break;
            case 2:
                array_push($week[0], date("d.m.Y", strtotime("-1 day", strtotime($today))));
                array_push($week[0], $today);
                for ($m = 1; $m <= 5; $m++) {
                    array_push($week[0], date("d.m.Y", strtotime("+" . $m . " day", strtotime($today))));
                }
                for ($m = 6; $m <= 12; $m++) {
                    array_push($week[1], date("d.m.Y", strtotime("+" . $m . " day", strtotime($today))));
                }
                for ($m = 13; $m <= 19; $m++) {
                    array_push($week[2], date("d.m.Y", strtotime("+" . $m . " day", strtotime($today))));
                }
                for ($m = 20; $m <= 26; $m++) {
                    array_push($week[3], date("d.m.Y", strtotime("+" . $m . " day", strtotime($today))));
                }
                for ($m = 27; $m <= 33; $m++) {
                    array_push($week[4], date("d.m.Y", strtotime("+" . $m . " day", strtotime($today))));
                }
                break;
            case 3:
                array_push($week[0], date("d.m.Y", strtotime("-2 day", strtotime($today))));
                array_push($week[0], date("d.m.Y", strtotime("-1 day", strtotime($today))));
                array_push($week[0], $today);
                for ($m = 1; $m <= 4; $m++) {
                    array_push($week[0], date("d.m.Y", strtotime("+" . $m . " day", strtotime($today))));
                }
                for ($m = 5; $m <= 11; $m++) {
                    array_push($week[1], date("d.m.Y", strtotime("+" . $m . " day", strtotime($today))));
                }
                for ($m = 12; $m <= 18; $m++) {
                    array_push($week[2], date("d.m.Y", strtotime("+" . $m . " day", strtotime($today))));
                }
                for ($m = 19; $m <= 25; $m++) {
                    array_push($week[3], date("d.m.Y", strtotime("+" . $m . " day", strtotime($today))));
                }
                for ($m = 26; $m <= 32; $m++) {
                    array_push($week[4], date("d.m.Y", strtotime("+" . $m . " day", strtotime($today))));
                }
                break;
            case 4:
                array_push($week[0], date("d.m.Y", strtotime("-3 day", strtotime($today))));
                array_push($week[0], date("d.m.Y", strtotime("-2 day", strtotime($today))));
                array_push($week[0], date("d.m.Y", strtotime("-1 day", strtotime($today))));
                array_push($week[0], $today);
                array_push($week[0], date("d.m.Y", strtotime("+1 day", strtotime($today))));
                array_push($week[0], date("d.m.Y", strtotime("+2 day", strtotime($today))));
                array_push($week[0], date("d.m.Y", strtotime("+3 day", strtotime($today))));
                for ($m = 4; $m <= 10; $m++) {
                    array_push($week[1], date("d.m.Y", strtotime("+" . $m . " day", strtotime($today))));
                }

                for ($m = 11; $m <= 17; $m++) {
                    array_push($week[2], date("d.m.Y", strtotime("+" . $m . " day", strtotime($today))));
                }
                for ($m = 18; $m <= 24; $m++) {
                    array_push($week[3], date("d.m.Y", strtotime("+" . $m . " day", strtotime($today))));
                }
                for ($m = 25; $m <= 31; $m++) {
                    array_push($week[4], date("d.m.Y", strtotime("+" . $m . " day", strtotime($today))));
                }
                break;
            case 5:
                array_push($week[0], date("d.m.Y", strtotime("-4 day", strtotime($today))));
                array_push($week[0], date("d.m.Y", strtotime("-3 day", strtotime($today))));
                array_push($week[0], date("d.m.Y", strtotime("-2 day", strtotime($today))));
                array_push($week[0], date("d.m.Y", strtotime("-1 day", strtotime($today))));
                array_push($week[0], $today);
                array_push($week[0], date("d.m.Y", strtotime("+1 day", strtotime($today))));
                array_push($week[0], date("d.m.Y", strtotime("+2 day", strtotime($today))));
                for ($m = 3; $m <= 9; $m++) {
                    array_push($week[1], date("d.m.Y", strtotime("+" . $m . " day", strtotime($today))));
                }
                for ($m = 10; $m <= 16; $m++) {
                    array_push($week[2], date("d.m.Y", strtotime("+" . $m . " day", strtotime($today))));
                }
                for ($m = 17; $m <= 23; $m++) {
                    array_push($week[3], date("d.m.Y", strtotime("+" . $m . " day", strtotime($today))));
                }
                for ($m = 24; $m <= 30; $m++) {
                    array_push($week[4], date("d.m.Y", strtotime("+" . $m . " day", strtotime($today))));
                }
                break;
            case 6:
                array_push($week[0], date("d.m.Y", strtotime("-5 day", strtotime($today))));
                array_push($week[0], date("d.m.Y", strtotime("-4 day", strtotime($today))));
                array_push($week[0], date("d.m.Y", strtotime("-3 day", strtotime($today))));
                array_push($week[0], date("d.m.Y", strtotime("-2 day", strtotime($today))));
                array_push($week[0], date("d.m.Y", strtotime("-1 day", strtotime($today))));
                array_push($week[0], $today);
                array_push($week[0], date("d.m.Y", strtotime("+1 day", strtotime($today))));
                for ($m = 2; $m <= 8; $m++) {
                    array_push($week[1], date("d.m.Y", strtotime("+" . $m . " day", strtotime($today))));
                }
                for ($m = 9; $m <= 15; $m++) {
                    array_push($week[2], date("d.m.Y", strtotime("+" . $m . " day", strtotime($today))));
                }
                for ($m = 16; $m <= 22; $m++) {
                    array_push($week[3], date("d.m.Y", strtotime("+" . $m . " day", strtotime($today))));
                }
                for ($m = 23; $m <= 29; $m++) {
                    array_push($week[4], date("d.m.Y", strtotime("+" . $m . " day", strtotime($today))));
                }
                break;
            case 7:
                array_push($week[0], date("d.m.Y", strtotime("-6 day", strtotime($today))));
                array_push($week[0], date("d.m.Y", strtotime("-5 day", strtotime($today))));
                array_push($week[0], date("d.m.Y", strtotime("-4 day", strtotime($today))));
                array_push($week[0], date("d.m.Y", strtotime("-3 day", strtotime($today))));
                array_push($week[0], date("d.m.Y", strtotime("-2 day", strtotime($today))));
                array_push($week[0], date("d.m.Y", strtotime("-1 day", strtotime($today))));
                array_push($week[0], $today);
                for ($m = 1; $m <= 7; $m++) {
                    array_push($week[1], date("d.m.Y", strtotime("+" . $m . " day", strtotime($today))));
                }
                for ($m = 8; $m <= 14; $m++) {
                    array_push($week[2], date("d.m.Y", strtotime("+" . $m . " day", strtotime($today))));
                }
                for ($m = 15; $m <= 21; $m++) {
                    array_push($week[3], date("d.m.Y", strtotime("+" . $m . " day", strtotime($today))));
                }
                for ($m = 22; $m <= 28; $m++) {
                    array_push($week[4], date("d.m.Y", strtotime("+" . $m . " day", strtotime($today))));
                }
                break;
        }
        if ($request->has('delete_id')) {
            $id = $request->get('delete_id');
            // $db->delete("schedule","id='".$id."'");
            echo '<script>window.location = "booking.php?i=' . $i . '";</script>';
        }
        $week_days = array("Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота", "Воскресенье");
        $color = array("#f90c0c", "#0cb90c", "blue", "orange", "yellow", "violet", "#8FCAE8");
        $time_array = array();
        $time_array[] = "08:00:00";
        for ($l = 1; $l <= 16; $l++) {
            $time_array[] = date("H:i:s",  strtotime("+" . $l . " hour", strtotime($time_array[0])));
        }

        return view('booking', [
            'field' => $field,
            'i' => $i,
            'week' => $week,
            'week_days' => $week_days,
            'time_array' => $time_array,
            'color' => $color,
            'week_days' => $week_days,
        ]);
    }

    public function store(Request $request)
    {
        $user = auth()->user();
        $name = $user->name;
        $date = date("Y-m-d", strtotime($request->get("date")));
        $from = $request->get("time_from");
        $to = $request->get("time_to");
        $field = $request->get("field");
        $comment = '';
        $user_id = $user->id;
        $insert = array(
            "user_id" => $user_id, "name" => $name,
            "field_id" => $field, "book_date" => $date, "from_time" => $from, "to_time" => $to, "comment" => $comment
        );
        $book = Schedule::create($insert);
        return $book;
    }

    public function destroy(Request $request, Schedule $schedule)
    {
        $schedule->delete();
        return redirect()->back();
    }
}
