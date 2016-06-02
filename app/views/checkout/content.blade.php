@section('content')
<section id="checkout-section" style="position: relative; z-index: 0; background: none;" ng-app="myApp">
    
    <div class="life-fei-checkout-overlay"></div>


    <div class="container">
    	<div class="row">
        	<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default panel_style">
					<form class="form-horizontal" role="form" ng-controller="CheckOutCtrl">
						<div class="panel-body">

							<!-- progressbar -->
						    <ul id="progressbar" class="checkout-progress">
						        <li class="active">Student Info</li>
						        <li>Billing</li>
						        <li>Payment</li>
						    </ul>

						    <ul class="questions-wrapper">

						        <li id="checkout-step-1" class="animated">
						        	<h2 class="checkout-step-heading">Personal Information</h2>
						        	<div class="checkout-form-body">
						        		 <div class="form-group">
						                    <div class="col-sm-10 col-sm-offset-1">
						                      <input class="form-control input" placeholder="Your Name" ng-model="Student.Name">
						                    </div>
						                  </div>

						                  <div class="form-group">
						                    <div class="col-sm-10 col-sm-offset-1">
						                      <input class="form-control input" placeholder="Your Email Address" ng-model="Student.Email">
						                    </div>
						                  </div>

						                  <div class="form-group">
						                    <div class="col-sm-10 col-sm-offset-1">
						                      <input class="form-control input" placeholder="Your Phone Number" ng-model="Student.Number">
						                    </div>
						                  </div>
						        	</div>


                        <div class="form-group"><br/>

                          <div class="col-sm-4 col-sm-offset-8">
                               <a href="javascript:void(0)" class="submit-survey-btn checkout nextCheckout" id="go-to-checkout2">Continue <i class="icon-angle-right"></i></a>
                          </div>
                        </div>

						        </li>



                    <li id="checkout-step-2" class="animated" style="display: none">
                      <h2 class="checkout-step-heading">Billing Information</h2>
                      <div class="checkout-form-body">
                         <div class="form-group">
                                <div class="col-sm-10 col-sm-offset-1">
                                  <input class="form-control input" placeholder="Address" ng-model="Student.Address">
                                </div>
                              </div>

                              <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-1">
                                  <input class="form-control input" placeholder="City" ng-model="Student.City"> 
                                </div>
                                <div class="col-sm-2">
                                  <select class="form-control input" ng-model="Student.State">
                                    <option>State</option>
                                    <option>FL</option>
                                    <option>NY</option>
                                    <option>SEA</option>
                                    <option>WSH</option>
                                  </select>
                                </div>
                                <div class="col-sm-4">
                                  <input class="form-control input" placeholder="Zip" ng-model="Student.Zip">
                                </div>
                              </div>
                      </div>


                        <div class="form-group"><br/>
                          <div class="col-sm-3 col-sm-offset-1">
                              <a href="javascript:void(0)" class="checkout backCheckout" id="go-back-checkout1" style="color:#fff !important;"><i class="icon-angle-left"> </i>BACK</a>
        
                          </div>

                          <div class="col-sm-4 col-sm-offset-4">
                                <a href="javascript:void(0)" class="submit-survey-btn checkout nextCheckout" id="go-to-checkout3">Continue<i class="icon-angle-right"></i></a>
                          </div>
                        </div>

                    </li>




                    <li id="checkout-step-3" class="animated" style="display: none">
                      <h2 class="checkout-step-heading">Payment Information</h2>
                      <div class="checkout-form-body">
                         <div class="form-group">
                                <div class="col-sm-10 col-sm-offset-1">
                                  <input class="form-control input" placeholder="Amount" ng-model="Student.Amount">
                                </div>
                              </div>

                              <div class="form-group">
                                <div class="col-sm-10 col-sm-offset-1">
                                  <select class="form-control input" ng-model="Student.CardType">
                                    <option>CREDIT CARD TYPE</option>
                                    <option>American Express</option>
                                    <option>Visa</option>
                                    <option>Master Card</option>
                                    <option>PayPal</option>
                                  </select>
                                </div>
                              </div>

                              <div class="form-group">
                                <div class="col-sm-10 col-sm-offset-1">
                                  <input class="form-control input" placeholder="CREDIT CARD NUMBER" ng-model="Student.CardNumber">
                                </div>
                              </div>


                              <div class="form-group">
                                <div class="col-sm-3 col-sm-offset-1">
                                  <select class="form-control input" ng-model="Student.CardMonth">
                                    <option>MONTH</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                  </select>
                                </div>
                                <div class="col-sm-3">
                                  <select class="form-control input" ng-model="Student.CardYear">
                                    <option>YEAR</option>
                                    <option>2015</option>
                                    <option>2016</option>
                                    <option>2017</option>
                                    <option>2018</option>
                                  </select>
                                </div>
                                <div class="col-sm-4">
                                  <input class="form-control input" placeholder="C.V.N" ng-model="Student.CardCvn">
                                </div>
                              </div>


                        </div>

                        <div class="form-group"><br/>
                          <div class="col-sm-3 col-sm-offset-1">
                              <a href="javascript:void(0)" class="checkout backCheckout" id="go-back-checkout2" style="color:#fff !important;"><i class="icon-angle-left"> </i>BACK</a>
        
                          </div>

                          <div class="col-sm-3 col-sm-offset-4">
                                <a href="javascript:void(0)" class="submit-survey-btn checkout" id="btn_submit" ng-click="checkOut()">SUBMIT <i class="icon-angle-right"></i></a>
                          </div>
                        </div>
                        
                    </li>

                    <span><%Student%></span>
                    
						    </ul>

                

						</div>
					</form>
				</div>
        	</div>
        </div>

    </div>

    </section>
    @stop