<?php

namespace Hanafalah\ModuleItem\Models;

use Hanafalah\ModuleItem\Resources\Composition\ViewComposition;
use Hanafalah\LaravelHasProps\Concerns\HasProps;
use Hanafalah\LaravelSupport\Models\BaseModel;

class Composition extends BaseModel
{
    use HasProps;
    public $timestamps = false;
    protected $list  = ['id', 'name', 'unit_scale', 'unit_id', 'unit_name', 'props'];

    public function toViewApi()
    {
        return new ViewComposition($this);
    }

    public function toShowApi()
    {
        return new ViewComposition($this);
    }

    public function unit()
    {
        return $this->belongsToModel('ItemStuff', 'unit_id');
    }
    public function ModelHasComposition()
    {
        return $this->hasOneModel('ModelHasComposition');
    }
    public function ModelHasCompositions()
    {
        return $this->hasManyModel('ModelHasComposition');
    }
}
