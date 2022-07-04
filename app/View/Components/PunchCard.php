<?php

namespace App\View\Components;

use Illuminate\View\Component;

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
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->name = 'aaa';
        $this->orderNum = '1234';
        $this->year = 2020;
        $this->products = ['Коробки', 'Бирки', 'Обечайки'];
        $this->materials = ['Картон', 'Бумага'];
        $this->machines = ['ПТ', 'STS'];
        $this->sizeLength = 11;
        $this->sizeWidth = 22;
        $this->sizeHeight = 33;
        $this->knifeSizeLength = 444;
        $this->knifeSizeWidth = 555;
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
