
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--==== CSS =====-->

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('tool/css/bootstrap.min.css'); ?>">
    <!-- Font-awesome css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('tool/css/all.css'); ?>">
    <!-- Owl-carousel css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('tool/css/owl.carousel.min.css'); ?>">
    <!-- My css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('tool/css/style.css'); ?>">
    
    <!-- jQuery min js -->
    <script type="text/javascript" src="<?= base_url('tool/js/jquery-3.2.1.slim.min.js'); ?>"></script>

    <title>Bookshop | E-learning</title>
    <link rel="shortcut icon" type="image/png" href="<?= base_url('tool/img/favicon.png'); ?>">
</head>

<body>
    <!--========== Header Area ===========-->
    <div class="header-area">
        <div class="hearder-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="welcome-tx">Welcome to Online Book Shop !</div>
                    </div>
                    <div class="col-md-6">
                        <div class="social-icon">
                            <span>Follow : </span>
                            <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" title="Github"><i class="fab fa-github"></i></a>
                            <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <div class="header-mid">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="logo">
                            <div class="lname"><a href=""><span><img src="<?= base_url('tool/img/favicon.png')?>"> Bookshop</span> & E-learning</a></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-8">
                                <a href="<?= base_url()?>users/login" class="btn-login"><i class="fas fa-sign-in-alt"></i> Login</a>
                                <a href="<?= base_url()?>users/registration" class="btn-login"><i class="fas fa-user-cog"></i> Register</a>
                            </div>
                            <div class="col-md-4">
                                <div class="ic-cart"><a href="<?= base_url()?>cart"><i class="fas fa-shopping-cart"></i> Cart</a></div>
                                <!--=== cart item count ===-->
                                <?php if($this->cart->contents()): ?>
                                <div class="cart-count">
                                    <div><?php $rows = count($this->cart->contents());
                                    print $rows; ?></div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--========== Menu Area =========-->
        <div>
            <?php $this->load->view('temp/menu'); ?>
        </div>
    </div>
    <div class="text-success">
        <?php 
            if($this->session->flashdata('login_success'))
            {
                print '<div class= "success-msg">';
                print '<div class = "container">'.$this->session->flashdata('login_success').'</div>';
                print '</div>';
            }
        ?>
    </div>

    <!--============ Slider Area ===========-->
    <div>
        <?php $this->load->view('temp/slider'); ?>
    </div>
    <!--==== Recent Books ====-->
    <div class="section-padding after-slider">
        <div class="container">
            <div class="section-title"><a href="<?= base_url()?>users/all_books">recent Books</a></div>
            <div><?php $this->load->view('temp/recent_books') ?></div> 
        </div>   
    </div>
    <!--==== CSE Books ====-->
    <div class="section-padding">
        <div class="container">
            <div class="section-title"><a href="<?= base_url()?>users/all_books/?ctg=1">Computer science and engineering Books</a></div>
            <div><?php $this->load->view('temp/cse_books') ?></div> 
        </div>   
    </div>

    <!--============ Footer Area ============-->
    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="widget">
                        <div class="brand-name">
                            <div class="lname"><a href=""><span>Bookshop</span> & E-learning</a></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias quia libero porro corporis maiores ut adipisci nulla veritatis ex magni.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget">
                        <h3>Customer Services</h3>

                        <ul>
                            <li><a href="">About us</a></li>
                            <li><a href="">Shiping & return</a></li>
                            <li><a href="">Shiping guide</a></li>
                            <li><a href="">FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget">
                        <h3>Stay connected</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos vitae, eaque cumque. Nulla, reprehenderit animi.</p>
                        <div id="social-icon">
                            <span><a href="" title="Facebook"><i class="fab fa-facebook-f"></i></a></span>
                            <span><a href="" title="Github"><i class="fab fa-github"></i></a></span>
                            <span><a href="" title="Instagram"><i class="fab fa-instagram"></i></a></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy-right">
                <p><i class="fas fa-copyright"></i> Tahmid Nishat | 2019 <br>All right reserved</p>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="<?= base_url('tool/js/popper-1.12.9.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('tool/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('tool/js/all.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('tool/js/owl.carousel.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('tool/js/main.js'); ?>"></script>

</body>

</html>
