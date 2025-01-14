<?php 

namespace MattYeend\QueueMonitor\Models;

use Illuminate\Database\Eloquent\Model;

class QueueStats extends Model
{
    protected $fillable = [
        'queue',
        'processed', 
        'failed', 
        'average_time'
    ];
}