<div class="container-fluid">    
    <br>    
    <div class="row">
        <div class="col-md-4">            
        </div>  
        <div class="col-md-4">            
            <h3>Exam {{ answers.examNumber }} answers</h3> 
            Applicant Name: <b>{{ answers.applicantName }}</b><br />
            Date Taken: <b>{{ answers.dateStart }}</b><br />
            Date Completed: <b>{{ dateEnd }}</b><br />  
            Duration: <b>{{ duration }}</b><br /><br />   
            <ul>
                {% for key, answer in answers if key[0:6] == 'answer' %}
                    <li>{{ key }} - {{ answer }}</li>
                {% endfor %}
            </ul>
        </div>  
        <div class="col-md-4">            
        </div>
    </div>
</div>