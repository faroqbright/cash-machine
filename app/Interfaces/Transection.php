<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface Transection
{
    /**
     * Validate Inputs
     */

    public function validates(Request $request);
    /**
     * Return total amount
     */
    public function amount(Request $request);
    /**
     * Return Inputs
     */
    public function inputs(Request $request, $total);
}
