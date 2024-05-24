<?php

namespace App\Admin\Actions\Repos;

use Illuminate\Database\Eloquent\Model;
use OpenAdmin\Admin\Actions\RowAction;

class RepoDetailsAction extends RowAction
{
    public $name = 'repo_details';

    public $icon = 'icon-cogs';

    public function handle(Model $model)
    {
        // $model ...

        return $this->response()->redirect(url('dashboard/repos-details-slug/'.$model->repo_id));
    }

}
