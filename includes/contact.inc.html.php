<form method="post" action=" " id="inquiryForm">
    <label for="event">*Event:</label>
        <select size="1" name="event" id="event">
          <option>Choose Your Event</option>
          <option value="long_course">Long Course</option>
          <option value="olympic">Olympic</option>
          <option value="10k">10K</option>
          <option value="half_marathon">Half Marathon</option>
          <option value="sprint">Sprint </option>
          <option value="try-a-tri">Try-a-Tri</option>
        </select>
    <label for="myName">Name:</label>
      <input type="text" name="myName" id="myName">
    <label for="myEmail">E-mail:</label>
      <input type="text" name="myEmail" id="myEmail">
    <label for="myQuestion">Question or Comment:</label>
      <textarea form="inquiryForm" rows="10" cols="50" name="myQuestion" id="myQuestion"></textarea>
    <input id="mySubmit" type="submit" value="Submit">
</form>