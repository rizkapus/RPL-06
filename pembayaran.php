<!DOCTYPE html>
<html>
<head>
<title>Form Pembayaran</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Payment Form Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Fugaz+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Alegreya+Sans:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>
	<div class="main">
		
		<div class="content">
			
			<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
					<script type="text/javascript">
						$(document).ready(function () {
							$('#horizontalTab').easyResponsiveTabs({
								type: 'default', //Types: default, vertical, accordion           
								width: 'auto', //auto or any width like 600px
								fit: true   // 100% fit in a container
							});
						});
						
					</script>
						<div class="sap_tabs">
							<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
								<div class="pay-tabs">
									<h2>Pilih Cara Pembayaran</h2>
									  <ul class="resp-tabs-list">
										  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span><label class="pic1"></label>Credit Card</span></li>
										  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span><label class="pic3"></label>Net Banking</span></li>
										  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span><label class="pic4"></label>PayPal</span></li> 
										  <li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span><label class="pic2"></label>COD</span></li>
										  <div class="clear"></div>
									  </ul>	
								</div>
								<div class="resp-tabs-container">
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="payment-info">
											<h3>Informasi Pribadi</h3>
											<form>
												<div class="tab-for">				
													<h5>EMAIL ADDRESS</h5>
														<input type="text" value="">
													<h5>NAMA</h5>													
														<input type="text" value="">
												</div>			
											</form>
											<h3 class="pay-title">Info Kartu Kredit</h3>
											<form>
												<div class="tab-for">				
													<h5>NAME ON CARD</h5>
														<input type="text" value="">
													<h5>CARD NUMBER</h5>													
														<input class="pay-logo" type="text" value="0000-0000-0000-0000" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '0000-0000-0000-0000';}" required="">
												</div>	
												<div class="transaction">
													<div class="tab-form-left user-form">
														<h5>EXPIRATION</h5>
															<ul>
																<li>
																	<input type="number" class="text_box" type="text" value="6" min="1" />	
																</li>
																<li>
																	<input type="number" class="text_box" type="text" value="1988" min="1" />	
																</li>
																
															</ul>
													</div>
													<div class="tab-form-right user-form-rt">
														<h5>CVV NUMBER</h5>													
														<input type="text" value="xxxx" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'xxxx';}" required="">
													</div>
													<div class="clear"></div>
												</div>
												<input type="submit" value="SUBMIT">
											</form>
											<div class="single-bottom">
													<ul>
														<li>
															<input type="checkbox"  id="brand" value="">
															<label for="brand"><span></span>By checking this box, I agree to the Terms & Conditions & Privacy Policy.</label>
														</li>
													</ul>
											</div>
										</div>
									</div>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="payment-info">
											<h3>Net Banking</h3>
											<div class="radio-btns">
												<div class="swit">								
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio" checked=""><i></i>Bank BRI</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>BCA</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Bank Mandiri</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>BNI</label> </div></div>	
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>BTN</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Bank Bukopin</label> </div></div>	
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Bank CIMB Niaga</label> </div></div>	
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Bank Danamon</label> </div></div>	
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Bank Mega</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Bank Syariah Mandiri</label> </div></div>		
												</div>
												<div class="swit">								
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio" checked=""><i></i>Bank Aceh</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Bank Anda</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Bank Mestika Dharma</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Bank Mega Syariah</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Bank Muamalat</label> </div></div>	
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>BCA Syariah</label> </div></div>
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Bank BRI Syariah</label> </div></div>	
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Bank BTN Syariah</label> </div></div>	
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Panin Bank</label> </div></div>	
													<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Bank Sinarmas</label> </div></div>	
												</div>
												<div class="clear"></div>
											</div>
											<a href="#">Continue</a>
										</div>
									</div>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
										<div class="payment-info">
											<h3>PayPal</h3>
											<h4>Already Have A PayPal Account?</h4>
											<div class="login-tab">
												<div class="user-login">
													<h2>Login</h2>
													
													<form>
														<input type="text" value="name@email.com" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'name@email.com';}" required="">
														<input type="password" value="PASSWORD" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'PASSWORD';}" required="">
															<div class="user-grids">
																<div class="user-left">
																	<div class="single-bottom">
																			<ul>
																				<li>
																					<input type="checkbox"  id="brand1" value="">
																					<label for="brand1"><span></span>Remember me?</label>
																				</li>
																			</ul>
																	</div>
																</div>
																<div class="user-right">
																	<input type="submit" value="LOGIN">
																</div>
																<div class="clear"></div>
															</div>
													</form>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">	
										<div class="payment-info">
											
											<h3 class="pay-title">Cash On Delivery</h3>
											<form>
												<div class="tab-for">				
													<h5>NAMA</h5>
														<input type="text" value="">
													<h5>ALAMAT</h5>
														<input type="text" value="">
													<h5>NO HANDPHONE</h5>													
														<input type="text" value="0000-0000-0000-0000" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '0000-0000-0000';}" required="">							
												</div>	
												<div class="clear"></div>
												<input type="submit" value="SUBMIT">
											</form>
										</div>	
									</div>
								</div>	
							</div>
						</div>	

		</div>
		<p class="footer">Copyright © e-Pasar Tradisional 2017</a></p>
	</div>
</body>
</html>