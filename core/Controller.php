<?php

namespace Core;

class Controller 
{

    public function view($view)
    {        

        include './views/'.$view.'.php';

    }


}