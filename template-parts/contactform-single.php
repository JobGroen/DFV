<?php
/**
 * Template part for displaying a single column contact form
 */

?>

<div id="contact-single" >
    <div class="container contact-single">
        <div data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-once="true" class="row">
            <div class="col-md-6">
			<h3>Contact</h3>
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">
                    <div class="form-group">
                        <label for="name">Naam:</label>
                        <input type="text" id="name" name="name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="email">E-mail:</label>
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
            <div class="col-md-6">
            <h3>Mijn Evenementen</h3>
            <div class="calendar">
                <?php echo do_shortcode("[events_list scope='future' limit=5 pagination=1]
                <div class='event-box'>
                <p class='event-date'> #_EVENTDATES </p>
                <div class='row'>
                    <div class='col-md-4'>
                        <p class='event-time'> #_EVENTTIMES </p>
                    </div>
                    <div class='col-md-8'>
                        <p class='event-name'> #_EVENTNAME </p>
                    </div>
                </div>
                </div>
                [/events_list]") ?>
            </div>
            </div>

        </div>
    </div>
</div>
