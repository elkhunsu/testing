<nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand">Register Form</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="top-navbar-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <span class="li-text">
                        Register
                    </span>
                    <a href="#"><strong>links</strong></a>
                    <span class="li-text">
                        Social Media:
                    </span>
                    <span class="li-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-envelope"></i></a>
                        <a href="#"><i class="fa fa-skype"></i></a>
                    </span>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Top content -->
<div class="top-content">

    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 form-box">

                <form role="form" action="" method="POST" class="registration-form">

                    <fieldset>
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3>Step 1 / 2</h3>
                                <p>Registrasi :</p>
                            </div>
                            <div class="form-top-right">
                                <i class="fa fa-user"></i>
                            </div>
                        </div>
                        <div class="form-bottom">
                            <div class="form-group">
                                <label class="sr-only" for="merchant-name">First Name</label>
                                <input type="text" name="merchant-name" placeholder="First name..." class="form-control" id="first-name" required>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-domain">Last Name</label>
                                <input type="text" name="url" placeholder="Last Name..." class="form-control" id="last-name" required></input>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-domain">Email</label>
                                <input type="email" name="url" placeholder="Email..." class="form-control" id="email" required></input>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-domain">Password</label>
                                <input type="password" name="url" placeholder="Password..." class="form-control" id="password" required></input>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="form-domain">Term and Condition</label>
                            </div>
                
                            <button type="button" class="btn btn-next">Next</button>
                        </div>
                    </fieldset>

                    <fieldset>
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3>Step 2 / 2</h3>
                                <p>Isi Data Diri Anda :</p>
                            </div>
                            <div class="form-top-right">
                                <i class="fa fa-key"></i>
                            </div>
                        </div>
                        <div class="form-bottom">
                            <div class="form-group">
                                <label for="">Alamat ( Sesuai KTP )</label>
                                <input name="nama" type="text" class="form-control" id="nama" placeholder="Alamat Sesuai KTP">
                            </div>
                            <div class="form-group">
                                <label for="">Date Of Birth</label>
                                <input name="dob" type="text" class="form-control" id="dob" placeholder="date of birth" required>
                            </div>
                            <div class="form-group">
                                <label for="">Membership Type</label>
                                <select name="membership" class="form-control" id="membership" placeholder="Membership" required>
                                    <option value="silver">Silver</option>
                                    <option value="gold">Gold</option>
                                    <option value="platinum">Platinum</option>
                                    <option value="black">Black</option>
                                    <option value="vip">VIP</option>
                                    <option value="vvip">VVIP</option>
                                </select>
                            </div>
                            <div

                            <div class="form-group">
                                <label for="">Credit Card Number</label>
                                <input name="cc" type="text" class="form-control" id="cc" placeholder="credit card" required>
                                <label for="">Type</label>
                                <input name="type" type="text" class="form-control" id="type" placeholder="type" required>
                                <label for="">Exp</label>
                                <input name="exp" type="text" class="form-control" id="exp" placeholder="exp" required>
                                <label for="">Date</label>
                                <input name="date" type="text" class="form-control" id="date" placeholder="date" required>
                            </div>
                            
                            <button type="button" class="btn btn-previous">Previous</button>
                            <button type="button" class="btn btn-next">Next</button>
                        </div>
                    </fieldset>
                        <div class="loader text-center"></div>
                </form>

            </div>
        </div>
    </div>

</div>
<?php $this->registerJsFile( 'js/scripts.js' );
?>