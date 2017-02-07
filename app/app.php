<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/contact.php";
    require_once __DIR__."/../src/post.php";

    $app = new Silex\Application();

    $app->get("/", function() {
        return "<!DOCTYPE html>
        <html>
            <head>

                <title>Job Board</title>
                <link rel= 'stylesheet' type='text/css' href='/bootstrap.css')>
                <script src='jquery-3.1.1.js'></script>
                <script src='scripts.js'></script>
            </head>
            <body>
                <h1>Job Board</h1>
                <form action='/job_board'>
                    <div class='form-group'>
                        <label for='title'>Title your post:</label>
                        <input type='text' name='title' placeholder='Your title goes here'>
                    </div>
                    <div class='form-group'>
                        <label for='description'>Give your post a description:</label>
                        <textarea type='text' name='description' placeholder='Your post content goes here' cols='100' rows='5'></textarea>
                    </div>
                    <div class='form-group'>
                        <label for='name'>Enter your name:</label>
                        <input type='text' name='name' placeholder='Your name goes here'>
                    </div>
                    <div class='form-group'>
                        <label for='email'>Enter your email:</label>
                        <input type='text' name='email' placeholder='Your email goes here'>
                    </div>
                    <div class='form-group'>
                        <label for='phone_number'>Enter your phone number:</label>
                        <input class='phone_input' type='text' name='phone_number_country' maxlength=1 value='1'>
                        -
                        <input class='phone_input' type='text' name='phone_number_one' maxlength=3>
                        -
                        <input class='phone_input' type='text' name='phone_number_two' maxlength=3>
                        -
                        <input class='phone_input' type='text' name='phone_number_three' maxlength=4>
                    </div>
                    <button type='submit' class='btn btn-danger'>Submit</button>
                </form>

            </body>
        </html>";
    });
    $app->get("/job_board", function() {
        $post_title = $_GET["title"];
        $post_description = $_GET["description"];
        $contact_name = $_GET["name"];
        $contact_email = $_GET["email"];
        $contact_phone_number = '+' . $_GET["phone_number_country"] . ' (' . $_GET["phone_number_one"] . ') ' . $_GET["phone_number_two"] . '-' . $_GET["phone_number_three"];

        $contactInfo = new Contact($contact_name, $contact_email, $contact_phone_number);
        $newPost = new Post($post_title, $post_description, $contactInfo);

        $output_title = $newPost->getTitle();
        $output_description = $newPost->getDescription();
        $output_name = $newPost->getContact()->getName();
        $output_email = $newPost->getContact()->getEmail();
        $output_phone = $newPost->getContact()->getPhoneNumber();


        return "<h1>$output_title</h1>
            <p>$output_description</p>
            <ul>
                <li>$output_name</li>
                <li>$output_email</li>
                <li>$output_phone</li>
            </ul>" ;

    });

    return $app;
?>
