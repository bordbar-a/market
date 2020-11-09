<div id="shopLoadModal" class="modal fade" data-autoload="true" data-autoload-delay="2000">
    <div class="modal-dialog modal-full">
        <div class="modal-content" style="background-image:url('/front/images/misc/shop/shop_modal.jpg');">

            <!-- header modal -->
            <div class="modal-header noborder">
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>

            <!-- body modal -->
            <div class="modal-body">

                <div class="block-content">

                    <img src="/front/images/logo-footer-dark.png" alt=""/>
                    <p class="size-13 margin-bottom-20 margin-top-30">Subscribe to the Smarty newsletter to get all
                        new products and all new discounts.</p>

                    <!-- newsletter -->
                    <div class="inline-search clearfix margin-bottom-20">
                        <form action="php/newsletter.php" method="post" class="validate nomargin"
                              data-success="Subscribed! Thank you!" data-toastr-position="bottom-right"
                              novalidate="novalidate">

                            <input type="search" placeholder="Email Address" id="shop_email" name="shop_email"
                                   class="serch-input required">
                            <button type="submit">
                                <i class="fa fa-check"></i>
                            </button>
                        </form>
                    </div>
                    <!-- /newsletter -->

                    <!-- Don't show this popup again -->
                    <div class="size-11 text-left">
                        <label class="checkbox pull-right"> </label>
                        <input class="loadModalHide" type="checkbox"/>
                        <i></i> <span class="weight-300">Don't show this popup again</span>


                    </div>
                    <!-- /Don't show this popup again -->

                </div>

            </div>

        </div>
    </div>
</div>
