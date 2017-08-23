<form method="post" action="../register/index.php">
         <h2>Register Form</h2>
         <!--this is for the Saturday Events dropdown-->
        <label for="event">*Saturday Event:</label>
        <select size="1" name="event" id="event">
          <option>Choose Your Event</option>
          <option value="none">None</option>
          <option value="long course-$240">Long Course - $240</option>
          <option value="olympic-$110">Olympic - $110</option>
          <option value="10K-$50">10K - $50</option>
          <option value="half marathon-$75">Half Marathon - $75</option>
        </select>
        <!--this is for Sunday Events dropdown-->
        <label for="eventSun">*Sunday Event:</label>
        <select size="1" name="eventSun" id="eventSun">
          <option>Choose Your Event</option>
          <option value="none">None</option>
          <option value="sprint-$90">Sprint - $90</option>
          <option value="try-a-tri-$65">Try-a-Tri - $65</option>
          <option value="splash-n-dash-$25">Splash n Dash - $25</option>
        </select>
        <!--this is for shirt sizes-->
        <label for="shirtSize">*Shirt Size:</label>
        <select size="1" name="shirtSize" id="shirtSize">
          <option>Choose Your Size</option>
          <option value="small">Small</option>
          <option value="medium">Medium</option>
          <option value="large">Large</option>
          <option value="xLarge">X-Large</option>
          <option value="xxLarge">XX-Large</option>
        </select>
         <!--end of drop down menus-->
        <label for="myName">*Name:</label>
          <input type="text" name="myName" id="myName">
        <label for="myEmail">E-mail:</label>
          <input type="text" name="myEmail" id="myEmail">
        <label for="myNumber">*Phone:</label>
          <input type="tel" name="myNumber" id="myNumber">
        <label for="myAge">*Age</label>
          <input type="text" name="age" id="age" min="18" max="99">
        <div>
       <!-- <label for="checkbox">Check this box if you have read liability form.</label>-->
        <input type="checkbox" id="checkBox" name="liabilityCheck" value="Checked">
        <p>&#10003; this box if you have read <a href="https://www.printablecontracts.com/Waiver_Of_Liability.php" target="_blank">liability form.</a></p>
        </div>
       
        <input id="mySubmit" type="submit" value="Submit">
         
        
    </form>