<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SitePhoto extends Model
{
    protected $fillable = ['path'];

    /**
     * return the photo associated with the Site
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function site()
    {
        return $this->belongsTo('App\Site');
    }
}
