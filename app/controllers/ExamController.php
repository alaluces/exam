<?php

class ExamController extends BaseController {

    protected $theme;
    
    public function __construct()
    {
        $this->initTheme();      
    }  
    
    public function showIntro()
    { 
        return $this->theme->of('exam1Intro')->render();
    }  
    
    public function start1()
    { 
        return $this->theme->of('exam1Start')->render();
    }
    
    public function start2()
    { 
        return $this->theme->of('exam2Start')->render();
    }

    public function save()
    { 
        dd(Input::all());
        //return $this->theme->of('examStart')->render();
    }
    
    
    
    

}
