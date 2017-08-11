<form method="post" action=" ">
         <!--this is for the Saturday Events dropdown-->
        <label for="event">*Saturday Event:</label>
        <select size="1" name="event" id="event">
          <option>Choose Your Event</option>
          <option value="long course-$240">Long Course - $240</option>
          <option value="olympic-$110">Olympic - $110</option>
          <option value="10K-$50">10K - $50</option>
          <option value="half marathon-$75">Half Marathon - $75</option>
        </select>
        <!--this is for Sunday Events dropdown-->
        <label for="eventSun">*Sunday Event:</label>
        <select size="1" name="eventSun" id="eventSun">
          <option>Choose Your Event</option>
          <option value="sprint-$90">Sprint - $90</option>
          <option value="try-a-tri-$65">Try-a-Tri - $65</option>
          <option value="splash-n-dash-$25">Splash n Dash - $25</option>
        </select>
        <label for="myName">*Name:</label>
        <input type="text" name="myName" id="myName">
        <label for="myNumber">*Phone:</label>
        <input type="tel" name="myNumber" id="myNumber">
         <label for="myAge">*Age</label>
          <input type="text" name="age" id="age" min="18" max="99" required>
       
        <input id="mysubmit" type="submit" value="Submit">
    </form>