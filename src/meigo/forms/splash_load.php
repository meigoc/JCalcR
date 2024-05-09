<?php
namespace meigo\forms;

use action\Animation;
use php\gui\framework\AbstractForm;
use php\gui\event\UXWindowEvent; 


class splash_load extends AbstractForm
{

    /**
     * @event show 
     */
    function doShow(UXWindowEvent $e = null)
    {    
         app()->showForm("MainForm");
         waitAsync(100, function () use ($e, $event) {
            app()->hideSplash();
            Animation::fadeTo($this->progressIndicator, 1000, 1);
            Animation::fadeTo($this->label, 1000, 1);
            waitAsync(1000, function () use ($e, $event) {
                $this->update();
            });
         });   
    }

}
