<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Consultation extends Component
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
            ['filename' => 'консультациялық пункт (ереже)', 'title' => 'консультациялық пункт (ереже)', 'ext' => 'docx'],
            ['filename' => 'Консультациялық пункт  жоспары', 'title' => 'Консультациялық пункт  жоспары', 'ext' => 'pdf'],
            ['title' => 'консультациялық пункт жоспары IIкорпус', 'filename' => 'консультациялық пункт жоспары IIкорпус', 'ext' => 'pdf'],
            ['title' => 'консультациялық пункт жұмысының кестесі', 'filename' => 'консультациялық пункт жұмысының кестесі', 'ext' => 'pdf'],
        ];

        return view('components.consultation', compact('items'));
    }
}
