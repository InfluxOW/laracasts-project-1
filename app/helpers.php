<?php

use Illuminate\Support\Facades\Auth;

function currentUser()
{
    return Auth::user();
}
