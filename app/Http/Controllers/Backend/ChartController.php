<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

/**
 * Class ChartController
 * @package App\Http\Controllers\Backend
 */
class ChartController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function eCharts()
    {
        return view('backend.chart.echats');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function flots()
    {
        return view('backend.chart.flots');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function morris()
    {
        return view('backend.chart.morris');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function rickshaws()
    {
        return view('backend.chart.rickshaws');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function peities()
    {
        return view('backend.chart.peities');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function sparklines()
    {
        return view('backend.chart.sparklines');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function metrics()
    {
        return view('backend.chart.metrics');
    }

}
