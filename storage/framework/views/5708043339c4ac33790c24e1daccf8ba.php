<footer id="footer" class="footer bg-black-222" data-bg-img="images/footer-bg.png">
    <div class="container pt-70 pb-40">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="widget dark">
                    <h2 class="bold-text-white text-white "> COMPACT FOUNDATION</h2>

                    <p class="font-16 mb-10">Compact Foundation is a Training based non-Govt., non-profit, voluntary and social welfare organization working in Chuadanga district. It was established in 2007 with active initiative of some social workers at promoting the life status of poor and disadvantaged people especially women,</p>
                    <a class="font-14" href="<?php echo e(route('AboutUs')); ?>"><i class="fa fa-angle-double-right text-theme-colored"></i> Read more</a>
                    <ul class="styled-icons icon-dark mt-20">
                        <li class="wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".1s" data-wow-offset="10"><a href="https://www.facebook.com/compactfoundation?mibextid=ZbWKwL" data-bg-color="#3B5998"><i class="fa fa-facebook"></i></a></li>




                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">

































            </div>
            <div class="col-sm-6 col-md-3">
                <div class="widget dark">
                    <h5 class="widget-title line-bottom">Useful Links</h5>
                    <ul class="list angle-double-right list-border">
                        <li><a href="<?php echo e(route('Training')); ?>">Training</a></li>
                        <li><a href="<?php echo e(route('Assessment')); ?>">Assessment</a></li>
                        <li><a href="<?php echo e(route('Certification')); ?>">Certification</a></li>
                        <li><a href="<?php echo e(route('summary')); ?>">Batch Wise Job Placement Summary</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="widget dark">
                    <h5 class="widget-title line-bottom">Quick Contact</h5>
                    <ul class="list-border">
                        <li><a href="#">Cell: +88 01712759790</a></li>
                        <li><a href="#">compact.foundation@gmail.com</a></li>
                        <li><a href="">Web: compactfoundation.org</a></li>
                        <li><a href="#" class="lineheight-20">Compact Foundation(CF)
                                Sarojgonj, Chuadanga-7200, Bangladesh.</a></li>
                    </ul>
                    <p class="font-16 text-white mb-5 mt-15">Subscribe to our newsletter</p>
                    <form id="footer-mailchimp-subscription-form" class="newsletter-form mt-10">
                        <label class="display-block" for="mce-EMAIL"></label>
                        <div class="input-group">
                            <input type="email" value="" name="EMAIL" placeholder="Your Email"  class="form-control" data-height="37px" id="mce-EMAIL">
                            <span class="input-group-btn">
                    <button type="submit" class="btn btn-colored btn-theme-colored m-0"><i class="fa fa-paper-plane-o text-white"></i></button>
                </span>
                        </div>
                    </form>

                    <!-- Mailchimp Subscription Form Validation-->
                    <script type="text/javascript">
                        $('#footer-mailchimp-subscription-form').ajaxChimp({
                            callback: mailChimpCallBack,
                            url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
                        });

                        function mailChimpCallBack(resp) {
                            // Hide any previous response text
                            var $mailchimpform = $('#footer-mailchimp-subscription-form'),
                                $response = '';
                            $mailchimpform.children(".alert").remove();
                            if (resp.result === 'success') {
                                $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                            } else if (resp.result === 'error') {
                                $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                            }
                            $mailchimpform.prepend($response);
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom bg-black-333">
        <div class="container pt-20 pb-20">
            <div class="row">
                <div class="col-md-6">
                    <p class="font-11 text-black-777 m-0">Copyright &copy;2023 Compact foundation. All Rights Reserved</p>
                </div>
                <div class="col-md-6 text-right">
                    <div class="widget no-border m-0">
                        <ul class="list-inline sm-text-center mt-5 font-12">
                            <li>
                                <a href="#">FAQ</a>
                            </li>
                            <li>|</li>
                            <li>
                                <a href="#">Help Desk</a>
                            </li>
                            <li>|</li>
                            <li>
                                <a href="#">Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php /**PATH D:\php\Banglasoft\basic\htdocs\clients_side\resources\views/front/includes/footer.blade.php ENDPATH**/ ?>