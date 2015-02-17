<?php

class HomeController extends BaseController
{

    public function homepage()
    {
		return View::make('homepage.index');
    }

}
