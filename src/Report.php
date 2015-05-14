<?php

namespace App;

class Report
{
    public function __toString()
    {
        return "Object hash is: " . spl_object_hash($this);
    }
}