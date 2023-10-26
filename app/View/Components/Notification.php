<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Notification extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $items = [
            ['title' => 'вакантная должность(бейнелеу өнері) объявление', 'filename' => 'вакантная должность(бейнелеу өнері) объявление'],
            ['title' => 'вакантная должность (педагог-психолог) объявление', 'filename' => 'вакантная должность (педагог-психолог) объявление'],
            ['title' => 'вакантная должность (логопед6 дефектолог объявление', 'filename' => 'вакантная должность (логопед6 дефектолог объявление'],
        ];

        return view('components.notification', compact('items'));
    }
}
