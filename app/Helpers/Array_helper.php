<?php

function get_random($arr)
{
    shuffle($arr);
    return end($arr);
}
