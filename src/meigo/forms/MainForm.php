<?php
namespace meigo\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXMouseEvent; 
use php\gui\event\UXEvent; 
use php\lib\arr; 
use php\lib\bin; 
use php\lib\char; 
use php\lib\fs; 
use php\lib\str; 
use php\lib\num; 
use php\lib\reflect; 
use php\io\Stream; 
use php\io\File; 
use php\io\IOException; 
use php\io\FileStream; 
use php\io\MemoryStream; 
use php\io\ResourceStream; 
use php\net\NetStream; 
use php\util\Flow; 
use php\util\Locale; 
use php\util\Regex; 
use php\util\Configuration; 
use php\time\Time; 
use php\time\TimeZone; 
use php\time\TimeFormat; 
use php\net\URL; 
use php\net\Socket; 
use php\net\SocketException; 
use php\net\ServerSocket; 
use php\net\Proxy; 
use php\lang\Thread; 
use php\lang\Environment; 
use php\lang\Process; 
use php\lang\System; 
use php\lang\ThreadGroup; 
use php\lang\ThreadPool; 
use php\format\JsonProcessor; 
use facade\Json; 
use php\gui\UXNode; 
use php\gui\UXApplication; 
use php\gui\animation\UXAnimationTimer; 
use php\gui\layout\UXHBox; 
use php\gui\layout\UXAnchorPane; 
use php\gui\UXClipboard; 
use php\gui\paint\UXColor; 
use php\gui\event\UXContextMenuEvent; 
use php\gui\UXDialog; 
use php\gui\text\UXFont; 
use php\gui\UXGeometry; 
use php\gui\UXImage; 
use php\gui\UXMedia; 
use php\gui\UXMenu; 
use php\gui\UXMenuItem; 
use php\gui\UXButton; 
use php\gui\UXTooltip; 
use php\gui\UXToggleButton; 
use php\gui\UXToggleGroup; 
use php\gui\UXImageView; 
use php\gui\UXImageArea; 
use php\gui\UXSlider; 
use php\gui\UXSpinner; 
use php\gui\layout\UXVBox; 
use php\gui\UXTitledPane; 
use php\gui\layout\UXPanel; 
use php\gui\layout\UXFlowPane; 
use php\gui\UXForm; 
use php\gui\UXWindow; 
use ide\bundle\std\UXAlert; 
use php\gui\UXContextMenu; 
use php\gui\UXControl; 
use php\gui\UXDirectoryChooser; 
use php\gui\UXFileChooser; 
use php\gui\UXFlatButton; 
use php\gui\UXHyperlink; 
use php\gui\UXList; 
use php\gui\UXListView; 
use php\gui\UXComboBox; 
use php\gui\UXChoiceBox; 
use php\gui\UXLabel; 
use php\gui\UXLabelEx; 
use php\gui\UXLabeled; 
use php\gui\UXListCell; 
use php\gui\UXMediaPlayer; 
use php\gui\UXParent; 
use php\gui\UXPopupWindow; 
use php\gui\UXPasswordField; 
use php\gui\UXProgressIndicator; 
use php\gui\UXProgressBar; 
use php\gui\UXTab; 
use php\gui\UXTabPane; 
use php\gui\UXTreeView; 
use php\gui\UXTrayNotification; 
use php\gui\UXWebEngine; 
use php\gui\UXWebView; 
use php\gui\UXCell; 
use php\gui\UXColorPicker; 
use php\gui\UXCanvas; 
use php\gui\layout\UXStackPane; 
use php\gui\layout\UXPane; 
use php\gui\layout\UXScrollPane; 
use php\game\event\UXCollisionEvent; 
use php\gui\event\UXKeyEvent; 
use php\gui\event\UXDragEvent; 
use php\gui\event\UXWebEvent; 
use php\gui\event\UXWindowEvent; 
use php\gui\framework\AbstractModule; 
use action\Animation; 
use action\Collision; 
use game\Jumping; 
use action\Element; 
use action\Geometry; 
use action\Media; 
use action\Score; 


class MainForm extends AbstractForm
{

    /**
     * @event label.click-Left 
     **/
    function doLabelClickLeft(UXMouseEvent $event = null)
    {    
        $this->edit->text = "";
    }

    /**
     * @event btn_7.click-Left 
     **/
    function doBtn_7ClickLeft(UXMouseEvent $event = null)
    {    
        $this->edit->text .= $event->sender->text;
    }

    /**
     * @event btn_8.click-Left 
     **/
    function doBtn_8ClickLeft(UXMouseEvent $event = null)
    {    
        $this->edit->text .= $event->sender->text;
    }

    /**
     * @event btn_9.click-Left 
     **/
    function doBtn_9ClickLeft(UXMouseEvent $event = null)
    {    
        $this->edit->text .= $event->sender->text;
    }

    /**
     * @event btn_4.click-Left 
     **/
    function doBtn_4ClickLeft(UXMouseEvent $event = null)
    {    
        $this->edit->text .= $event->sender->text;
    }

    /**
     * @event btn_5.click-Left 
     **/
    function doBtn_5ClickLeft(UXMouseEvent $event = null)
    {    
        $this->edit->text .= $event->sender->text;
    }

    /**
     * @event btn_6.click-Left 
     **/
    function doBtn_6ClickLeft(UXMouseEvent $event = null)
    {    
        $this->edit->text .= $event->sender->text;
    }

    /**
     * @event btn_1.click-Left 
     **/
    function doBtn_1ClickLeft(UXMouseEvent $event = null)
    {    
        $this->edit->text .= $event->sender->text;
    }

    /**
     * @event btn_2.mouseDown-Left 
     **/
    function doBtn_2MouseDownLeft(UXMouseEvent $event = null)
    {    
        $this->edit->text .= $event->sender->text;
    }

    /**
     * @event btn_3.click-Left 
     **/
    function doBtn_3ClickLeft(UXMouseEvent $event = null)
    {    
        $this->edit->text .= $event->sender->text;
    }

    /**
     * @event btn_0.mouseDown-Left 
     **/
    function doBtn_0MouseDownLeft(UXMouseEvent $event = null)
    {    
        $this->edit->text .= $event->sender->text;
    }

    /**
     * @event btn_comma.click-Left 
     **/
    function doBtn_commaClickLeft(UXMouseEvent $event = null)
    {    
        $this->edit->text .= $event->sender->text;
    }

    /**
     * @event btn_plus.click-Left 
     **/
    function doBtn_plusClickLeft(UXMouseEvent $event = null)
    {    
        global $operation; 
        if (!$operation){ 
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
                    $result = $numbers[0] / $numbers[1];
                break;
                case "%": 
                    $procent = $numbers[0] / 100;  
                    $result = $numbers[1] * $procent; 
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
     * @event button8.action 
     */
    function doButton8Action(UXEvent $e = null)
    {    
        
    }






}
