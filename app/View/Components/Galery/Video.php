<?php

namespace App\View\Components\Galery;

use Illuminate\View\Component;

class video extends Component
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
        $videos = [
            'Үй және дала құстары',
            'Халықаралық өнер байқауы',
            'Сандар қатары туралы білімін бекіту',
            'Дене шынықтыру',
            'Балаладрың мінез-құлқын қалыптастырудағы музыканың ролі',
            '2023-09-15 14-54-21',
            'VIDEO-2023-09-19-11-53-34',
            'VIDEO-2023-09-19-12-08-22',
            'VIDEO-2023-09-19-12-13-28',
            'VIDEO-2023-09-20-12-41-47',
            'VIDEO-2023-09-27-08-18-34',
            'VIDEO-2023-09-27-08-18-33',
            'VIDEO-2023-10-03-08-31-36',
	        'VIDEO-2023-10-03-08-31-37',
	        'VIDEO-2023-10-03-08-31-37 (1)',
            'VIDEO-2023-10-05-09-36-36',
        ];
        
        return view('components.galery.video', ['videos' => array_reverse($videos)]);
    }
}
