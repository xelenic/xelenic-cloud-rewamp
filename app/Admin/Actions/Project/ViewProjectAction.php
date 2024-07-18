<?php

namespace App\Admin\Actions\Project;

use Illuminate\Database\Eloquent\Model;
use OpenAdmin\Admin\Actions\RowAction;

class ViewProjectAction extends RowAction
{
    public $name = 'view_project';

    public $icon = 'icon-eye';

    public $modelDetails;


    public function __construct($modelDetails)
    {
        $this->modelDetails = $modelDetails;
    }

    public function href()
    {
        return '/dashboard/project/'.$this->modelDetails->id.'/home';
    }



}
