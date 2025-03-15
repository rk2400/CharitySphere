<?php
include 'header.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $url = 'https://script.google.com/macros/s/AKfycbzMY-2BVBbLqSkFjgZPMTfCo-wj35Dcj2RvzNfFDDVN3ZdT1Y_dMpuD3deJ5NC3T4Q/exec';
    $data = [
        'field1' => $_POST['name'],
        'field2' => $_POST['mobile'],
        'field3' => $_POST['email'],
        'field4' => $_POST['subject'],
        'field5' => $_POST['message'],
    ];
    // $options = [
    //     'http' => [
    //         'header' => "Content-type: application/x-www-form-urlencoded\r\n",
    //         'method' => 'POST',
    //         'content' => http_build_query($data),
    //     ],
    // ];
    // $context = stream_context_create($options);
    // $result = file_get_contents($url, false, $context);
    // if ($result === FALSE) {
    //     // Handle error
    // }
    // echo $result;

    
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

    // Execute the request and fetch the response. Check for errors
    $response = curl_exec($ch);
    if ($response === false) {
        $response = curl_error($ch);
    }else{
    echo "<br> <br> <br><br> <br> We have received your message. Thank you for Contacting Us. We will get back to you soon.";
    }
    // curl_close($ch);
    // echo $response;

}
?>

<main role="main">

    <!-- Start contact-page Area -->
    <section class="contact-page-area section-gap">
        <div class="container" style="margin-top:150px; margin-bottom:50px">
            <div class="row">
                <!-- <div class="map-wrap" style="width:100%; height: 445px;" id="map"></div> -->
                <div class="col-lg-4  flex-column address-wrap">
                    <div class="single-contact-address d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-home"></span>
                        </div>
                        <div class="contact-details">
                            <!-- <h5>Ft No. 25/24 </h5> -->
                            <p>
                                CharitySphere Headquarter,
                                Delhi
                            </p>
                        </div>
                    </div>
                    <div class="single-contact-address d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-phone-handset"></span>
                        </div>
                        <div class="contact-details">
                            <h5>+91 89910199221</h5>
                        </div>
                    </div>
                    <div class="single-contact-address d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-envelope"></span>
                        </div>
                        <div class="contact-details">
                            <p><strong>reach@csphere.in</strong></p>
                            <p>Send us your feedbacks/queries </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <form class="form-area contact-form text-right" id="myForm"
                        action="" method="post">
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <input name="name" placeholder="Enter Your Name" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Enter Your Name'"
                                    class="common-input mb-20 form-control" required="" type="text">
                                <input name="mobile" placeholder="Enter your Number" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Enter Your Number'"
                                    class="common-input mb-20 form-control" required="" type="text">
                                <input name="email" placeholder="Enter Email Address"
                                    pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email Address'"
                                    class="common-input mb-20 form-control" required="" type="email">

                                <input name="subject" placeholder="Enter the Subject" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Enter the Subject'" class="common-input mb-20 form-control"
                                    required="" type="text">
                            </div>
                            <div class="col-lg-6 form-group">
                                <textarea class="common-textarea form-control" rows="19" name="message"
                                    placeholder="Enter Your Message" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Enter Your Message'" required=""></textarea>
                            </div>
                            <div class="col-lg-12">
                                <div class="alert-msg" style="text-align: left;"></div>
                                <button class="genric-btn primary btn" style="float: right;">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End contact-page Area -->







    <!-- FOOTER , min show undali -->
    <?php include('footer.php') ?>
</main>
<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
<script type='text/javascript' src='js/swiper.min.js'></script>
<script type='text/javascript' src='js/jquery.countdown.min.js'></script>
<script type='text/javascript' src='js/circle-progress.min.js'></script>
<script type='text/javascript' src='js/jquery.countTo.min.js'></script>
<script type='text/javascript' src='js/jquery.barfiller.js'></script>
<script type='text/javascript' src='js/custom.js'></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</script>

</html>