<!--contact section-->
<section class="contact" id="contact">
    <h2 class="heading">Contact <span>Me</span><span class="animate scroll" style="--i:1;"></span></h2>

    <form action="" method="POST">
        <div class="input-box">
            <div class="input-field">
                <input type="text" name="fullname" placeholder="Full Name" required>
                <span class="focus"></span>
            </div>
            <div class="input-field">
                <input type="email" name="email" placeholder="Email Address" required>
                <span class="focus"></span>
            </div>

            <span class="animate scroll" style="--i:3;"></span>
        </div>

        <div class="input-box">
            <div class="input-field">
                <input type="number" name="tel" placeholder="Mobile Number" required>
                <span class="focus"></span>
            </div>
            <div class="input-field">
                <input type="text" name="subject" placeholder="Email Subject" required>
                <span class="focus"></span>
            </div>

            <span class="animate scroll" style="--i:5;"></span>
        </div>

        <div class="textarea-field">
            <textarea name="message" id="" cols="30" rows="10" placeholder="Your Message" required></textarea>
            <span class="focus"></span>

            <span class="animate scroll" style="--i:7;"></span>
        </div>

        <div class="btn-box btns">
            <button type="submit" class="btn">Submit<i class='bx bx-paper-plane'></i></button>

            <span class="animate scroll" style="--i:9;"></span>
        </div>
    </form>

    <?php 

    if (isset($_POST["message"])) {
        $message = "Ce message vous a été envoyé via la page du site du Portfolio de Hugo FERREIRA
        Name : " . $_POST["fullname"] . "
        Email : " . $_POST["email"] . "
        Message : " . $_POST["message"];

        $return = mail("ferreira.hugo602@gmail.com", $_POST["subject"], 
        $message, "Reply-to:" . $_POST["email"]);
        if ($return) {
            echo "<p>The message has been sent !</p>";
        }
    }

    ?>
</section>