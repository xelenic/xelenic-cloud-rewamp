<?php

if (! function_exists('getCreditBalance')) {
    function getCreditBalance( $default = null) {
        $balance = \App\Models\UserCreditBalance::where('user_id', auth()->user()->id)->first();
        return $balance ? $balance->credit : 0;
    }
}


?>
