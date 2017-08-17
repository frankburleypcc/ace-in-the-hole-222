<form method="post" action=" " id="inquiryForm">
    <h2>Contact Form</h2>
    <label for="event">*Event:</label>
        <select size="1" name="event" id="event">
          <option>Choose Your Event</option>
          <option value="none">None</option>
          <option value="long_course">Long Course</option>
          <option value="olympic">Olympic</option>
          <option value="10k">10K</option>
          <option value="half_marathon">Half Marathon</option>
          <option value="sprint">Sprint </option>
          <option value="try-a-tri">Try-a-Tri</option>
          <option value="splash-n-dash">Splash n Dash</option>
        </select>
    <label for="event">*Position:</label>
        <select size="1" name="position" id="position">
          <option>*Choose Position</option>
          <option value="volunteer">Volunteer</option>
          <option value="athlete">Athlete</option>
         </select>
    <label for="myName">Name:</label>
      <input type="text" name="myName" id="myName">
    <label for="myEmail">E-mail:</label>
      <input type="text" name="myEmail" id="myEmail">
    <label for="myNumber">*Phone:</label>
        <input type="tel" name="myNumber" id="myNumber">
    
    <label for="myQuestion">Question or Comment:</label>
      <textarea form="inquiryForm" rows="10" cols="50" name="myQuestion" id="myQuestion"></textarea>
    <input id="mySubmit" type="submit" value="Submit">
</form>