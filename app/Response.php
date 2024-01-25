<?php

namespace app\app;

class Response
{
    public function redirect(string $url)
    {
        header('Location: '.$url);
    }
}