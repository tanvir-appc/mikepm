<?php include_once 'includes/header_top.php';?>


<title>Privé Fine Ocean Charters | Contact Us</title>

<?php $title = "contact"; ?>
<style>
    .contact .text {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        text-align: center;
        padding: 1.5em;
    }
    .text>p {
        padding: 0.5em;
        background: rgba(255,255,255,0.4);
        text-align: left;
        line-height: 1.4em;
        color: #4a4a4a;
        font-size: 0.9em;
    }
    .text h4 {
        font-size: 1.75em;
        font-weight: 300;
    }
    .contact>img {
        margin-bottom: 0;
        max-height: 15em;
        object-fit: cover;
        object-position: bottom;
    }
    form input,textarea,button{
        max-width: 100%;
    }
    .agreement-wrapper {
        display: flex;
        flex-direction: row;
    }
    .agreement {
        padding-right: 1em;
        display: flex;
        align-items: center;
    }
    .agreement label>p{
        padding-left: 0.5em;
        font-size: 11px;
        margin: 0;
    }
    div.submit {
        margin-left: auto;
    }
</style>

<?php include_once 'includes/header_bottom.php';?>



<div class="all-elements">
<?php include_once 'includes/nav.php';?>

        <div class="container white">
            <div class="contact">
                <img class="responsive-image" src="images/contact/BHM-Prive_Cpontact-hero.jpg" alt="img">
                <div class="container no-bottom text">
                    <h4>FIND US HERE</h4>
                    <p>
                        BLUE HAVEN MARINA, in Leeward, Turks and Caicos Islands. Set in the stunning crystal waters of the British West Indies and nestled on the northeastern coast of Providenciales, this Caribbean marina is ideal for all yachts wanting to explore the ‘Beautiful by Nature’ islands and cays of the region.
                    </p>
                </div>
            </div>
        </div>
        
<!--         <div class="maps-container" style="margin-bottom: 0">
            <iframe class="responsive-image maps" src="https://maps.google.com/?ie=UTF8&amp;ll=21.818616209409527,-72.1476137206543 &amp;spn=0.006186,0.016512&amp;t=h&amp;z=17&amp;output=embed"></iframe>
            <div class="et_pb_map_pin" data-lat="21.818616209409527" data-lng="-72.1476137206543" data-title="Blue Haven Marina">
                <h3 style="margin-top: 10px;">Blue Haven Marina</h3>
                
            </div>

        </div> -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d237056.52160314252!2d-72.28550100484391!3d21.818615999999988!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x894b45560e82494d%3A0xd84744a33991ccd!2sBig%20Blue%20Collective%20Bonafide%20Watersports%20Adventures!5e0!3m2!1sen!2sus!4v1631449938206!5m2!1sen!2sus" width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        
        <div class="container white">
        	<div class="one-half-responsive content">
                <h4 style="font-weight: 300;color: #888;margin-top: 1em;">Get in Touch</h4>
                <div class="container no-bottom">
                    <div class="contact-form no-bottom"> 
                        <div class="formSuccessMessageWrap" id="formSuccessMessageWrap">
                            <div class="big-notification green-notification">
                                <h3 class="uppercase">Message Sent </h3>
                                <a href="#" class="close-big-notification">x</a>
                                <p>Your message has been successfuly sent. Please allow up to 48 hours for a reply! Thank you!</p>
                            </div>
                        </div>
                    
                        <form action="php/contact.php" method="post" class="contactForm" id="contactForm">
                            <fieldset>
                                <div class="formValidationError" id="contactNameFieldError">
                                    <div class="static-notification-red tap-dismiss-notification">
                                        <p class="center-text uppercase">Name is required!</p>
                                    </div>
                                </div>             
                                <div class="formValidationError" id="contactEmailFieldError">
                                    <div class="static-notification-red tap-dismiss-notification">
                                        <p class="center-text uppercase">Mail address required!</p>
                                    </div>
                                </div> 
                                <div class="formValidationError" id="contactEmailFieldError2">
                                    <div class="static-notification-red tap-dismiss-notification">
                                        <p class="center-text uppercase">Mail address must be valid!</p>
                                    </div>
                                </div> 
                                <div class="formValidationError" id="contactMessageTextareaError">
                                    <div class="static-notification-red tap-dismiss-notification">
                                        <p class="center-text uppercase">Message field is empty!</p>
                                    </div>
                                </div>   
                                <div class="formFieldWrap one-half">
                                    <input type="text" placeholder="Name" name="contactNameField" value="" class="contactField requiredField" id="contactNameField"/>
                                </div>
                                <div class="formFieldWrap ">
                                    <input type="text" placeholder="Email Address" name="contactEmailField" value="" class="contactField requiredField requiredEmailField" id="contactEmailField"/>
                                </div>
                                <div class="formTextareaWrap">
                                    <textarea placeholder="Message" name="contactMessageTextarea" class="contactTextarea requiredField" id="contactMessageTextarea"></textarea>
                                </div>
                                <div class="agreement-wrapper">
                                    <div class="agreement">
                                        <input type="radio"  name="service" class="" value="">
                                        <label for="" id="" class="">
                                            <p>
                                                I agree to the <a href="#">privacy policy</a> and 
                                                <a href="#">terms of use.</a>
                                             <span class="">*</span>
                                         </p>
                                        </label>
                                    </div>
                                    <div class="formSubmitButtonErrorsWrap submit">
                                        <input type="submit" class="submit-btn buttonWrap button button-dark" id="contactSubmitButton" value="Submit" data-formId="contactForm"/>
                                    </div>
                                </div>
                            </fieldset>
                        </form>       
                    </div>
                </div>
            </div>
            
        </div>
        <?php include_once 'includes/footer.php';?>