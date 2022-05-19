<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YtSubsTranscationModel extends Model
{
    use HasFactory;

    public $table ='yt_subs_transaction';
    public $guarded ='[]';
    public $timestamps = false;
}
