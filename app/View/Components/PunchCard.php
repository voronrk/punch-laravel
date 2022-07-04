<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Punch;

class PunchCard extends Component
{

    public $name;
    public $orderNum;
    public $year;
    public $products;
    public $materials;
    public $machines;
    public $sizeLength;
    public $sizeWidth;
    public $sizeHeight;
    public $knifeSizeLength;
    public $knifeSizeWidth;
    public $pic;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $punch = Punch::find(9);
        $this->name = $punch->name;
        $this->orderNum = $punch->ordernum;
        $this->year = $punch->year;
        $this->products = ['Коробки', 'Бирки', 'Обечайки'];
        $this->materials = ['Картон', 'Бумага'];
        $this->machines = ['ПТ', 'STS'];
        $this->sizeLength = $punch->size_length;
        $this->sizeWidth = $punch->size_width;
        $this->sizeHeight = $punch->size_height;
        $this->knifeSizeLength = $punch->knife_size_length;
        $this->knifeSizeWidth = $punch->knife_size_width;
        $this->pic = $punch->pic->value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.punch-card');
    }
}