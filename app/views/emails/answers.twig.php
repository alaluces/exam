<div class="container-fluid">    
    <br>    
    <div class="row">
        <div class="col-md-4">            
        </div>  
        <div class="col-md-4">            
            <h3>Hello {{ name }}, Here are the answers</h3>    
            <ul>
                {% for key, answer in answers if key != '_token' and key != 'btnsubmit' %}
                <li>{{ key }} - {{ answer }}</li>

                {% endfor %}
            </ul>
        </div>  
        <div class="col-md-4">            
        </div>
    </div>
</div>