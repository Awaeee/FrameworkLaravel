<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function TaskOne() {
        return 'Я люблю учиться в ЧРТ!';
    }

    public function TaskTwo($name) {

        return "Меня зовут -" .$name ;
    }

    public function TaskThree($name, $fruct) {

        return "Меня зовут - $name и я люблю есть - $fruct";
    }

    public function TaskFour() {
        $a = 12;
        $b =13;
        $sum= $a +$b;
        return $sum;
    }

    public function TaskFive($a, $b) {
        $sum= $a+$b;
        return "Сумма числа $a и числа $b равняется  $sum";
    }


}
