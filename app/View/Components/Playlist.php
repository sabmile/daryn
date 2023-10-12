<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Playlist extends Component
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
            ['filename' => 'Үй және дала құстары', 'title' => 'Үй және дала құстары'],
            ['filename' => 'Халықаралық өнер байқауы', 'title' => 'Халықаралық өнер байқауы'],
            ['filename' => 'Сандар қатары туралы білімін бекіту', 'title' => 'Сандар қатары туралы білімін бекіту'],
            ['filename' => 'Дене шынықтыру', 'title' => 'Дене шынықтыру'],
            ['filename' => 'Балаладрың мінез-құлқын қалыптастырудағы музыканың ролі', 'title' => 'Балаладрың мінез-құлқын қалыптастырудағы музыканың ролі'],
            ['filename' => '2023-09-15 14-54-21', 'title' => 'Балбопе тобы'],
            ['filename' => 'VIDEO-2023-09-19-11-53-34', 'title' => 'Доппен ойнау'],
            ['filename' => 'VIDEO-2023-09-19-12-08-22', 'title' => 'Ересек бүлдіршін тобы - Шаттық шеңбер'],
            ['filename' => 'VIDEO-2023-09-19-12-13-28', 'title' => 'Қазақшаң қалай, балакай?'],
            ['filename' => 'VIDEO-2023-09-20-12-41-47', 'title' => 'Ересек Балбөбек тобы - таңғы жаттығу'],
            ['filename' => 'VIDEO-2023-09-27-08-18-34', 'title' => 'Балбөбек тобы - сурет салу'],
            ['filename' => 'VIDEO-2023-09-27-08-18-33', 'title' => 'Балбөбек тобы - математика негіздері'],
            ['filename' => 'VIDEO-2023-10-03-08-31-36', 'title' => '1 Қазан - Халықаралық қарттар күні'],
	        ['filename' => 'VIDEO-2023-10-03-08-31-37', 'title' => 'Балбөбек тобы - Ұйқы ашар жаттығулар'],
	        ['filename' => 'VIDEO-2023-10-03-08-31-37 (1)', 'title' => 'Ересек Байтерек тобы'],
            ['filename' => 'VIDEO-2023-10-05-09-36-36', 'title' => 'Хабар телеарнасының таңғы жүргізушісі'],
            ['filename' => 'Ролик_2_рус', 'title' => 'Обращение в государственный орган'],
            ['filename' => 'Ролик_2_каз', 'title' => 'Мемлекеттік органға өтініш'],
            ['filename' => 'VIDEO-2023-10-12-10-39-57', 'title' => 'Балбобек тобы'],
        ];

        return view('components.playlist', ['videos' => array_reverse($videos)]);
    }
}
