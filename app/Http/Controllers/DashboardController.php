<?php

namespace App\Http\Controllers;

use App\Charts\AnswerChart;
use App\Charts\RespondenChart;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(RespondenChart $chart, AnswerChart $answerChart)
    {
        $data['chart'] = $chart->build();
        $data['asw'] = $answerChart->build();
        $data['responden'] = \App\Models\Ikm::count();
        return view('dashboard.index', $data);
    }
}
