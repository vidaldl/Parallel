@if($contenidosection5s[0]->map == 1)
<div class="row norightmargin align-items-stretch">
  <div class="col-lg-5" style="min-height: 550px; padding-right: 0px;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15134.439606309257!2d-69.96693295000001!3d18.5013211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eaf8a2df55d5ea3%3A0xec8d5a80f329f5b8!2sPriceSmart!5e0!3m2!1ses-419!2sdo!4v1585673349011!5m2!1ses-419!2sdo" frameborder="0" style="border:0; height: 100%; width: 100%;" allowfullscreen=""></iframe>
  </div>
  <div class="col-lg-3" style="background-color: #E5E5E5;">
    <div style="padding: 40px;">
      <h4 class="font-body t600 ls1">Our Headquarters</h4>

      <div style="font-size: 15px; line-height: 1.7;">
        <address style="line-height: 1.7;">
          <strong>North America:</strong><br>
          795 Folsom Ave, Suite 600<br>
          San Francisco, CA 94107.<br><br>
          <abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8547 632521<br>
          <abbr title="Email Address"><strong>Email:</strong></abbr> real-estate@canvas.com
        </address>

        <div class="clear topmargin-sm"></div>

        <h4 class="font-body t500" style="font-size: 17px; margin-bottom: 10px;">Working Hours:</h4>

        <abbr title="Mondays to Fridays"><strong>Mon-Fri:</strong></abbr> 10AM to 6PM<br>
        <abbr title="Saturday"><strong>Saturday:</strong></abbr> 11AM to 3PM<br>
        <abbr title="Sunday"><strong>Sunday:</strong></abbr> Closed
      </div>
    </div>
  </div>
  <div class="col-lg-4 bgcolor">
    <div class="col-padding">
      <!-- <a href="#" data-toggle="modal" data-target="#contactFormModal" class="button button-3d nomargin btn-block button-xlarge d-none d-md-block center">Click here to Send an Email</a> -->
			<a href="#" data-toggle="modal" data-target="#contactFormModal" class="button button-large button-rounded nomargin btn-block d-block d-md-none center">Send an Email</a>

      <!-- MODAL -->
			<div class="modal fade" id="contactFormModal" tabindex="-1" role="dialog" aria-labelledby="contactFormModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="contactFormModalLabel">Send Us an Email</h4>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						</div>
						<div class="modal-body">

							<div class="container">
								@if(session()->has('success'))
								<div class="alert alert-success">
									{{ session()->get('success') }}
								</div>
								@endif

								<div id="errormessage">
									@if(session()->has('error'))
										<div class="alert alert-danger">
											{{ session()->get('error') }}
										</div>
									@endif
								</div>
								<form class="nobottommargin" action="{{route('send.contact')}}" method="POST">
									@csrf
									<div class="form-process"></div>

									<div class="col_half">
										<label for="name">Name <small>*</small></label>
										<input type="text" id="name" name="name" value="" class="sm-form-control required" />
									</div>

									<div class="col_half col_last">
										<label for="email">Email <small>*</small></label>
										<input type="email" id="email" name="email" value="" class="required email sm-form-control" />
									</div>

									<div class="clear"></div>

									<div class="col_half">
										<label for="number">Phone</label>
										<input type="text" id="number" name="number" value="" class="sm-form-control" />
									</div>

									<div class="col_half col_last">
										<label for="service">Services</label>
										<select id="service" name="service" class="sm-form-control">
											<option value="">-- Select One --</option>
											<option value="Wordpress">Wordpress</option>
											<option value="PHP / MySQL">PHP / MySQL</option>
											<option value="HTML5 / CSS3">HTML5 / CSS3</option>
											<option value="Graphic Design">Graphic Design</option>
										</select>
									</div>

									<div class="clear"></div>

									<div class="col_full">
										<label for="subject">Subject <small>*</small></label>
										<input type="text" id="subject" name="subject" value="" class="required sm-form-control" />
									</div>

									<div class="col_full">
										<label for="message">Message <small>*</small></label>
										<textarea class="required sm-form-control" id="message" name="message" rows="6" cols="30"></textarea>
									</div>


									<div class="col_full">
										<input type="hidden" name="recaptcha" id="recaptcha">
									</div>

									<div class="col_full">
										<button class="button button-3d nomargin" type="submit" value="submit">Send Message</button>
									</div>

								</form>

							</div>

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->

      <div class="d-none d-md-block">
        @if(session()->has('success'))
        <div class="alert alert-success">
          {{ session()->get('success') }}
        </div>
        @endif

        <div id="errormessage">
          @if(session()->has('error'))
            <div class="alert alert-danger">
              {{ session()->get('error') }}
            </div>
          @endif
        </div>
        <form class="nobottommargin" action="{{route('send.contact')}}" method="POST">
          @csrf
          <div class="form-process"></div>

          <div class="col_half">
            <label for="name">Name <small>*</small></label>
            <input type="text" id="name" name="name" value="" class="sm-form-control required" />
          </div>

          <div class="col_half col_last">
            <label for="email">Email <small>*</small></label>
            <input type="email" id="email" name="email" value="" class="required email sm-form-control" />
          </div>

          <div class="clear"></div>

          <div class="col_half">
            <label for="number">Phone</label>
            <input type="text" id="number" name="number" value="" class="sm-form-control" />
          </div>

          <div class="col_half col_last">
            <label for="service">Services</label>
            <select id="service" name="service" class="sm-form-control">
              <option value="">-- Select One --</option>
              <option value="Wordpress">Wordpress</option>
              <option value="PHP / MySQL">PHP / MySQL</option>
              <option value="HTML5 / CSS3">HTML5 / CSS3</option>
              <option value="Graphic Design">Graphic Design</option>
            </select>
          </div>

          <div class="clear"></div>

          <div class="col_full">
            <label for="subject">Subject <small>*</small></label>
            <input type="text" id="subject" name="subject" value="" class="required sm-form-control" />
          </div>

          <div class="col_full">
            <label for="message">Message <small>*</small></label>
            <textarea class="required sm-form-control" id="message" name="message" rows="6" cols="30"></textarea>
          </div>


          <div class="col_full">
            <input type="hidden" name="recaptcha" id="recaptcha">
          </div>

          <div class="col_full">
            <button class="button button-3d nomargin" type="submit" value="submit">Send Message</button>
          </div>



        </form>

      </div>

    </div>
  </div>
