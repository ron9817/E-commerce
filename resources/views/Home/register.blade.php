<div class="d-flex justify-content-center mt-5">
    <div class="row m-0" style="width: 65rem; height:32rem;">
        <div class="col-4 p-5 left_hand_side">
            <div class="header">Signup</div>
            <div class="text my-3">We do not share your personal details with anyone.</div>
            <div class="image m-auto"></div>
        </div>
        <div class="col-7 p-5 right_hand_side bg-white">
            <form id="register-form">
                <div class="form-group collapsed-view">
                    <label for="email-number">Enter Email/Mobile Number</label>
                    <input type="text" name="email_number" class="form-control" id="email-number">
                </div>
                <div class="form-group  collapsed-view">
                    <label for="password">Enter Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>
                <div class="form-group">
                    <button class="btn text-center p-2 login-button" type="button" id="register-form-button">Register</button>
                    <p class="m-1 text-center" id="error"></p>
                </div>
                <div class="form-group pointer" id="redirect-login-button">
                    <button type="button" class="btn text-center p-2 otp-button">Existing User? Login</button>
                </div>
            </form>
        </div>
        <div class="col-1"  data-dismiss="modal">
            <div class="modal-close">X</div>
        </div>
    </div>
</div>