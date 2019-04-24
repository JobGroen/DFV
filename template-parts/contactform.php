<?php
/**
 * Template part for displaying the contact form
 */

?>

<div id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Contact</h2>
            </div>
        </div>
    </div>
    <div class="container contact">
        <div class="row">
            <div class="col-md-7">
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

            <div class="col-md-5">
                <h3>Contactgegevens:</h3>
                <p>Voorbeeldlaan 57<br>
                    1742 RL<br>
                    Amsterdam</p><br>
                <p><i class="far fa-envelope"></i> info@purefaceart.nl</p>
                <p><i class="fas fa-phone phone-upside"></i> 0612345678</p>
                <p><i class="fab fa-instagram"></i> /purefaceart</p>
                <p><i class="fab fa-facebook-square"></i> /purefaceart</p>
            </div>
        </div>
    </div>

</div>