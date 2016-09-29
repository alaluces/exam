<?php

class ExamController extends BaseController {

    protected $theme;
    
    public function __construct()
    {
        $this->initTheme();      
    }  
    
    public function showIntro()
    { 
        return $this->theme->of('examIntro')->render();
    }  
    
    public function start1()
    { 
        return $this->theme->of('exam1', ['dateStart' => date("Y-m-d H:i:s")])->render();
    }
    
    public function start2()
    { 
        return $this->theme->of('exam2', ['dateStart' => date("Y-m-d H:i:s")])->render();
    }
    
    public function showEnd()
    { 
        return $this->theme->of('examComplete')->render();
    }

    public function save()
    { 
        //dd(Input::all());
        
        $datetime1 = new DateTime(Input::get('dateStart'));
        $datetime2 = new DateTime(date("Y-m-d H:i:s"));
        $interval = $datetime1->diff($datetime2);
        $duration = $interval->format('%m minutes, %s seconds');
       
        Mail::send('emails.answers', array('answers' => Input::all(), 'dateEnd' => date("Y-m-d H:i:s"), 'duration' => $duration), function($message)
        {
            $message->to('support@iconceptcontactsolutions.com', 'IT')->subject('TEST');
        }); 

        return Redirect::to('end'); 
        //return $this->theme->of('emails.answers', ['answers' => Input::all(), 'dateEnd' => date("Y-m-d H:i:s"), 'duration' => $duration])->render();
         
         
    }
    
    
    
    

}
