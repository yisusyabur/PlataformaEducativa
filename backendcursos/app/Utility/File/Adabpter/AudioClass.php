<?php

namespace App\Utility\File\Adabpter;

use App\Models\File;
use App\Utility\File\Services\FileParent;

class AudioClass extends fileParent
{

    public function __construct(File $file)
    {
        $this->file = $file;
        $this->view = 'utility/file/audio';    
    }
    
    
}