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
            ['title' => 'вакантная должность(бейнелеу өнері) объявление', 'filename' => 'вакантная должность(бейнелеу өнері) объявление', 'ext' => 'docx'],
            ['title' => 'вакантная должность (педагог-психолог) объявление', 'filename' => 'вакантная должность (педагог-психолог) объявление', 'ext' => 'docx'],
            ['title' => 'вакантная должность (логопед6 дефектолог объявление', 'filename' => 'вакантная должность (логопед6 дефектолог объявление', 'ext' => 'docx'],
            ['title' => 'вакантная должность тәрбиеші', 'filename' => 'вакантная должность тәрбиеші', 'ext' => 'docx'],
            ['title' => 'вакантная должность (тәрбиешінің көмекшісі)', 'filename' => 'вакантная должность (тәрбиешінің көмекшісі)', 'ext' => 'docx'],
            ['title' => 'вакантная должность (тәрбиеші)', 'filename' => 'вакантная должность (тәрбиеші)', 'ext' => 'docx'],
            ['title' => 'вакантная должность (әдіскер)', 'filename' => 'вакантная должность (әдіскер)', 'ext' => 'docx'],
            ['title' => 'вакантная должность ( инновация әдіскері)', 'filename' => 'вакантная должность ( инновация әдіскері)', 'ext' => 'docx'],
            ['title' => 'вакантная должность (қазақ тілі мұғалімі)', 'filename' => 'вакантная должность (қазақ тілі мұғалімі)', 'ext' => 'docx'],
            ['title' => 'Приказ 333 каз', 'filename' => 'Приказ 333 каз', 'ext' => 'pdf'],
            ['title' => 'Приказ 333 рус', 'filename' => 'Приказ 333 рус', 'ext' => 'pdf'],
        ];

        return view('components.notification', compact('items'));
    }
}
