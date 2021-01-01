@include('header')

<main>
    <section class="container stylization maincont">


        <ul class="b-crumbs">
            <li>
                <a href="index.html">
                    Home
                </a>
            </li>
            <li>
                <span>Registration / Login</span>
            </li>
        </ul>
        <h1 class="main-ttl"><span>Registration / Login</span></h1>
        <div class="auth-wrap">
            <div class="auth-col">
                <h2>Login</h2>
                <form method="post" action="login" class="login">
                    {{csrf_field()}}
                    <p>
                        <label for="username">E-mail <span class="required">*</span></label><input type="text" name="email" id="username">
                    </p>
                    <p>
                        <label for="password">Password <span class="required">*</span></label><input type="password"  name="password" id="password">
                    </p>
                    <p class="auth-submit">
                        <input type="submit" value="Login">
                        <input type="checkbox" id="rememberme" value="forever">
                        <label for="rememberme">Remember me</label>
                    </p>
                    <p class="auth-lost_password">
                        <a href="#">Lost your password?</a>
                    </p>
                </form>
            </div>
            <div class="auth-col">
                <h2>Register</h2>
                <form method="post" action="register" class="register">
                     {{csrf_field()}}
                    <p>
                        <label for="reg_email">Name <span class="required">*</span></label><input type="text"  name="name" id="reg_email">
                    </p>
                    <p>
                        <label for="reg_email">Username <span class="required">*</span></label><input type="text"  name="username" id="reg_email">
                    </p>
                    <p>
                        <label for="reg_email">Email <span class="required">*</span></label><input type="email"  name="email" id="reg_email">
                    </p>
                    <p>
                        <label for="reg_password">Password <span class="required">*</span></label><input type="password" name="password" id="reg_password">
                    </p>
                    <p class="auth-submit">
                        <input type="submit" value="Register">
                    </p>
                </form>
            </div>
        </div>



    </section>
</main>



@include('footer')
