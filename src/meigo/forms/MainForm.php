<?php
namespace meigo\forms;

use php\gui\animatefx\AnimationFX;
use php\lang\System;
use gui\Ext4JphpWindows;
use std, gui, framework, meigo;
use php\gui\event\UXWindowEvent; 
use php\gui\event\UXMouseEvent; 
use php\gui\event\UXEvent; 


class MainForm extends AbstractForm
{


    /**
     * @event btn_7.click-Left 
     **/
    function doBtn_7ClickLeft(UXMouseEvent $event = null)
    {    
        // функция на анимацию и прочее
        echo "[INFO] MainForm | sent ".$event->sender->id." & ".$GLOBALS['button_anim']."\n";
        $this->ClickButton($event->sender->id, $GLOBALS['button_anim'], 1);
    }

    /**
     * @event btn_8.click-Left 
     **/
    function doBtn_8ClickLeft(UXMouseEvent $event = null)
    {    
        // функция на анимацию и прочее
        echo "[INFO] MainForm | sent ".$event->sender->id." & ".$GLOBALS['button_anim']."\n";
        $this->ClickButton($event->sender->id, $GLOBALS['button_anim'], 1);
    }

    /**
     * @event btn_9.click-Left 
     **/
    function doBtn_9ClickLeft(UXMouseEvent $event = null)
    {    
        // функция на анимацию и прочее
        echo "[INFO] MainForm | sent ".$event->sender->id." & ".$GLOBALS['button_anim']."\n";
        $this->ClickButton($event->sender->id, $GLOBALS['button_anim'], 1);
    }

    /**
     * @event btn_4.click-Left 
     **/
    function doBtn_4ClickLeft(UXMouseEvent $event = null)
    {    
        // функция на анимацию и прочее
        echo "[INFO] MainForm | sent ".$event->sender->id." & ".$GLOBALS['button_anim']."\n";
        $this->ClickButton($event->sender->id, $GLOBALS['button_anim'], 1);
    }

    /**
     * @event btn_5.click-Left 
     **/
    function doBtn_5ClickLeft(UXMouseEvent $event = null)
    {    
        // функция на анимацию и прочее
        echo "[INFO] MainForm | sent ".$event->sender->id." & ".$GLOBALS['button_anim']."\n";
        $this->ClickButton($event->sender->id, $GLOBALS['button_anim'], 1);
    }

    /**
     * @event btn_6.click-Left 
     **/
    function doBtn_6ClickLeft(UXMouseEvent $event = null)
    {    
        // функция на анимацию и прочее
        echo "[INFO] MainForm | sent ".$event->sender->id." & ".$GLOBALS['button_anim']."\n";
        $this->ClickButton($event->sender->id, $GLOBALS['button_anim'], 1);
    }

    /**
     * @event btn_1.click-Left 
     **/
    function doBtn_1ClickLeft(UXMouseEvent $event = null)
    {    
        // функция на анимацию и прочее
        echo "[INFO] MainForm | sent ".$event->sender->id." & ".$GLOBALS['button_anim']."\n";
        $this->ClickButton($event->sender->id, $GLOBALS['button_anim'], 1);
    }

    /**
     * @event btn_2.mouseDown-Left 
     **/
    function doBtn_2MouseDownLeft(UXMouseEvent $event = null)
    {    
        // функция на анимацию и прочее
        echo "[INFO] MainForm | sent ".$event->sender->id." & ".$GLOBALS['button_anim']."\n";
        $this->ClickButton($event->sender->id, $GLOBALS['button_anim'], 1);
    }

    /**
     * @event btn_3.click-Left 
     **/
    function doBtn_3ClickLeft(UXMouseEvent $event = null)
    {    
        // функция на анимацию и прочее
        echo "[INFO] MainForm | sent ".$event->sender->id." & ".$GLOBALS['button_anim']."\n";
        $this->ClickButton($event->sender->id, $GLOBALS['button_anim'], 1);
    }

    /**
     * @event btn_0.mouseDown-Left 
     **/
    function doBtn_0MouseDownLeft(UXMouseEvent $event = null)
    {    
        // функция на анимацию и прочее
        echo "[INFO] MainForm | sent ".$event->sender->id." & ".$GLOBALS['button_anim']."\n";
        $this->ClickButton($event->sender->id, $GLOBALS['button_anim'], 1);
    }

    /**
     * @event btn_comma.click-Left 
     **/
    function doBtn_commaClickLeft(UXMouseEvent $event = null)
    {    
        // функция на анимацию и прочее
        echo "[INFO] MainForm | sent ".$event->sender->id." & ".$GLOBALS['button_anim']."\n";
        $this->ClickButton($event->sender->id, $GLOBALS['button_anim'], 1);
    }

    /**
     * @event btn_plus.click-Left 
     **/
    function doBtn_plusClickLeft(UXMouseEvent $event = null)
    {    
        global $operation; 
        if (!$operation){ 
            // функция на анимацию и прочее
            $this->edit->text .= $event->sender->text; 
            $operation = $event->sender->text; 
        }        
    }

    /**
     * @event btn_minus.click-Left 
     **/
    function doBtn_minusClickLeft(UXMouseEvent $event = null)
    {    
        global $operation; 
        if (!$operation){ 
            $this->edit->text .= $event->sender->text; 
            $operation = $event->sender->text; 
        }        
    }

    /**
     * @event btn_multiply.click-Left 
     **/
    function doBtn_multiplyClickLeft(UXMouseEvent $event = null)
    {    
        global $operation; 
        if (!$operation){ 
            $this->edit->text .= $event->sender->text; 
            $operation = $event->sender->text; 
        }        
    }

