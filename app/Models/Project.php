<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends BaseElement
{
    protected $table = 'projects';
    public function getDurationAsString()
    {
        $years = floor($this->months / 12);
        $extraMonths = $this->months % 12;

        return "Job duration: $years years $extraMonths months";
    }

}

