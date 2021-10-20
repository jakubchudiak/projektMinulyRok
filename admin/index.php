<?php 
	include 'hlavickaAdmin.php';
	include 'navbarAdmin.php';
	include 'pataAdmin.php';

?>
    

<div class="cotainer text-center">
        <div class="form-group was-validated">
            <div class="col-md-8 ">
                <div class="card">
                    <div class="form-text text-muted" ><b>Prihlásenie</b></div>
                    <div class="card-body">
                        <form action="" method="">
                            <div class="form-group row">
                                <small id="emailHelp" class="form-text text-muted mb-2"><b>Meno</b></small>
                                <div class="col-lg-12">
                                    <input type="text" id="email_address" class="form-control" name="email-address" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                 <small id="emailHelp" class="form-text text-muted mb-2"><b>Heslo</b></small>
                                <div class="col-lg-12">
                                    <input type="password" id="password" class="form-control" name="password" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 ">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Pamätať prihlásenie
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center"> 
                                <button type="submit" class="btn btn-light">
                                    Prihlásiť sa
                                </button>
                                <br>
                                <a href="#" class="page-link border-0">
                                    Zaregistruj sa hned
                                </a>
                                <a href="#" class="page-link border-0">
                                    Zabudol som heslo
                                </a>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>