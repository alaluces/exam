    <div class="container-fluid">
    
    <br>
    
    <div class="row">
        <div class="col-md-2">            
        </div>  
        <div class="col-md-8">
            {{ Form.open({'action': 'examSaveItems', 'class':'form-inline', 'id':'userForm'}) }}
            <h3 align="center">TEST II</h3>
            <h3 align="center">ABSTRACT REASONING</h3><br/>
            <p> Instructions: Answer as many questions as you can in ten (10) minutes, write the letter on which corresponds to the correct answer on the answer sheet provided. </p>
            <br/>
            <div class="solid">
          
             1.	Which figure completes the series? 
        <select class="form-control" width="100px">
          <option>A</option>
          <option>B</option>
          <option>C</option>
          <option>D</option>
        </select>
          <br/>
            <br/> 
                <img src="{{ Theme.asset.url('img/abstract/ab1.png') }}" style="height:150px; width:600px"/>
                <br/><br/>
            </div><br/>
            <div class="solid">
            2.Which figure completes the series? <input type="text" class="form-control input-sm" name="answer2" style="width:100px"> <br/>
            <br/> 
                <img src="{{ Theme.asset.url('img/abstract/ab2.png') }}" style="height:150px; width:600px"/>
                <br/><br/>   
               </div><br/>
            <div class="solid">
            3.Which figure completes the series? <input type="text" class="form-control input-sm" name="answer3" style="width:100px"> <br/>
            <br/>
                <img src="{{ Theme.asset.url('img/abstract/ab3.png') }}" style="height:150px; width:600px"/>
                <br/><br/>   
            </div><br/>
            <div class="solid">
             4.Which figure completes the series? <input type="text" class="form-control input-sm" name="answer4" style="width:100px"> <br/>
            <br/>
                <img src="{{ Theme.asset.url('img/abstract/ab4.png') }}" style="height:150px; width:600px"/>
                <br/><br/>
            </div> <br/>
            <div class="solid">
             5.Which figure completes the series? <input type="text" class="form-control input-sm" name="answer5" style="width:100px"> <br/>
            
             <br/>   <img src="{{ Theme.asset.url('img/abstract/ab5.png') }}" style="height:150px; width:600px"/>
                <br/><br/>
            </div> <br/>
            <div class="solid">
             6.Which figure completes the statement? <input type="text" class="form-control input-sm" name="answer6" style="width:100px"> <br/>
            <br/>
                <img src="{{ Theme.asset.url('img/abstract/ab6.png') }}" style="height:150px; width:600px"/>
                <br/><br/>  
            </div> <br/>
              <div class="solid">
             7.Which figure completes the statement? <input type="text" class="form-control input-sm" name="answer7" style="width:100px"> <br/>
            <br/>
                <img src="{{ Theme.asset.url('img/abstract/ab7.png') }}" style="height:150px; width:600px"/>
                <br/><br/>
              </div> <br/>
              <div class="solid">
              8.Which figure completes the statement? <input type="text" class="form-control input-sm" name="answer8" style="width:100px"> <br/>
            <br/>
                <img src="{{ Theme.asset.url('img/abstract/ab8.png') }}" style="height:150px; width:600px"/>
                <br/><br/>  
              </div> <br/>
              <div class="solid">
               9.Which figure completes the statement? <input type="text" class="form-control input-sm" name="answer9" style="width:100px"> <br/>
            <br/>
                <img src="{{ Theme.asset.url('img/abstract/ab9.png') }}" style="height:150px; width:600px"/>
                <br/><br/> 
              </div><br/>
              <div class="solid">
               10.Which figure completes the statement? <input type="text" class="form-control input-sm" name="answer10" style="width:100px"> <br/>
            <br/>
                <img src="{{ Theme.asset.url('img/abstract/ab10.png') }}" style="height:150px; width:600px"/>
                <br/><br/> 
              </div><br/>
               <div class="solid">
               11. Which figure is the odd one out? <input type="text" class="form-control input-sm" name="answer11" style="width:100px"> <br/>
            <br/>
                <img src="{{ Theme.asset.url('img/abstract/ab11.png') }}" style="height:150px; width:600px"/>
                <br/><br/>   
               </div><br/>
                <div class="solid">
               12. Which figure is the odd one out? <input type="text" class="form-control input-sm" name="answer12" style="width:100px"> <br/>
            <br/>
                <img src="{{ Theme.asset.url('img/abstract/ab12.png') }}" style="height:150px; width:600px"/>
                <br/><br/>   
                </div><br/>
                <div class="solid">
                13. Which figure is the odd one out? <input type="text" class="form-control input-sm" name="answer13" style="width:100px"> <br/>
            <br/>
                <img src="{{ Theme.asset.url('img/abstract/ab13.png') }}" style="height:150px; width:600px"/>
                <br/><br/>
                </div><br/>
                 <div class="solid">
               14. Which figure is the odd one out? <input type="text" class="form-control input-sm" name="answer14" style="width:100px"> <br/>
            <br/>
                <img src="{{ Theme.asset.url('img/abstract/ab14.png') }}" style="height:150px; width:600px"/>
                <br/><br/>   
                 </div><br/>
                 <div class="solid">
                15. Which figure is the odd one out? <input type="text" class="form-control input-sm" name="answer15" style="width:100px"> <br/>
            <br/>
                <img src="{{ Theme.asset.url('img/abstract/ab15.png') }}" style="height:150px; width:600px"/>
                <br/><br/>   
                 </div><br/>
                 <div class="solid">
                16. Which figure completes the series? <input type="text" class="form-control input-sm" name="answer16" style="width:100px"> <br/>
            <br/>
                <img src="{{ Theme.asset.url('img/abstract/ab16.png') }}" style="height:150px; width:600px"/>
                <br/><br/>   
                 </div><br/>
                <div class="solid">
                17. Which figure completes the series? <input type="text" class="form-control input-sm" name="answer17" style="width:100px"> <br/>
            <br/>
                <img src="{{ Theme.asset.url('img/abstract/ab17.png') }}" style="height:150px; width:600px"/>
                <br/><br/>
                </div><br/>
                <div class="solid">
                18. Which figure belongs in neither group? <input type="text" class="form-control input-sm" name="answer18" style="width:100px"> <br/>
            <br/>
                <img src="{{ Theme.asset.url('img/abstract/ab18.png') }}" style="height:150px; width:600px"/>
                <br/><br/>
                </div><br/>
                <div class="solid">
                19. Which figure belongs in neither group? <input type="text" class="form-control input-sm" name="answer19" style="width:100px"> <br/>
            <br/>
                <img src="{{ Theme.asset.url('img/abstract/ab19.png') }}" style="height:150px; width:600px"/>
                <br/><br/>
                </div><br/>
                 <div class="solid">
                20. Which figure completes the series? <input type="text" class="form-control input-sm" name="answer20" style="width:100px"> <br/>
            <br/>
                <img src="{{ Theme.asset.url('img/abstract/ab20.png') }}" style="height:150px; width:600px"/>
                <br/><br/>
                 </div><br/>
            </form>
        </div>  
        <div class="col-md-2">            
        </div>       
 
    </div>
</div>

<script>
    
    
    
    
    
    
</script>