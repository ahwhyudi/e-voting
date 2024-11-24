<?php

namespace App\View\Components;

use App\Models\Paslon;
use Illuminate\View\Component;

class Chart extends Component
{
    public $labels;
    public $data;

    /**
     * Create a new component instance.
     *
     * @param array $labels
     * @param array $data
     */
    public function __construct()
    {
        $data = Paslon::withCount('suara')->get();
        $chartLabels = $data->pluck('nomor')->toArray();
        $chartData = $data->pluck('suara_count')->toArray();

        $this->labels = $chartLabels;
        $this->data = $chartData;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.chart', [
            "data" => $this->data,
            "labels" => $this->labels
        ]);
    }
}
