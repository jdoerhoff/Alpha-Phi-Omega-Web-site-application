<?php
echo('Please enter details for the event: </br>
Please do not use any punctuation such as . \' " : ; ( ), they will not show up in the event page. </br></br>

<div style="float:left;font-size:19px;">
Event name:</br>
Date(MM/DD/YYYY format):</br>
Location:</br>
Event type:</br>
Contact Name:</br>
Number of Hours (the event counts for):</br>
Additional Info(max 160 characters): </br>
</div>
<div style="float:left;">
<form action="confirm.php" method="post">
<input type="text" name="eventName"></br>
<select id="month_start" 
          name="month_start" /> 
    <option value="01">January</option>       
    <option value="02">February</option>       
    <option value="03">March</option>       
    <option value="04">April</option>       
    <option value="05">May</option>       
    <option value="06">June</option>       
    <option value="07">July</option>       
    <option value="08">August</option>       
    <option value="09">September</option>       
    <option value="10">October</option>       
    <option value="11">November</option>       
    <option value="12">December</option>       
  </select> - 
  <select id="day_start" 
          name="day_start" /> 
    <option value="01">1</option>       
    <option value="02">2</option>       
    <option value="03">3</option>       
    <option value="04">4</option>       
    <option value="05">5</option>       
    <option value="06">6</option>       
    <option value="07">7</option>       
    <option value="08">8</option>       
    <option value="09" >9</option>       
    <option value="10">10</option>       
    <option value="11">11</option>       
    <option value="12">12</option>       
    <option value="13">13</option>       
    <option value="14">14</option>       
    <option value="15">15</option>       
    <option value="16">16</option>       
    <option value="17">17</option>       
    <option value="18">18</option>       
    <option value="19">19</option>       
    <option value="20">20</option>       
    <option value="21">21</option>       
    <option value="22">22</option>       
    <option value="23">23</option>       
    <option value="24">24</option>       
    <option value="25">25</option>       
    <option value="26">26</option>       
    <option value="27">27</option>       
    <option value="28">28</option>       
    <option value="29">29</option>       
    <option value="30">30</option>       
    <option value="31">31</option>       
  </select> - 
  <select id="year_start" 
         name="year_start" /> 
    <option value="2012">2012</option>       
    <option value="2013">2013</option>       
    <option value="2014">2014</option>       
    <option value="2015">2015</option>       
    <option value="2016">2016</option>       
    <option value="2017">2017</option>       
    <option value="2018">2018</option>       
  </select> </br>
<input type="text" name="location"></br>
<select name="eventType"><option value="fellowship">Fellowship</option><option value="service">Service</option><option value="fundraising">Fundraising</option> </select></br>
<input type="text" name="contactName"></br>
<input type="number" name="hours" min="1"></br>
<input type="text" name="addtInfo"></br>
<input type="hidden" name ="username" value ="' . $_REQUEST['username'] . '" />
<input type="hidden" name ="PW" value ="' . $_REQUEST['PW'] . '" />
<input type="submit" value="Create Event"/>
</div>');
?>