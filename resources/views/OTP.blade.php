<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>OTP</title>
    <link
      href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </head>

<style>
    @import url('https://fonts.googleapis.com/css?family=Roboto');
</style>

  <body>
   <main class="py-4 bg-surface-secondary">
            <div class="container-fluid">
           <div class="row g-6 mb-4 justify-center ">
                <div class="col-xl-6 col-sm-12 col-md-8 col-12">
                    <div class="card shadow border-0 mt-12">
                        <div class="card-body    ">
                            <h5 class="mt-3 text-lg text-center">OTP Verification</h5>
                            <div class='flex items-center px-2 py-3 pl-4 '>
								<form role="form" action="index.html" class="login-box">
									<div class="tab-content pl-6 " id="main_form">
										<div class="tab-pane active " role="tabpanel" id="step1">
											
											<div class="row ml-3">
												<div class="col-md-11 ">
													<div class="form-group">
														<div class="bg-green-100 shadow-outline text-teal-900 font-normal   px-4 py-3 rounded-lg relative" role="alert">
														   We have sent a verification code to your email - emailid@gmail.com
															</div>
													</div>
												</div>
												<div class="col-md-11">
													<div class="form-group">
														
														<input class="border rounded w-full py-2 px-3 text-gray-700 leading-tight  focus:outline-none focus:shadow-outline" type="number" name="OTP" placeholder="Enter verification code"> 
													</div>
												</div>
											  </div>
											  <div class="col-md-11 mt-2 ml-3 mb-6">
												<a href="" class="  w-full next-step bg-blue-600 hover:bg-blue-700 text-white text-center hover:no-underline font-semi-bold py-2 px-3 rounded focus:outline-none focus:shadow-outline" type="button">
												   Next
												</a>
											</div>
										</div>
									 </div>
								  </form>
                             
                              </div>
                            </div>
						</div>
           </div>
        </div>
    </main>
  </body>

  
</html>