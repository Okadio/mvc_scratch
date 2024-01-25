<?php

namespace app\controllers;

use app\app\Application;
use app\app\Controller;
use app\app\Request;

class SiteController extends Controller
{
    public function home()
    {
        $params = [
            'name' => "Okadio"
        ];
        return $this->render('home', $params);
    }
    public function contact()
    {
        return $this->render('contact');
    }
    public function handleContact(Request $request)
    {
        $body = $request->getBody();
        return 'Handling submitted data';
    }
}