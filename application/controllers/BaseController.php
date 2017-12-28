<?php

namespace controllers;

use Philo\Blade\Blade;

class BaseController extends \CI_Controller
{

    /**
     * @var \Philo\Blade\Blade
     */
    protected $blade;

    /**
     * @var array $data
     */
    protected $data;

    /**
     * BaseController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->blade = new Blade(VIEWPATH, APPPATH.'/cache/');
        $this->data = [];
    }

    /**
     * render view with Blade instance
     * @param $view
     * @param array $data
     * @return int
     */
    protected function view($view, $data = [])
    {
        $this->data = array_merge($this->data, $data);
        $blview = $this->blade->view()->make($view, $this->data)->render();
        return print($blview);
    }
}
