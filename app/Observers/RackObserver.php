<?php

namespace App\Observers;

use App\Enums\CrudActions;
use App\Enums\MessageSeverity;
use App\Models\ApplicationEvent;
use App\Models\Rack;

class RackObserver
{
    /**
     * Handle the Rack "created" event.
     *
     * @param  \App\Models\Rack  $rack
     * @return void
     */
    public function created(Rack $rack)
    {
        ApplicationEvent::create([
            'timestamp' => $rack->created_at,
            'causer' => class_basename(auth()->user()),
            'causer_id' => auth()->id(),
            'entity' => class_basename($rack),
            'entity_id' => $rack->id,
            'severity_code' => MessageSeverity::INFORMATIONAL,
            'severity_name' => MessageSeverity::SeverityName(MessageSeverity::INFORMATIONAL),
            'action' => CrudActions::CREATE,
            'message' => 'A new Rack was created.',
        ]);
    }

    /**
     * Handle the Rack "updated" event.
     *
     * @param  \App\Models\Rack  $rack
     * @return void
     */
    public function updated(Rack $rack)
    {
        ApplicationEvent::create([
            'timestamp' => $rack->updated_at,
            'causer' => class_basename(auth()->user()),
            'causer_id' => auth()->id(),
            'entity' => class_basename($rack),
            'entity_id' => $rack->id,
            'severity_code' => MessageSeverity::INFORMATIONAL,
            'severity_name' => MessageSeverity::SeverityName(MessageSeverity::INFORMATIONAL),
            'action' => CrudActions::UPDATE,
            'message' => 'Rack updated.',
        ]);
    }

    /**
     * Handle the Rack "deleted" event.
     *
     * @param  \App\Models\Rack  $rack
     * @return void
     */
    public function deleted(Rack $rack)
    {
        //
    }

    /**
     * Handle the Rack "restored" event.
     *
     * @param  \App\Models\Rack  $rack
     * @return void
     */
    public function restored(Rack $rack)
    {
        //
    }

    /**
     * Handle the Rack "force deleted" event.
     *
     * @param  \App\Models\Rack  $rack
     * @return void
     */
    public function forceDeleted(Rack $rack)
    {
        //
    }
}
