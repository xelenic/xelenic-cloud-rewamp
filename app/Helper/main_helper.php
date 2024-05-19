<?php

if (! function_exists('getCreditBalance')) {
    function getCreditBalance( $default = null) {
        $userId = \OpenAdmin\Admin\Facades\Admin::user()->id;
        $balance = \App\Models\UserCreditBalance::where('user_id',$userId)->first();
        return $balance ? $balance->credit : 0;
    }
}

if (! function_exists('addCreditBalance')) {
    function addCreditBalance( $countCount) {
        $userId = \OpenAdmin\Admin\Facades\Admin::user()->id;
        $balance = \App\Models\UserCreditBalance::where('user_id', $userId)->first();
        if($balance){
            $currentCredit = $balance->credit;
            $currentCredit += $countCount;
            $balance = \App\Models\UserCreditBalance::where('user_id', $userId)
                ->update([
                    'credit' => $currentCredit
                ]);

            return $balance;
        }else{
            return false;
        }
    }
}



?>
