<div class="container-fluid">
   
    <br>
    
    <div class="row">
        <div class="col-md-2">            
        </div>  
        <div class="col-md-8">
            <img src="{{ Theme.asset.url('img/playback.gif') }}" style="height:100px;width:200px"/>
            <!--
            <audio autoplay>
                <source src="{{ Theme.asset.url('snd/a.mp3') }}" type="audio/mpeg">
            </audio>    
            -->
            <br /><br />
            {{ Form.open({'action': 'examSaveItems', 'class':'form-inline', 'id':'userForm'}) }}
            <input type="hidden" name="examNumber" value="1"> 
            <input type="hidden" name="dateStart" value="{{ dateStart }}"> 
            <b>Name of applicant</b> <input type="text" class="form-control input-sm" name="applicantName" style="width:200px">
            <h3>Section 1 Questions 1-10</h3>
            <br />
            <b>Questions 1-5</b><br />
            Complete the notes below.<br />
            Write no more than two words and / or a number for each answer
            <br /><br />
            Example
            <br />
            <b>Transport from Bayswater</b>
            <br />
            <b>Destination</b> <input type="text" class="form-control input-sm" value="Harbour City" disabled style="width:100px">
            <br /><br />
            <ol>
                <li>Express train leaves at <input type="text" class="form-control input-sm" name="answer1" style="width:100px"></li>
                <li>Nearest station is <input type="text" class="form-control input-sm" name="answer2" style="width:100px"></li>
                <li>Number 706 bus goes to <input type="text" class="form-control input-sm" name="answer3" style="width:100px"></li>
                <li>Number <input type="text" class="form-control input-sm" style="width:100px" name="answer4"> bus goes to station</li>
                <li>Earlier bus leaves at <input type="text" class="form-control input-sm" name="answer5" style="width:100px"></li>
            </ol>
            
            <br /><br />
            <b>Questions 5-6</b><br />
            Complete the table below.<br />
            Write no more than two words and / or a number for each answer
            <br /><br />
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Transport</th>
                        <th>Cash Fare</th>
                        <th>Card Fare</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Bus</td>
                        <td><b>(6)</b>$<input type="text" class="form-control input-sm" name="answer6" style="width:100px"></td>
                        <td>$1.50</td>
                    </tr>
                    <tr>
                        <td>Train (Peak)</td>
                        <td>$10</td>
                        <td>$10</td>
                    </tr>
                    <tr>
                        <td>Train (Off-peak)<br /> Before 5pm or <b>(7)</b><input type="text" name="answer7" class="form-control input-sm" style="width:100px">pm</td>
                        <td>$10</td>
                        <td><b>(8)</b>$<input type="text" class="form-control input-sm" name="answer8" style="width:100px"></td>
                    </tr>
                    <tr>
                        <td><b>(9)</b><input type="text" class="form-control input-sm" name="answer9" style="width:100px">Ferry</td>
                        <td>$4.50</td>
                        <td>D$3.55</td>
                    </tr>
                    <tr>
                        <td>Tourist Ferry <b>(10)</b><input type="text" class="form-control input-sm" name="answer10" style="width:100px">Ferry</td>
                        <td>$35</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Tourist Ferry(Whole day)</td>
                        <td>$65</td>
                        <td>-</td>
                    </tr>
                </tbody>
            </table>            
            <br />
            <h3>Section 2 Questions 11-20</h3>
            <br />
            <b>Questions 11-14</b>
            <br /><br />
            
            <b>11.</b> If it is your first time seeing a counsellor <br />
            
            <input type="radio" name="answer11" value="a"> Louise Bagshaw<br />
            <input type="radio" name="answer11" value="b"> Tony Denby<br />
            <input type="radio" name="answer11" value="c"> Naomi Flynn<br />
            <br />
            <b>12.</b> If you are unable to see a counsellor during normal office hours 
            <br />
            <input type="radio" name="answer12" value="a"> Louise Bagshaw<br />
            <input type="radio" name="answer12" value="b"> Tony Denby<br />
            <input type="radio" name="answer12" value="c"> Naomi Flynn<br />
            <br />
            <b>13.</b> If you do not have an appointment 
            <br />
            <input type="radio" name="answer13" value="a"> Louise Bagshaw<br />
            <input type="radio" name="answer13" value="b"> Tony Denby<br />
            <input type="radio" name="answer13" value="c"> Naomi Flynn<br />
            <br />
            <b>14.</b> If your concerns are related to anxiety 
            <br />
            <input type="radio" name="answer14" value="a"> Louise Bagshaw<br />
            <input type="radio" name="answer14" value="b"> Tony Denby<br />
            <input type="radio" name="answer14" value="c"> Naomi Flynn<br />
            <br /><br />
            
            
            <b>Questions 15-20</b><br />
            Complete the table below. <br />
            Write no more than two words for each answer.
  
            
             <table class="table table-bordered" table-layout="fixed" width="100%">
                <thead>
                    <tr>
                        <th>WORKSHOP</th>
                        <th>CONTENT</th>
                        <th>TARGET GROUP</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td width="30%">   Adjusting </td>
                        <td width="30%"> What you need to succeed academically </td>
                        <td width="30%"> ( <b> 15 </b> ) <input type="text" class="form-control input-sm" name="answer15" style="width:100px"> students </td>
                    </tr>
                    <tr >
                        <td>Getting Organized </td>
                        <td>Use time effectively, find ( <b> 16 </b> ) <input type="text" class="form-control input-sm" name="answer16" style="width:100px">  between study and leisure</td>
                        <td> all students</td>
                    </tr>
                    <tr>
                        <td>Communicating</td>
                        <td>Talking with staff, communicating across cultures</td>
                        <td>all students, especially  <b> (17) </b> <input type="text" class="form-control input-sm" name="answer17" style="width:100px"> </td>
                    </tr>
                    <tr>
                        <td>Anxiety</td>
                        <td>( <b> 18 </b> ) <input type="text" class="form-control input-sm" name="answer18" style="width:100px">  breathing techniques, meditation, etc.</td>
                        <td>students about sit exams</td>
                    </tr>
                    <tr>
                        <td> <b> (19) </b> <input type="text" class="form-control input-sm" name="answer19" style="width:100px"> </td>
                        <td>Staying on track for long periods</td>
                        <td> <b> (20) </b><input type="text" class="form-control input-sm" name="answer20" style="width:100px"> students only </td>
                    </tr>
                    
                    
                 
                </tbody>
            </table>
        
            <b>Section 3 <br>
                    Questions 21–30 </b> <br>
            Complete the notes below. <br /> 
            Write no more than three words for each answer.
            <br />
            <br />  
            <b> Novel: (21) </b> <input type="text" class="form-control input-sm" name="answer21" style="width:200px">  <br/>
            <b> Protagonists:</b> Mary Lennox; Colin Craven <br />
            <b> Time period:</b> Early in <b>(22)</b> <input type="text" class="form-control input-sm" name="answer22" style="width:200px">  <br/>
            <b> Plot:</b> Mary → UK – meets Colin who thinks he’ll never be able to <b>(23)</b> <input type="text" class="form-control input-sm" name="answer23" style="width:200px"> They become friends. <br/>
            <b> Point of view:</b> “Omniscient” – narrator knows all about characters’ feelings, opinions and <b>(24)</b> <input type="text" class="form-control input-sm" name="answer24" style="width:200px">  <br/>
            <b> Audience: </b> Good for children – story simple to follow. <br/>
            <b> Symbols </b> (physical items that represent <b>(25)</b> <input type="text" class="form-control input-sm" name="answer25" style="width:200px"> ):<br/>
            <b> • </b> the robin redbreast <br/>
            <b> • (26) </b> <input type="text" class="form-control input-sm" name="answer26" style="width:200px">  <br/>
            <b> • </b> the portrait of Mistress Craven <br/>
            <br/>
            <b>Motifs</b> (patterns in the story): <br/>
            <b>• </b> the Garden of Eden <br/>
            <b> • </b> secrecy – metaphorical and literal transition from <b>(27)</b> <input type="text" class="form-control input-sm" name="answer27" style="width:200px">  <br/>
            <br/>
            <b> Themes: </b> Connections between <br/>
            <b> • (28) </b> <input type="text" class="form-control input-sm" name="answer28" style="width:200px"> and outlook <br/>
            <b> • (29) </b> <input type="text" class="form-control input-sm" name="answer29" style="width:200px"> and well-being <br/>
            <b> • </b> individuals and the need for <b> (30)</b> <input type="text" class="form-control input-sm" name="answer30" style="width:200px"> <br/>
            <br />
            <b>Section 4 Questions 31-40 <br/> <br/>

            Questions 31–35 </b><br/>
            Complete the table below. <br/>
               Write one word only for each answer. <br/> <br/>
                <table class="table table-bordered">
                    <thead > 
                        <tr>
                            <th> <b> <center>TIME PERSPECTIVE </center></b> </th>
                        </tr>
                    </thead>
                </table>
               <table class="table table-bordered">
                       <tbody>
                        <tr> 
                             <th > <b> <center>Time Zone </center></b> </th>
                             <th > <b> <center>Outlook </center></b> </th>
                             <th > <b> <center>Features & Consequences  </center></b> </th>
                        </tr>
                        
                        
                        <tr>
                            <td width="30%"> Past   </td>
                            <td width="30%"> Positive   </td>
                            <td width="30%"> Remember good times, e.g. birthdays.
                                Keep family records, photo album, etc. </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td> <b> (31) </b> <input type="text" class="form-control input-sm" name="answer31" style="width:150px"> </td>
                            <td>Focus on disappointments, failures, bad decisions.</td>
                        </tr>
                        
                        <tr>
                            <td>Present</td>
                            <td>Hedonistic</td>
                            <td>Live for <b> (32)</b> <input type="text" class="form-control input-sm" name="answer32" style="width:150px"> seek sensation; avoid pain.</td>
                            
                        </tr>
                        
                         <tr>
                            <td width="20%"></td>
                            <td width="20%">Fatalistic</td>
                            <td width="60%">Life is governed by  <b> (33)</b> <input type="text" class="form-control input-sm" name="answer33" style="width:150px"> ,religious beliefs, social conditions. Life’s path can’t be changed.</td>
                            
                        </tr>
                        
                        <tr>
                            <td>Future</td>
                            
                            <td>  <b> (34)</b> <input type="text" class="form-control input-sm" name="answer34" style="width:150px"> </td>
                            <td>Prefer work to play. Don’t give in to temptation.</td>
                        </tr> 
                        
                        <tr>
                            <td></td>
                            <td>Fatalistic</td>
                            <td>Have a strong belief in life after death and importance of   <b> (35)</b> <input type="text" class="form-control input-sm" name="answer35" style="width:150px">  in life.</td>
                            
                        </tr>
                        
                        
                    </tbody>
                    
                </table> <br/><br/>
                <b>Questions 36–40</b> <br/>
                Choose the correct letter, A, B or C. <br/><br/>
                
                <b> 36.</b>  We are all present hedonists
                <br />
            <input type="radio" name="answer36" value="a"> at school<br />
            <input type="radio" name="answer36" value="b"> at birth<br />
            <input type="radio" name="answer36" value="c"> while eating and drinking<br />
            <br /><br />
            
             <b> 37.</b>  American boys drop out of school at a higher rate than girls because
                <br />
            <input type="radio" name="answer37" value="a"> they need to be in control of the way they learn<br />
            <input type="radio" name="answer37" value="b"> they play video games instead of doing school work<br />
            <input type="radio" name="answer37" value="c"> they are not as intelligent as girls<br />
            <br /><br />
            
            <b> 38.</b>  Present-orientated children
                <br />
            <input type="radio" name="answer38" value="a"> do not realize present actions can have negative future effects<br />
            <input type="radio" name="answer38" value="b"> are unable to learn lessons from past mistakes<br />
            <input type="radio" name="answer38" value="c"> know what could happen if they do something bad, but do it anyway<br />
            <br /><br />
            
            <b> 39.</b>  If Americans had an extra day per week, they would spend it
                <br />
            <input type="radio" name="answer39" value="a"> working harder<br />
            <input type="radio" name="answer39" value="b"> building relationships<br />
            <input type="radio" name="answer39" value="c"> sharing family meals<br />
            <br /><br />
            
             <b> 40.</b>  Understanding how people think about time can help us
                <br />
            <input type="radio" name="answer40" value="a">become more virtuous<br />
            <input type="radio" name="answer40" value="b"> work together better<br />
            <input type="radio" name="answer40" value="c"> identify careless or ambitious people<br />
            <br /><br />
            
            
            <br />
            <input type="submit" name="btnsubmit" value="save">
            </form>
        </div>  
        <div class="col-md-2">            
        </div>       
 
    </div>
</div>

<script>
    window.onbeforeunload = function (e) {
  var message = "Your confirmation message goes here.",
  e = e || window.event;
  // For IE and Firefox
  if (e) {
    e.returnValue = message;
  }

  // For Safari
  return message;
};

</script>
