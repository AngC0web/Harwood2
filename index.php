<?php
include ('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harwood Place</title>

    <link rel="stylesheet" href="<?= SITE_URL . '/assets/css/vendors.css'; ?>">
    <link rel="stylesheet" href="<?= SITE_URL . '/assets/css/styles.css'; ?>">
</head>
<body>
    <header>
<div class="container-fluid bg-primary position-relative">
    <div class="row justify-content-center justify-content-lg-start">
        <div class="col-12 col-lg-6 bg-center bg-primary" bg-src="<?= SITE_URL ?> . /assets/images/modern-living-historic-charm.webp" style="background-image:url('<?= SITE_URL ?> . /assets/images/modern-living-historic-charm.webp')"> 
            <div class="d-none d-lg-block dvh-100"></div>
            <div class="d-block d-lg-none ratio ratio-1x1"></div>
                </div>

                <div class="col-10 col-lg-4 offset-lg-1 dvh-lg-100 d-lg-flex align-items-lg-end py-5 py-lg-0">
						<div class="w-100 pt-5 pt-lg-0">
							<h1 class="fs-3 text-light text-uppercase ff-secondary fw-normal pb-4">Phase 1 - Coming Soon</h1>
							<p class="text-light">For access to browse models, site plan, features, finishes, and more - Please register below.</p>
							<h2 class="fs-3 text-light ff-secondary fw-normal pt-5 pt-lg-4 pt-xl-5 pb-4">Find Your <span class="d-lg-block">Place in Cobourg</span></h2>
							<p class="text-light">Harwood Place is a new community by Highmark Homes, in partnership with Castlegrove developments, located at Elgin St W &amp; Wilkins Gate in the charming town of Cobourg.</p>
							<p class="text-light">With 64 townhomes and 8 semi-detached homes nestled around a semi-private enclave, Harwood Place offers a unique blend of modern living in a town known for its rich history and beautiful waterfront.</p>
							<div class="pt-4 pb-lg-5">
								<a href="<?= SITE_URL ?> . #register" class="fs-6 text-uppercase text-light text-decoration-none ls-086 smoothScroll">Register Now <span class="ms-4 arrow"></span></a>
							</div>
						</div>
					</div>
    </div>
    
    <div class="position-absolute top-0 start-0 end-0">
        <div class="container-fluid">
           <div class="row justify-content-center">
            <div class="col-10 col-lg-6 pt-4">
                <img src="<?= SITE_URL ?> . /assets/images/Harwood-Place.webp" image-src="<?= SITE_URL ?> . /assets/images/Harwood-Place.webp" alt="Harwood Place" class="w-100 h-auto img-white" width="2000" height="142" />
            </div>
           </div> 
        </div>
    </div>
</div>
    </header>

    <main class="py-5">
       <section class="container pb-5"> 
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="ratio ratio-16x9 bg-primary">
                    ::before
                     <iframe width="560" height="315" src="https://www.youtube.com/embed/2hqDV4xuLKs?si=vMsgGFqtXD5zPvVW" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen=""></iframe> </div>
            </div>
        </div>
       </section>
<section class="w-100 pt-5 position-relative" id="register">
    <div class="container">
<div class="row justify-content-center justify-content-lg-start">
    <div class="col-10 col-lg-6">
        <form class="ajax" action="" method="post">
            <div class="pb-5"><h2 class="fs-3 ff-secondary fw-normal text-uppercase m-0">Register</h2></div>
            <div class=""><div class="error-code"></div></div>
        <div class="w-100 pb-4">
            <label for="first_name" class="d-none">First Name</label>
    <input type="text" name="first_name" id="first_name" class="form-control fs-5 text-capitalize placeholder-capitalize bg-transparent rounded-0 border-top-0 border-start-0 border-end-0 border-secondary px-0 ls-055" placeholder="First Name" required="required">
    </div>
    <div class="w-100 pb-4">
            <label for="last_name" class="d-none">Last Name</label>
    <input type="text" name="last_name" id="last_name" class="form-control fs-5 text-capitalize placeholder-capitalize bg-transparent rounded-0 border-top-0 border-start-0 border-end-0 border-secondary px-0 ls-055" placeholder="Last Name" required="required">
    </div>
    <div class="w-100 pb-4">
            <label for="email" class="d-none">Email Address</label>
    <input type="email" name="email" id="email" class="form-control fs-5 text-capitalize placeholder-capitalize bg-transparent rounded-0 border-top-0 border-start-0 border-end-0 border-secondary px-0 ls-055" placeholder="Email Address" required="required">
    </div>

    <div class="w-100 pb-4">
            <label for="phone" class="d-none">Phone Number</label>
    <input type="text" name="phone" id="phone" class="form-control fs-5 text-capitalize placeholder-capitalize bg-transparent rounded-0 border-top-0 border-start-0 border-end-0 border-secondary px-0 ls-055" placeholder="Phone Number" required="required">
    </div>
    <div class="w-100 pb-4">
            <label for="postal" class="d-none">Postal Code</label>
    <input type="text" name="postal" id="postal" class="form-control fs-5 text-capitalize placeholder-capitalize bg-transparent rounded-0 border-top-0 border-start-0 border-end-0 border-secondary px-0 ls-055" placeholder="Postal Code" required="required">
    </div>

    <div class="w-100 pb-4">
            <label for="heard_from" class="d-none">How Did You Hear About Us?</label>
   <select class="form-control fs-5 bg-transparent rounded-0 border-top-0 border-start-0 border-end-0 border-secondary px-0 ls-055" name="heard_from" id="heard_from" required="required">
    <option value>How Did You Hear About Us?</option>
    <option value="Internet Search">Internet Search</option>
    <option value="Social Media">Social Media</option>
    <option value="Signage/Billboard">Signage/Billboard</option>
    <option value="Friends/Family">Friends/Family</option>
    <option value="Realtor">Realtor</option>
    <option value="Other">Other</option>
   </select>
    </div>

    <div class="w-100 pb-4">
        <div class="form-control rounded-0 border-top-0 border-start-0 border-end-0 border-secondary px-0 ls-055">
            <div class="row">
              <div class="col-8">
                <p class="fs-5 m-0">Are you working with a broker?</p>  
            </div>
            <div class="col-2">
                <div class="form-check">
                    <input class="form-check-input rounded-circle border-primary p-0" type="radio" name="with_broker" id="with_broker_yes" value="1" required> <labe class="form-check-label fs-6 text-uppercase" for="with_broker_yes">Yes</label></div></div>
            <div class="col-2"><div class="form-check"><input class="form-check-input rounded-circle border-primary p-0" type="radio" name="with_broker" id="with_broker_no" value="1" required> <labe class="form-check-label fs-6 text-uppercase" for="with_broker_no">No</label></div></div>
        </div>
    </div>
<div class="w-100 pb-4">
    <div class="form-control rounded-0 border-top-0 border-start-0 border-end-0 border-secondary px-0 ls-055">
        <div class="row">
        <div class="col-8">
                <p class="fs-5 m-0">Are you a broker?</p>  
            </div>
            <div class="col-2">
                <div class="form-check">
                    <input class="form-check-input rounded-circle border-primary p-0" type="radio" name="broker" id="broker_yes" value="1" required> <labe class="form-check-label fs-6 text-uppercase" for="broker_yes">Yes</label></div></div>
            <div class="col-2"><div class="form-check"><input class="form-check-input rounded-circle border-primary p-0" type="radio" name="broker" id="broker_no" value="1" required> <labe class="form-check-label fs-6 text-uppercase" for="broker_no">No</label></div></div>
        </div>
    </div>
</div>

<div class="w-100 pb-4 brokerage collapse">
    <label for="brokerage" class="d-none">Brokerage</label>
    <input type="text" name="brokerage" id="brokerage" class="form-control fs-5 text-capitalize placeholder-capitalize bg-transparent rounded-0 border-top-0 border-start-0 border-end-0 border-secondary px-0 ls-055" placeholder="Brokerage Name">
</div>

<div class="w-100 pt-5 pb-3">
    <div class="form-check">
        <input class="form-check-input rounded-circle border-primary p-0" type="checkbox" name="sms" id="sms" value="1">
        <label class="form-check-label fs-6 ps-3"for="sms">I would like to receive SMS text updates from Highmark Homes.</label>
    </div>
</div>
<div class="w-100 pb-3"><div class="form-check"> 

<input class="form-check-input rounded-circle border-primary p-0" type="checkbox" name="casl" id="casl" value="1" required>
        <label class="form-check-label fs-6 ps-3"for="casl">In accordance with Canadian Anti-Spam Legislation, I have read Highmark Homes’ <a href="" class="text-body">Privacy Policy</a>  and give my consent to receive electronic communications from Highmark Homes’ regarding; communities of potential interest, news, events, promotions and other related subjects.</label>
    </div>
</div> 
</div>
<div class="w-100 py-5">
    <input type="hidden" name="token" id="token" />
    <button type="submit" class="btn btn-secondary text-uppercase px-5 py-3">Register</button>
</div>
        </form>
    </div>
</div>

        <div class="position-absolute top-0 start-0 end-0 d-none d-lg-block text-end pt-5 z-index-n">
<img src="<?= SITE_URL ?> . /assets/images/monogram.webp" class="img-fluid h-auto" alt="monogram" width="532" height="693"/>

        </div>
    </div>

</section>

    </main>

    <footer class="w-100 bg-primary py-5">
        <div class="container py-5">
            <div class="row justify-content-center align-items-lg-end">
                <div class="col-5 col-lg-4 pe-lg-4 border-end border-dark d-flex d-lg-block align-items-center align-items-lg-start">
                    <a href="" target="_blank" rel="noopener nofollow" class="text-decoration-none"><img src="<?= SITE_URL ?> . /assets/images/Highmark-Homes.webp" image-src="<?= SITE_URL ?> . /assets/images/Highmark-Homes" class="img-fluid h-auto" alt="Highmark Homes" width="300" height="86"></a>
                </div>
                <div class="col-5 col-lg-4 ps-lg-4">
                <div class="d-lg-flex align-items-lg-center text-center text-lg-start">
					<div class="fs-6 pb-2 pb-lg-0">
						In partnership with
					</div>
					<div>
						<img src="<?= SITE_URL ?> . /assets/images/Castlegrove-Developments.webp" image-src="<?= SITE_URL ?> . /assets/images/Castlegrove-Developments.webp" class="img-fluid h-auto" alt="Highmark Homes" width="150" height="116">
					</div>
				</div>
                </div>
                <div class="col-10 col-lg-4 text-center text-lg-end pt-5 pt-lg-0">
				<div class="d-inline-block pe-2">
					<a href="https://www.instagram.com/highmark.homes/" target="_blank" rel="noopener nofollow" class="text-decoration-none">
						<div class="social d-flex align-items-center rounded-circle">
							<img src="<?= SITE_URL ?> . /assets/images/instagram.webp" image-src="<?= SITE_URL ?> . /assets/images/instagram.webp" class="img-fluid h-auto mx-auto" alt="Instagram" width="26" height="26">
						</div>
					</a>
				</div>
				<div class="d-inline-block ps-2">
					<a href="https://www.facebook.com/highmarkhomesON" target="_blank" rel="noopener nofollow" class="text-decoration-none">
						<div class="social d-flex align-items-center rounded-circle">
							<img src="<?= SITE_URL ?> . /assets/images/facebook.webp" image-src="<?= SITE_URL ?> . /assets/images/facebook.webp" class="img-fluid h-auto mx-auto" alt="Facebook" width="30" height="30">
						</div>
					</a>
				</div>
			</div>

            <div class="row pt-lg-5">
			<div class="col-10 col-lg-12 text-center pt-5">
				<p><a href="/" class="text-decoration-none text-body">Privacy Policy</a> / <a href="/terms-and-conditions/" class="text-decoration-none text-body">Terms and Conditions</a> / <a href="/unsubscribe/" class="text-decoration-none text-body">Unsubscribe</a></p>
			</div>
		</div>

            </div>
        </div>
    </footer>

    <script defer src="<?= SITE_URL . '/assets/js/vendors.js'; ?>"></script>
    <script defer src="<?= SITE_URL . '/assets/js/scripts.js'; ?>"></script>



</body>
</html>
