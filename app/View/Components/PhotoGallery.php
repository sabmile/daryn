<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PhotoGallery extends Component
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
        $photos = [
            '6d7db14f-2314-4171-9a20-b3d6363642b9 (1)',
            '627e8a38-5d6d-4f6f-a117-df9b41f2c4fb (2)',
            '0ed38e2a-5e18-426d-aacd-1ab0dcdaa13d (1)',
            'd13c77ff-f71e-4610-866a-2ade0bd1bc9b',
            '19074997-1782-492d-bb90-526016510401',
            '2cde2d75-5743-43fa-bb75-0e982e7ae34f',
            '5bcb52e6-ac32-48e2-a038-be4140008cf4',
            'eb83aaba-6580-4fff-b4e6-e702cf13ef58',
            '321ef16b-d5db-4002-9d61-ba51b4c0ba54',
            '0ed38e2a-5e18-426d-aacd-1ab0dcdaa13d',
            '627e8a38-5d6d-4f6f-a117-df9b41f2c4fb (1)',
            '627e8a38-5d6d-4f6f-a117-df9b41f2c4fb',
            '6d7db14f-2314-4171-9a20-b3d6363642b9',
        ];
        return view('components.photo-gallery', ['photos' => $photos]);
    }
}
