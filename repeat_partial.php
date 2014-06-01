<form action='create_repeat.php' method='post'>
   <div class="container">
      <div class="row">
         <div class="col-md-1">Repeat:</div>
         <div class="col-md-11">
            <select>
               <option value="daily">Daily</option>
               <option value="weekly">Weekly</option>
               <option value="monthly">Monthly</option>
               <option value="yearly">Yearly</option>
            </select>
         </div>
      </div>
   
      <div class="row">
         <div class="col-md-1">Repeat every:</div>
         <div class="col-md-11">
            <select>
               <option value="1">1</option>
               <option value="2">2</option>
               <option value="3">3</option>
               <option value="4">4</option>
            </select>
            <span>weeks</span>
         </div>
      </div>
   
      <div class="row">
         <div class="col-md-1">Repeat on:</div>
         <div class="col-md-11">
            <input type="checkbox" name="chk_monday" value="monday"><span>M</span>
            <input type="checkbox" name="chk_tuesday" value="tuesday"><span>T</span>
            <input type="checkbox" name="chk_wednesday" value="wednesday"><span>W</span>
            <input type="checkbox" name="chk_thursday" value="thursday"><span>T</span>
            <input type="checkbox" name="chk_friday" value="friday"><span>F</span>
            <input type="checkbox" name="chk_saturday" value="saturday"><span>S</span>
            <input type="checkbox" name="chk_monday" value="sunday"><span>S</span>     
         </div>
      </div>
   
      <div class="row">
         <div class="col-md-1">Starts on:</div>
         <div class="col-md-11">
            <input type="date" name="dt_starts_on">
         </div>
      </div>
   
      <div class="row">
         <div class="col-md-1">Summary:</div>
         <div class="col-md-11">
            <span>Weekly on Tuesday</span>
         </div>
      </div>
   
      <div class="row">
         <div class="col-md-1"></div>
         <div class="col-md-11">
            <button type="submit">Done</button>
            <button type="button">Cancel</button>
          </div>
         </div>
      </div
   </div>>
</form>
