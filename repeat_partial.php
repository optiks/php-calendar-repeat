<form action="create_repeat.php" method="post">
   <div class="container-fluid">
      <div class="row-fluid">
         <div class="span2">Repeats:</div>
         <div class="span10">
            <select>
               <option value="daily">Daily</option>
               <option value="weekly">Weekly</option>
               <option value="monthly">Monthly</option>
               <option value="yearly">Yearly</option>
            </select>
         </div>
      </div>
   
      <div class="row-fluid">
         <div class="span2">Repeat every:</div>
         <div class="span10">
            <select>
               <option value="1">1</option>
               <option value="2">2</option>
               <option value="3">3</option>
               <option value="4">4</option>
            </select>
            <span>weeks</span>
         </div>
      </div>
   
      <div class="row-fluid">
         <div class="span2">Repeat on:</div>
         <div class="span10">
            <input type="checkbox" name="chk_monday" value="monday"><span>M</span>
            <input type="checkbox" name="chk_tuesday" value="tuesday"><span>T</span>
            <input type="checkbox" name="chk_wednesday" value="wednesday"><span>W</span>
            <input type="checkbox" name="chk_thursday" value="thursday"><span>T</span>
            <input type="checkbox" name="chk_friday" value="friday"><span>F</span>
            <input type="checkbox" name="chk_saturday" value="saturday"><span>S</span>
            <input type="checkbox" name="chk_monday" value="sunday"><span>S</span>     
         </div>
      </div>
   
      <div class="row-fluid">
         <div class="span2">Starts on:</div>
         <div class="span10">
            <input type="date" name="dt_starts_on">
         </div>
      </div>
   
      <div class="row-fluid">
         <div class="span2">Summary:</div>
         <div class="span10">
            <span>Weekly on Tuesday</span>
         </div>
      </div>
   
      <div class="row-fluid">
         <div class="span2"></div>
         <div class="span10">
            <button type="submit">Done</button>
            <button type="button">Cancel</button>
          </div>
         </div>
      </div
   </div>
</form>
