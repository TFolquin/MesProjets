<main>
    <h1>CONTACT US</h1>

    <div class="formContainer">
        <form action="">

            <div class="horizontally">
                <input type="text" name="page" value="contact" hidden>
                <input type="text" name="commit" hidden>
                <label for="">Firstname:
                    <input required="required" type="text" name="firstname">
                </label>

                <label for="">Name:
                    <input required="required" type="text" name="name">
                </label>
            </div>
            <div class="horizontally">
                <label for="">Mail:
                    <input required="required" type="email" name="mail">
                </label>
                <label for="">Phone number:
                    <input pattern="[0-9]{10}" title="Veuillez renseigner ce champ de cette manière: 0123456789" required="required" type="tel" name="phoneNb">
                </label>
            </div>
            <label for="">Your message:
                <textarea required="required" name="message" cols="35" rows="10"></textarea>
            </label>
            
            <button class="submitBtn" action="submit">Submit</button>


        </form>
    </div>
</main>