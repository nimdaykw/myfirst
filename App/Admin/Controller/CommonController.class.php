<?php

class CommonController extends Controller
{

    public function verifySession()
    {

        if(!isset($_SESSION['user']))
        {
            $this->jump('请先登陆','?C=Login&A=login&M=Admin');
        }
    }
}


?>