<div class="conform">
    <div class="formbg">
        <!-- <div class="form__group fields">
            <input type="input" class="form__field" placeholder="Name" name="name" id='name' required />
            <label for="name" class="form__label">Name</label>
        </div> -->
        <form action="">
            <div class="field">
                <label for=""  class="f-label">YOUR NAME</label>
                <input type="text"  class="f-input" name="name" id="fname" placeholder="YOUR NAME" require>
            </div>
            <div class="field">
                <label for=""  class="f-label">EMAIL</label>
                <input type="email" class="f-input" name="email" id="femail" placeholder="EMAIL" require>
            </div>
            <div class="field">
                <label for=""  class="f-label">MOBILE NO.</label>
                <input type="tel" class="f-input" name="mobile" id="fmobile" placeholder="MOBILE NO." require>
            </div>
            <div class="field">
                <label for=""  class="f-label">MASSAGE</label>
                <input type="text" class="f-input" name="massage" id="fmassage" placeholder="MASSAGE" require>
            </div>
            <!-- <input type="button" value=""> -->
            <div class="field " id="w100">
                <button id="formsub" class="formsub" onclick="FormEmaill(); return false">click hear</button>
            </div>
        </form>
    </div>
    
</div>

<script src="https://smtpjs.com/v3/smtp.js"></script>
<script>
    function FormEmaill(){
        console.log("ok form");
    Email.send({
    Host : "smtp.elasticemail.com",
    Username : "karmsl0001@gmail.com",
    Password : "4045B3E426D3AD364F7F8099AF2624771920",
    To : 'karmsarwara@gmail.com',
    From : "karmsl0001@gmail.com",
    Subject : "This is the subject",
    Body : "And this is the body"
}).then(
  message => alert(message)
);
}

</script>