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
    public function TaskSix(Request $request) {
        $data = [];
        if($request->has('cipher'))
        {
            $data['cipher'] = $request->input('cipher');
            if($data['cipher'] == 'keyOneTest')
                return "Я взломал шифр";
            else
                return "Нет доступа";
        }
        else
            return "Нет доступа";
    }

    //шаг3
    public function lessonTemplateOne($detach) {
        $detachment = 'Нет отряда';
        switch($detach) {
            case 1: $detachment = 'Отряд 287'; break;
            case 2: $detachment = 'Отряд 54'; break;
            case 3: $detachment = 'Отряд 925'; break;
            case 4: $detachment = 'Отряд 9'; break;
            default: $detachment = '-';
        }

        $user = [];
        $user[] = 'Иванов Иван Иванович';
        $user[] = 'Петров Аркадий Иванович';
        $user[] = 'Люлькин Акакий Романович';

        return view('template', compact('detachment', 'user'));
    }

    public function policy()
    {
        return view('policy');
    }


    public function book()
    {
        $text = '"Я — единственный на свете человек, которого мне бы хотелось узнать получше. Оскар Уайльд "Веер леди Уиндермир""';
        return view('Book', compact('text'));
    }

    public function li()
    {
        $var_li = ['1', '2', '3'];
        return view('li')->with('var_li', $var_li);
    }

    public function div()
    {
        $var_div = ['1', '2', '3'];
        return view('div')->with('var_div', $var_div);
    }

    public function span()
    {
        $var_span = ['1', '2', '3'];
        return view('span')->with('var_span', $var_span);
    }
}
