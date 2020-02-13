<?php

namespace Core;

abstract class controllers {

    public function __call($name, $arguments)
    {
        $method = $name."Action";
        call_user_func_array([$this, $method], $arguments);
    }

}


?>