<?php

namespace App\Http\Controllers\Helpers;

use Illuminate\Support\Facades\Storage;
use Orchid\Attachment\Models\Attachment;

trait Images
{
    public $emptyImage = 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/41/Noimage.svg/1200px-Noimage.svg.png';
    /**
     * @param array $data
     * @return string
     */
    public function getUrl(?Attachment $attachment): string
    {
        if (is_null($attachment)) {
            return $this->emptyImage;
        }
        return Storage::disk('public')->url($attachment->path . $attachment->name . '.' . $attachment->extension);
    }
}