    /**
     * @event btn_divided.click-Left 
     **/
    function doBtn_dividedClickLeft(UXMouseEvent $event = null)
    {    
        global $operation; 
        if (!$operation){ 
            $this->edit->text .= $event->sender->text; 
            $operation = $event->sender->text; 
            
        }        
    }

    /**
     * @event btn_sin.click-Left 
     **/
    function doBtn_sinClickLeft(UXMouseEvent $event = null)
    {    
        global $operation;
        if (!$operation){ 
            $this->edit->text = sin($this->edit->text);
        }        
    }

    /**
     * @event button4.click-Left 
     **/
    function doButton4ClickLeft(UXMouseEvent $event = null)
    {    
        global $operation;
        if (!$operation){ 
            $this->edit->text = cos($this->edit->text);
        }        
    }

    /**
     * @event button5.click-Left 
     **/
    function doButton5ClickLeft(UXMouseEvent $event = null)
    {    
        global $operation;
        if (!$operation){ 
            $this->edit->text = tg($this->edit->text);
        }        
    }

    /**
     * @event button6.click-Left 
     **/
    function doButton6ClickLeft(UXMouseEvent $event = null)
    {    
        global $operation;
        if (!$operation){ 
            $this->edit->text = ctg($this->edit->text);
        }        
    }

    /**
     * @event button3.click-Left 
     **/
    function doButton3ClickLeft(UXMouseEvent $event = null)
    {    
        global $operation; 
        if ($operation){
            $numbers = explode($operation, $this->edit->text);
            switch ($operation){ 
                case "+": 
                    $result = $numbers[0] + $numbers[1];
                break;
                case "-": 
                    $result = $numbers[0] - $numbers[1];
                break;
                case "*":
                    $result = $numbers[0] * $numbers[1];
                break;
                case "/":
                    if ($numbers[1] == 0){
                        $result = "0";
                    } else {
                        $result = $numbers[0] / $numbers[1];
                    }
                    
                break;
                case "%": 
                    $procent = $numbers[0] / 100;  
                    $result = $numbers[1] * $procent; 
                break;
                case "^":
                    $result = pow($numbers[0], $numbers[1]);
                break;
            }
            $this->edit->text = $result;
            $operation = false;
        }        
    }

    /**
     * @event button7.action 
     **/
    function doButton7Action(UXEvent $event = null)
    {    
        global $operation;
        if (!$operation){ 
            $this->edit->text = log($this->edit->text);
        }        
    }

    /**
     * @event button.action 
     **/
    function doButtonAction(UXEvent $event = null)
    {    
        global $operation;
        if (!$operation){ 
            $this->edit->text = sqrt($this->edit->text);
        }        
    }

    /**
     * @event buttonAlt.click-Left 
     **/
    function doButtonAltClickLeft(UXMouseEvent $event = null)
    {    
        global $operation; 
        if (!$operation){ 
            $this->edit->text .= $event->sender->text; 
            $operation = $event->sender->text; 
        }        
    }


    /**
     * @event btn_pow.click-Left 
     */
    function doBtn_powClickLeft(UXMouseEvent $event = null)
    {
        global $operation; 
        if (!$operation){ 
            $this->edit->text .= $event->sender->text; 
            $operation = $event->sender->text; 
        }        
    }

    /**
     * @event show 
     */
    function doShow(UXWindowEvent $e = null)
    {    
        if (app()->module("AppModule")->data_bin->get("disable.blur","main") == 1){
            echo "data.bin * blur disabled\n";
        } else {
            $ext = new Ext4JphpWindows;
            $ext->addBlur($this);
        }
        
        $GLOBALS['button_anim'] = app()->module("AppModule")->data_bin->get("button.animation.type","main");
        
        $p = app()->module("AppModule")->data_bin->get("fast_load","main");
        if ($p != 0)
        {
            $o = 200;
        } else {
            $o = 3000;
        }
        waitAsync($o, function () use ($e, $event, $o) {
        //    app()->hideSplash();
            echo "Dev Info | 3000ms\n";
            
            if (app()->module("AppModule")->data_bin->get("disable.optimization","main") == 0){
            
            Animation::fadeTo($this->copyright, 500, 0);
            waitAsync(500, function () use ($e, $event) {
                Animation::fadeTo($this->load001, 500, 1);
                Animation::fadeTo($this->load002, 500, 1);
                waitAsync(500, function () use ($e, $event) {
                    // эти формы итак не используются
                    //app()->form("splash_test")->free();
                    //app()->form("splash_test2")->free();
                    app()->form("splash_load")->free();
                    System::gc();
                    waitAsync(500, function () use ($e, $event) {
                        Animation::fadeTo($this->load001, 500, 0);
                        Animation::fadeTo($this->load002, 500, 0);
                        waitAsync(500, function () use ($e, $event) {
                            Animation::fadeTo($this->copyright, 500, 1);
                        });
                    });
                });
            });
            
            } 
        });    
    }




    /**
     * @event button10.click-Left 
     */
    function doButton10ClickLeft(UXMouseEvent $e = null)
    {    
        $this->edit->text = "0";
    }

    /**
     * @event panel3.click-Left 
     */
    function doPanel3ClickLeft(UXMouseEvent $e = null)
    {    
        browse('https://github.com/meigoc/JCalcR');

    }

    /**
     * @event image3.click-Left 
     */
    function doImage3ClickLeft(UXMouseEvent $e = null)
    {    
        app()->shutdown();
    }

    /**
     * @event image4.click-Left 
     */
    function doImage4ClickLeft(UXMouseEvent $e = null)
    {    
        if ($this->iconified) {
            $this->iconified = false;
        } else {
            $this->iconified = true;
        }  
    }










}
