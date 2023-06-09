<?php
/**
 * Template Name: Pricing Table
 

 */

 get_header();  ?>

<!-- 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">


    <title>Pricing Plan With Size - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    body {
        margin-top: 20px;
    } -->

<style>
.pricing-content {}

.single-pricing {
    background: #fff;
    padding: 40px 20px;
    border-radius: 5px;
    position: relative;
    z-index: 2;
    border: 1px solid #eee;
    box-shadow: 0 10px 40px -10px rgba(0, 64, 128, .09);
    transition: 0.3s;
}

@media only screen and (max-width:480px) {
    .single-pricing {
        margin-bottom: 30px;
    }
}

.single-pricing:hover {
    box-shadow: 0px 60px 60px rgba(0, 0, 0, 0.1);
    z-index: 100;
    transform: translate(0, -10px);
}

.price-label {
    color: #fff;
    background: #d52349;
    font-size: 16px;
    width: 100px;
    margin-bottom: 15px;
    display: block;
    -webkit-clip-path: polygon(100% 0%, 90% 50%, 100% 100%, 0% 100%, 0 50%, 0% 0%);
    clip-path: polygon(100% 0%, 90% 50%, 100% 100%, 0% 100%, 0 50%, 0% 0%);
    margin-left: -20px;
    position: absolute;
}

.price-head h2 {
    font-weight: 600;
    margin-bottom: 0px;
    text-transform: capitalize;
    font-size: 26px;
}

.price-head span {
    display: inline-block;
    background: #d52349;
    width: 6px;
    height: 6px;
    border-radius: 30px;
    margin-bottom: 20px;
    margin-top: 15px;
}

.price {
    font-weight: 500;
    font-size: 50px;
    margin-bottom: 0px;
}

.single-pricing {}

.single-pricing h5 {
    font-size: 14px;
    margin-bottom: 0px;
    text-transform: uppercase;
}

.single-pricing ul {
    list-style: none;
    margin-bottom: 20px;
    margin-top: 30px;
}

.single-pricing ul li {
    line-height: 35px;
}

.single-pricing a {
    background: none;
    border: 2px solid #d52349;
    border-radius: 5000px;
    color: #d52349;
    display: inline-block;
    font-size: 16px;
    overflow: hidden;
    padding: 10px 45px;
    text-transform: capitalize;
    transition: all 0.3s ease 0s;
}

.single-pricing a:hover,
.single-pricing a:focus {
    background: #d52349;
    color: #fff;
    border: 2px solid #d52349;
}

.single-pricing-white {
    background: #373737
        /* background: #232434 */
}

.single-pricing-white ul li {
    color: #fff;
}

.single-pricing-white h2 {
    color: #fff;
}

.single-pricing-white h1 {
    color: #fff;
}

.single-pricing-white h5 {
    color: #fff;
}

#pricing {
    background-color: white;

}

.container {
    padding-top: 100px;
    padding-bottom: 100px;
}
</style>
<!-- </head>

<body> -->
<section id="pricing" class="pricing-content section-padding">
    <div class="container">
        <div class="section-title text-center">
            <h1>Membership Plans</h1>
            <p>Lets buy a membership that you will not regret.</p>
        </div>
        <div class="row text-center">
            <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                data-wow-offset="0">
                <div class="single-pricing">
                    <div class="price-head">
                        <h2>Bronze Level</h2>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <h1 class="price">$29</h1>
                    <h5>Monthly</h5>
                    <ul>
                        <li>5 website</li>
                        <li>50GB Disk Space</li>
                        <li>50 Email Accounts</li>
                    </ul>
                    <a href="#">Get start</a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
                data-wow-offset="0">
                <div class="single-pricing">
                    <div class="price-head">
                        <h2>Silver Level</h2>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <h1 class="price">$49</h1>
                    <h5>Monthly</h5>
                    <ul>
                        <li>10 website</li>
                        <li>50GB Disk Space</li>
                        <li>50 Email Accounts</li>
                        <li>50GB Monthly Bandwidth</li>
                        <li>10 Subdomains</li>
                    </ul>
                    <a href="#">Get start</a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s"
                data-wow-offset="0">
                <div class="single-pricing single-pricing-white">
                    <div class="price-head">
                        <h2>Gold Level</h2>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <span class="price-label">Best</span>
                    <h1 class="price">$69</h1>
                    <h5>Monthly</h5>
                    <ul>
                        <li>15 website</li>
                        <li>50GB Disk Space</li>
                        <li>50 Email Accounts</li>
                        <li>50GB Monthly Bandwidth</li>
                        <li>10 Subdomains</li>
                        <li>15 Domains</li>
                        <li>Unlimited Support</li>
                    </ul>
                    <a href="#">Get start</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">

    </script>
</body>

</html> -->



<?php
 get_footer();