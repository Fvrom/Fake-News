<?php
require __DIR__ . '/header.php'; ?>


<form action="post.php" method="post">
    <div class="input_wrapper">
        <label for="name" class="label">Name:</label>
        <input type="name" name="name" class="input_name"> <br>

        <label for="text" class="label">Text:</label>
        <input type=" text" text="text" class="input_text">

        <button type="submit" class="input_button">Submit</button>

        <a href="index.php" class="contact_home"> Back to the news</a>
    </div>



</form>