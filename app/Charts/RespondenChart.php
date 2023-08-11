<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class RespondenChart
{
    protected $chart;
    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        $l = \App\Models\Ikm::where('jenis_kelamin', 'L')->count();
        $p = \App\Models\Ikm::where('jenis_kelamin', 'p')->count();
        return $this->chart->donutChart()
            ->addData([$l, $p,])
            ->setLabels(['Laki-Laki ' . $l, 'Perempuan ' . $p]);
    }
}
