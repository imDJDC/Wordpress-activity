<?php
    /* Template Name: Contact */
get_header();
?>
<div>
  <div>
  <div class="container">
  <form>
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="Luzon">Luzon</option>
      <option value="visayas">Visayas</option>
      <option value="mindanao">Mindanao</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>
</div>
</div>
<?php get_footer(); ?>