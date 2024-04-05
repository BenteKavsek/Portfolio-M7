<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    public function add() {
        $model = new Project();
        $model->title = 'Fancy Titel';
        $model->Image = 'imageLinkje';
        $model->description = 'Beschrijving over project en wat andere bs';
        $model->active = true;

        $model->save();
    }
}

