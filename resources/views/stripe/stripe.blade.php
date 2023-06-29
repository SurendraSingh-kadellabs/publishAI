<div id="addCreditModal" class="modal fade">

            <div class="modal-dialog modal-lg">

                <div class="modal-content" style="border-radius: 0% !important;">

                    <div class="modal-header">

                        <h4 class="modal-title" style="font-weight:800;">Add Credit</h4>

                        <button type="button" class="close" id="closeButton" data-dismiss="modal">&times;</button>

                    </div>

                    <div class="modal-body">

                        <form role="form" action="{{ route('stripe.post') }}" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">

                            @csrf

                            <div class="form-group row">

                                <div class='col-xs-12 col-md-6 form-group required'>

                                    <label for="addCredits">Enter Amount</label>

                                    <input type="number" class="form-control" name="addCredits" id="addCredits" placeholder="Enter Amount" required>

                                </div>

                            </div>

                            <input type="hidden" name="creditAmount" id="creditAmount">

                            <div class="form-row row">

                                <div class="col-xs-12 mt-2">

                                    <button class="btn btn-primary btn-lg btn-block addPaymentDetails">Next</button>

                                </div>

                            </div>

                            <div class='form-row row paymentDiv d-none'>

                                <div class='col-xs-12 col-md-6 form-group required'>

                                    <label class='control-label'>Name on Card</label>

                                    <input class='form-control' size='4' type='text'>

                                </div>

                                <div class='col-xs-12 col-md-6 form-group required'>

                                    <label class='control-label'>Card Number</label>

                                    <input autocomplete='off' class='form-control card-number' size='20' type='text'>

                                </div>

                            </div>

                            <div class='form-row row paymentDiv d-none'>

                                <div class='col-xs-12 col-md-4 form-group cvc required'>

                                    <label class='control-label'>CVC</label>

                                    <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>

                                </div>

                                <div class='col-xs-12 col-md-4 form-group expiration required'>

                                    <label class='control-label'>Expiration Month</label>

                                    <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>

                                </div>

                                <div class='col-xs-12 col-md-4 form-group expiration required'>

                                    <label class='control-label'>Expiration Year</label>

                                    <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>

                                </div>

                            </div>

                            <div class="form-row row paymentDiv d-none">

                                <div class="col-xs-12 mt-2">

                                    <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now</button>

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>