<?php
/**
 * Template part for displaying a single column contact form including a calendar
 */

?>

<div id="contact">
    <div class="container contact">
        <div class="row">
            <div class="col-md-7">
                <h3>Contact</h3>
                    <form id="contact-form" name="contact-form" action="mail.php" method="POST">
                        <div class="form-group">
                            <label for="name">Naam:</label>
                            <input type="text" id="name" name="name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="subject">Onderwerp:</label>
                            <input type="text" id="subject" name="subject" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="message">Bericht:</label>
                            <textarea class="form-control" id="message" name="message" rows="8"></textarea>
                        </div>
                    </form>
                <div class="form-group">
                    <button id="send-button" type="submit" onclick="validateForm()" class="btn standard-button contact-button mb-2">Verstuur bericht</button>
                </div>
                <div id="status"></div>
            </div>
            <div> 
                <?php echo do_shortcode("[events_calendar long_events=1 full=1]") ?>
            </div>
        </div>
    </div>
</div>