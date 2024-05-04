<?php
namespace meigo\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXEvent; 


class splash_test extends AbstractForm
{


    /**
     * @event button.action 
     */
    function doButtonAction(UXEvent $e = null)
    {    
        
    }

    /**
     * @event button12.action 
     */
    function doButton12Action(UXEvent $e = null)
    {
        if ($this->iconified) {
            $this->iconified = false;
        } else {
            $this->iconified = true;
        }    
    }

}
