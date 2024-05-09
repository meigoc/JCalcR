<?php
namespace meigo\modules;

use std, gui, framework, meigo;
use php\gui\framework\ScriptEvent; 


class AppModule extends AbstractModule
{

    /**
     * @event construct 
     */
    function doConstruct(ScriptEvent $e = null)
    {    
        //echo "[INFO] The application modules are loaded.\n[INFO] MeigoUI 10 libraries loaded successfully!\n[INFO] PHP Version: ".phpversion()."\n";
    }

    /**
     * @event action 
     */
    function doAction(ScriptEvent $e = null)
    {    
        if (app()->module("AppModule")->data_bin->get("ver","devtools") != "1.4"){
            echo "[WARN] The data.bin file has an invalid format or does not exist. I recreate this file and write new values.\n";
            app()->module("AppModule")->data_bin->set("ver",'1.4',"devtools");
            app()->module("AppModule")->data_bin->set("fast_load",0,"main");
            app()->module("AppModule")->data_bin->set("disable.all.animations",0,"main");
            app()->module("AppModule")->data_bin->set("disable.optimization",0,"main");
            app()->module("AppModule")->data_bin->set("disable.blur",0,"main");
            app()->module("AppModule")->data_bin->set("button.animation.type","BounceIn","main");
            app()->module("AppModule")->data_bin->set("readme","Do not change these parameters unless you know what they do!","info");
            self::doAction();
        } else {
            echo "[INFO] Settings from data.bin file successfully loaded!\n";
            
            if(app()->module("AppModule")->data_bin->get("fast_load","main") == 1)
            {
                app()->showForm("MainForm"); 
                waitAsync(100, function () use () {
                    app()->hideSplash();
                });
            } else {
                app()->showForm("splash_load");
            }
            
        }
    }

}
