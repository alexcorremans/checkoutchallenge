<?php

	require_once '../auth/credentials.php';

	$to = "";
	$name = "";

	if (isset($_POST['email']) && isset($_POST['firstname'])) {
		$to = $_POST['email'];
		$name = $_POST['firstname'] . " " . $_POST['lastname'];
		$user = strtolower($_POST['firstname'] . "." . $_POST['lastname']);
		$ver = $_POST['version'];
	}
	if (isset($_GET['email']) && isset($_GET['firstname'])) {
		$to = $_GET['email'];
		$name = $_GET['firstname'] . " " . $_GET['lastname'];
		$user = strtolower($_GET['firstname'] . "." . $_GET['lastname']);
		$ver = $_GET['version'];
	}

	if ($ver == 2) {
		$merchantAccount = merchantAccountv2;
		$apikey = apikeyv2;
		$clientkey = clientkeyv2;
	} else {
		$merchantAccount = merchantAccount;
		$apikey = apikey;
		$clientkey = clientkey;
	}

		$html = '<body style="box-sizing: border-box;margin: 0;font-family: -apple-system,BlinkMacSystemFont,&quot;Segoe UI&quot;,Roboto,&quot;Helvetica Neue&quot;,Arial,&quot;Noto Sans&quot;,sans-serif,&quot;Apple Color Emoji&quot;,&quot;Segoe UI Emoji&quot;,&quot;Segoe UI Symbol&quot;,&quot;Noto Color Emoji&quot;;font-size: 1rem;font-weight: 400;line-height: 1.5;color: #212529;text-align: left;background-color: #fff;min-width: 992px!important;">
							<div id="body" style="box-sizing: border-box;">
								<div id="main" style="box-sizing: border-box;">
									<div class="container" style="box-sizing: border-box;width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;min-width: 992px!important;">
										<div class="intro" style="box-sizing: border-box;">
											Thank you for your time today! Please see the two tech challenges below. <br style="box-sizing: border-box;"><br style="box-sizing: border-box;">
										</div>
										<div class="card" style="box-sizing: border-box;position: relative;display: flex;-ms-flex-direction: column;flex-direction: column;min-width: 0;word-wrap: break-word;background-color: #fff;background-clip: border-box;border: 1px solid rgba(0,0,0,.125);border-radius: .25rem;">
											<div class="challenge card-body" style="box-sizing: border-box;-ms-flex: 1 1 auto;flex: 1 1 auto;min-height: 1px;padding: 1.25rem;">
												<h5 style="box-sizing: border-box;margin-top: 0;margin-bottom: .5rem;font-weight: 500;line-height: 1.2;font-size: 1.25rem;">Challenge 1: Checkout, Checkout, Checkout</h5>
												<br style="box-sizing: border-box;">

												You will be using Adyen’s Checkout Drop-in web solution to integrate a typical eCommerce shopper checkout flow. Follow the instructions below and don’t hesitate to reach out to us if you need any help!<br style="box-sizing: border-box;">
												<br style="box-sizing: border-box;">

												Using the programming language of your choice, integrate the following (including backend server):<br style="box-sizing: border-box;">
												<a href="https://docs.adyen.com/online-payments/web-drop-in" style="box-sizing: border-box;color: #007bff;text-decoration: underline;background-color: transparent;">https://docs.adyen.com/online-payments/web-drop-in</a><br style="box-sizing: border-box;">
												<br style="box-sizing: border-box;">

												At the minimum, your integration needs to meet the conditions below:<br style="box-sizing: border-box;">

												<div class="sc-notice info" style="box-sizing: border-box; border-radius: 3px; margin: 12px 0; min-height: 20px; padding: 12px 12px 12px 48px; position: relative; display: table; border: 3px solid transparent; border-color: #cce0ff;">
													<div class="bluebox" style="background: #cce0ff; display: block; height: 100%; left: 0; position: absolute; top: 0; width: 36px;"></div>
													<p style="box-sizing: border-box; margin: 0 20px;">
														1) Accept card payments (Visa and MasterCard)
													</p>
													<p style="box-sizing: border-box; margin: 0 20px;">
														2) Accept at least 1 local payment method - for example:
													 	<ul style="box-sizing: border-box;margin-top: 0;margin-bottom: 0;">
															<li style="box-sizing: border-box;">Alipay (for APAC)</li>
															<li style="box-sizing: border-box;">iDeal (for NL)</li>
														</ul>
													</p>
													<p style="box-sizing: border-box; margin: 0 20px;">
														3) Perform 3DS2 on all card payments
													</p>
												</div>
												<br style="box-sizing: border-box;">
												Once you have completed the integration, please be prepared to walk us through it (including any challenges you had) during your next interview. Additionally, please share the following:<br style="box-sizing: border-box;">
												<br style="box-sizing: border-box;">
												<ul style="box-sizing: border-box;margin-top: 0;margin-bottom: 1rem;">
													<li style="box-sizing: border-box;">2 pspReferences (unique payment reference) for two example payments - one card payment and one local payment method.</li>
													<li style="box-sizing: border-box;">Example requests / responses for the above-mentioned pspReferences for all API calls (merchantAccount: AdyenRecruitmentCOM)</li>
													<li style="box-sizing: border-box;">Your entire project to us via a ZIP file/Github <strong style="box-sizing: border-box;font-weight: bolder;"><u style="box-sizing: border-box;">before</u></strong> the interview so that we can also look at it.</li>
												</ul>
												When making your payment request, make sure that the value for your reference field is set to: {yourFirstName}_checkoutChallenge.
												<br style="box-sizing: border-box;"><br style="box-sizing: border-box;">
												With regards to the overall UI, feel free to design it in any way you please. Also, the above three conditions are the baseline integration, but feel free to add on more functionality to your checkout flow.
													<br style="box-sizing: border-box;">
													<strong style="box-sizing: border-box;font-weight: bolder;">Helpful Links</strong>
													<div class="sc-notice info" style="box-sizing: border-box; border-radius: 3px; margin: 12px 0; min-height: 20px; padding: 12px 12px 12px 48px; position: relative; display: table; border: 3px solid transparent; border-color: #cce0ff;">
														<div class="bluebox" style="background: #cce0ff; display: block; height: 100%; left: 0; position: absolute; top: 0; width: 36px;"></div>
														<ul style="box-sizing: border-box;margin-top: 0;margin-bottom: 1rem;">
															<li style="box-sizing: border-box;">
																Drop-in Documentation: <a href="https://docs.adyen.com/online-payments/web-drop-in" style="box-sizing: border-box;color: #007bff;text-decoration: underline;background-color: transparent;">https://docs.adyen.com/online-payments/web-drop-in</a></li>
															<li style="box-sizing: border-box;">Test credentials: <a href="https://docs.adyen.com/developers/test-cards/test-card-numbers" style="box-sizing: border-box;color: #007bff;text-decoration: underline;background-color: transparent;">https://docs.adyen.com/developers/test-cards/test-card-numbers</a></li>
															<li style="box-sizing: border-box;">Code examples: <a href="https://github.com/Adyen/" style="box-sizing: border-box;color: #007bff;text-decoration: underline;background-color: transparent;">https://github.com/Adyen/</a></li>
														</ul>
													</div>
													<br style="box-sizing: border-box;">
													<strong style="box-sizing: border-box;font-weight: bolder;">Authentication &amp; Credentials</strong>
													<div class="sc-notice info" style="box-sizing: border-box; border-radius: 3px; margin: 12px 0; min-height: 20px; padding: 12px 12px 12px 48px; position: relative; display: table; border: 3px solid transparent; border-color: #cce0ff;">
														<div class="bluebox" style="background: #cce0ff; display: block; height: 100%; left: 0; position: absolute; top: 0; width: 36px;"></div>
														<ul style="box-sizing: border-box;margin-top: 0;margin-bottom: 1rem;">
															<li style="box-sizing: border-box;">merchantAccount: <code style="box-sizing: border-box;font-family: SFMono-Regular,Menlo,Monaco,Consolas,&quot;Liberation Mono&quot;,&quot;Courier New&quot;,monospace;font-size: 87.5%;color: #e83e8c;word-wrap: break-word;">' . $merchantAccount . '</code></li>
															<li style="box-sizing: border-box;">API Key (x-api-key): <code style="box-sizing: border-box;font-family: SFMono-Regular,Menlo,Monaco,Consolas,&quot;Liberation Mono&quot;,&quot;Courier New&quot;,monospace;font-size: 87.5%;color: #e83e8c;word-wrap: break-word;">' . $apikey . '</code></li>
															<li style="box-sizing: border-box;">Client Key (clientKey): <code style="box-sizing: border-box;font-family: SFMono-Regular,Menlo,Monaco,Consolas,&quot;Liberation Mono&quot;,&quot;Courier New&quot;,monospace;font-size: 87.5%;color: #e83e8c;word-wrap: break-word;">' . $clientkey . '</code></li>
														</ul>
													</div>
													<div class="sc-notice info" style="box-sizing: border-box; border-radius: 3px; margin: 12px 0; min-height: 20px; padding: 12px 12px 12px 48px; position: relative; display: table; border: 3px solid transparent; border-color: #cce0ff;">
														<div class="bluebox" style="background: #cce0ff; display: block; height: 100%; left: 0; position: absolute; top: 0; width: 36px;"></div>
														The permitted domains for the above <strong style="box-sizing: border-box;font-weight: bolder;">clientKey</strong> are: <br style="box-sizing: border-box;">
														<ul style="box-sizing: border-box;margin-top: 0;margin-bottom: 1rem;">
															<li style="box-sizing: border-box;">http://localhost:3000</li>
															<li style="box-sizing: border-box;">http://localhost:5000</li>
															<li style="box-sizing: border-box;">http://localhost:8000</li>
															<li style="box-sizing: border-box;">http://localhost:8080</li>
															<li style="box-sizing: border-box;">http://127.0.0.1:5000</li>
														</ul>Please ensure that your website is running on one of the above permitted domains; if not you will be unable to load your credit card fields.<br style="box-sizing: border-box;"><em style="font-size: 14px;box-sizing: border-box;">If you do want to run your server on another domain, feel free to reach out to us and we will add it for you.</em>
													</div>

													<br style="box-sizing: border-box;">If you are in the midst of testing credit card payments, and are getting a 422: Unable to decrypt data error, that’s an issue with the domain where you are hosting your front-end website or the clientKey. Nonetheless, feel free to reach out to us if you still cannot resolve the error.<br style="box-sizing: border-box;">
													<br style="box-sizing: border-box;">
													You will receive a separate email from Adyen with your user credentials. Your new username for the Adyen Customer Area should be: ' . $user . '
													<br style="box-sizing: border-box;">
													<br style="box-sizing: border-box;">
													If you have any issues logging in, please contact your Adyen interviewer.
													<br style="box-sizing: border-box;">
													<br style="box-sizing: border-box;">
													You don’t need to publicly host your website (however, please feel free to do so). We will schedule a Zoom call for you to share your screen and run through your solution with us.
												</div>
												<hr class="mb-4" style="box-sizing:content-box;height:0;overflow:visible;margin-top:1rem;border-width:0;border-top-width:1px;border-top-style:solid;border-top-color:rgba(0,0,0,.1);margin-bottom:1.5rem!important;" >
												<div class="challenge card-body" style="box-sizing:border-box;-ms-flex:1 1 auto;flex:1 1 auto;min-height:1px;padding-top:1.25rem;padding-right:1.25rem;padding-left:1.25rem;padding-bottom:0px;" >
													<h5 style="box-sizing:border-box;margin-top:0;margin-bottom:.5rem;font-weight:500;line-height:1.2;font-size:1.25rem;" >Challenge 2: The Adyen (not so) Tech Test </h5>
													<br style="box-sizing:border-box;" />
													In addition, please follow the link below to access a quick quiz and fill out your answers. This should not take any longer than 30 minutes, but please take as much time as you need!
													<br style="box-sizing:border-box;" />
													<br style="box-sizing:border-box;" />
													<a href="https://forms.gle/bFGdcUr9oYkqj8NW8" style="box-sizing:border-box;color:#007bff;text-decoration:none;background-color:transparent;cursor:pointer;" >Not so Technical Test</a>
													<br style="box-sizing:border-box;" />
													<br style="box-sizing:border-box;" />
												</div>
											</div>
										</div>
									</div>
								</div>
							</body>';

		//echo $html;// . $_POST['username'] . '

		$mail = newMailer();

		try {
		    //Recipients
		    $mail->setFrom('recruitment@adyen.com', 'Adyen Recruitment');
		    $mail->addAddress($to, $name);

		    // Content
				$mail->CharSet = 'UTF-8';
		    $mail->isHTML(true);
		    $mail->Subject = 'Adyen Technical Test';
		    $mail->Body    = $html;

		    $mail->send();
		    echo 'Message has been sent';
		} catch (Exception $e) {
		    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}
