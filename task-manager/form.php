<?php


<form action="..." method="POST">

  <input type="text" name="text" value="..." placeholder="An input box"><br>

  <label for="check">Czech?</label><input type="checkbox" id="check" name="check" checked><br>

  <label for="radio1">Value 1</label><input type="radio" id="radio1" name="radio" value="1">
  <label for="radio2">Value 2</label><input type="radio" id="radio2" name="radio" value="2" checked>
  <label for="radio3">Value 3</label><input type="radio" id="radio3" name="radio" value="3"><br>

  <select name="select">
    <option value="1">option 1</option>
    <option value="2" selected>option 2</option>
    <option value="3">option 3</option>
  </select><br>

  <textarea name="morelines" placeholder="A textarea"></textarea><br>

  <input type="submit" value="Submit">

  <button><strong>Sub<em>mit</em></strong></button>

</form>