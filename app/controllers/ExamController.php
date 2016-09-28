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
        //dd(Input::all());
        /*
        Mail::send('emails.answers', array('answers' => Input::all()), function($message)
        {
            $message->to('support@iconceptcontactsolutions.com', 'IT')->subject('TEST');
        }); 
         
         * 
         */ 
        return $this->theme->of('emails.answers', array('answers' => Input::all()))->render();
         
         
    }
    
    
    
    

}