</div>
@else
<div class="row" style="background-color: #E5E5E5;">
<div class="container">
	<div class="row norightmargin align-items-stretch">
	  <!-- <div class="col-lg-5" style="min-height: 550px; padding-right: 0px;">
	    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15134.439606309257!2d-69.96693295000001!3d18.5013211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eaf8a2df55d5ea3%3A0xec8d5a80f329f5b8!2sPriceSmart!5e0!3m2!1ses-419!2sdo!4v1585673349011!5m2!1ses-419!2sdo" frameborder="0" style="border:0; height: 100%; width: 100%;" allowfullscreen=""></iframe>
	  </div> -->

			<div class="col-lg-5">
		    <div  style="padding: 40px;">
		      <h4 class="font-body t600 ls1">Our Headquarters</h4>

		      <div style="font-size: 15px; line-height: 1.7;">
		        <address style="line-height: 1.7;">
		          <strong>North America:</strong><br>
		          795 Folsom Ave, Suite 600<br>
		          San Francisco, CA 94107.<br><br>
		          <abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8547 632521<br>
		          <abbr title="Email Address"><strong>Email:</strong></abbr> real-estate@canvas.com
		        </address>

		        <div class="clear topmargin-sm"></div>

		        <h4 class="font-body t500" style="font-size: 17px; margin-bottom: 10px;">Working Hours:</h4>

		        <abbr title="Mondays to Fridays"><strong>Mon-Fri:</strong></abbr> 10AM to 6PM<br>
		        <abbr title="Saturday"><strong>Saturday:</strong></abbr> 11AM to 3PM<br>
		        <abbr title="Sunday"><strong>Sunday:</strong></abbr> Closed
		      </div>
		    </div>
		  </div>
		  <div class="col-lg-7" style="background-color: #1ABC9C;">
		    <div class="col-padding">
		      <!-- <a href="#" data-toggle="modal" data-target="#contactFormModal" class="button button-3d nomargin btn-block button-xlarge d-none d-md-block center">Click here to Send an Email</a> -->
					<a href="#" data-toggle="modal" data-target="#contactFormModal" class="button button-large button-rounded nomargin btn-block d-block d-md-none center">Send an Email</a>

		      <!-- MODAL -->
					<div class="modal fade" id="contactFormModal" tabindex="-1" role="dialog" aria-labelledby="contactFormModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title" id="contactFormModalLabel">Send Us an Email</h4>
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								</div>
								<div class="modal-body">

									<div class="container">
						        @if(session()->has('success'))
						        <div class="alert alert-success">
						          {{ session()->get('success') }}
						        </div>
						        @endif

						        <div id="errormessage">
						          @if(session()->has('error'))
						            <div class="alert alert-danger">
						              {{ session()->get('error') }}
						            </div>
						          @endif
						        </div>
						        <form class="nobottommargin" action="{{route('send.contact')}}" method="POST">
						          @csrf
						          <div class="form-process"></div>

						          <div class="col_half">
						            <label for="name">Name <small>*</small></label>
						            <input type="text" id="name" name="name" value="" class="sm-form-control required" />
						          </div>

						          <div class="col_half col_last">
						            <label for="email">Email <small>*</small></label>
						            <input type="email" id="email" name="email" value="" class="required email sm-form-control" />
						          </div>

						          <div class="clear"></div>

						          <div class="col_half">
						            <label for="number">Phone</label>
						            <input type="text" id="number" name="number" value="" class="sm-form-control" />
						          </div>

						          <div class="col_half col_last">
						            <label for="service">Services</label>
						            <select id="service" name="service" class="sm-form-control">
						              <option value="">-- Select One --</option>
						              <option value="Wordpress">Wordpress</option>
						              <option value="PHP / MySQL">PHP / MySQL</option>
						              <option value="HTML5 / CSS3">HTML5 / CSS3</option>
						              <option value="Graphic Design">Graphic Design</option>
						            </select>
						          </div>

						          <div class="clear"></div>

						          <div class="col_full">
						            <label for="subject">Subject <small>*</small></label>
						            <input type="text" id="subject" name="subject" value="" class="required sm-form-control" />
						          </div>

						          <div class="col_full">
						            <label for="message">Message <small>*</small></label>
						            <textarea class="required sm-form-control" id="message" name="message" rows="6" cols="30"></textarea>
						          </div>


						          <div class="col_full">
						            <input type="hidden" name="recaptcha" id="recaptcha">
						          </div>

						          <div class="col_full">
						            <button class="button button-3d nomargin" type="submit" value="submit">Send Message</button>
						          </div>

						        </form>

						      </div>

								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								</div>
							</div><!-- /.modal-content -->
						</div><!-- /.modal-dialog -->
					</div><!-- /.modal -->

		      <div class="d-none d-md-block">
		        @if(session()->has('success'))
		        <div class="alert alert-success">
		          {{ session()->get('success') }}
		        </div>
		        @endif

		        <div id="errormessage">
		          @if(session()->has('error'))
		            <div class="alert alert-danger">
		              {{ session()->get('error') }}
		            </div>
		          @endif
		        </div>
		        <form class="nobottommargin" action="{{route('send.contact')}}" method="POST">
		          @csrf
		          <div class="form-process"></div>

		          <div class="col_half">
		            <label for="name">Name <small>*</small></label>
		            <input type="text" id="name" name="name" value="" class="sm-form-control required" />
		          </div>

		          <div class="col_half col_last">
		            <label for="email">Email <small>*</small></label>
		            <input type="email" id="email" name="email" value="" class="required email sm-form-control" />
		          </div>

		          <div class="clear"></div>

		          <div class="col_half">
		            <label for="number">Phone</label>
		            <input type="text" id="number" name="number" value="" class="sm-form-control" />
		          </div>

		          <div class="col_half col_last">
		            <label for="service">Services</label>
		            <select id="service" name="service" class="sm-form-control">
		              <option value="">-- Select One --</option>
		              <option value="Wordpress">Wordpress</option>
		              <option value="PHP / MySQL">PHP / MySQL</option>
		              <option value="HTML5 / CSS3">HTML5 / CSS3</option>
		              <option value="Graphic Design">Graphic Design</option>
		            </select>
		          </div>

		          <div class="clear"></div>

		          <div class="col_full">
		            <label for="subject">Subject <small>*</small></label>
		            <input type="text" id="subject" name="subject" value="" class="required sm-form-control" />
		          </div>

		          <div class="col_full">
		            <label for="message">Message <small>*</small></label>
		            <textarea class="required sm-form-control" id="message" name="message" rows="6" cols="30"></textarea>
		          </div>


		          <div class="col_full">
		            <input type="hidden" name="recaptcha" id="recaptcha">
		          </div>

		          <div class="col_full">
		            <button class="button button-3d nomargin" type="submit" value="submit">Send Message</button>
		          </div>

		        </form>

		      </div>

		    </div>
		  </div>
	</div>
</div>
</div>
@endif
