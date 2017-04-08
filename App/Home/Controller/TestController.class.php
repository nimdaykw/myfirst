<?php

class TestController extends Controller
{
    public function index()
    {
        $this->smarty->display('index.html');
    }
}



?>