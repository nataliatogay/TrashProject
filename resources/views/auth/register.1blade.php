<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://cdn.lineicons.com/1.0.0/LineIcons.min.css">
<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" />
<style>
    html,body{
    color: #fff;
}
.lni{
    font-size: 64px;
}

.bg{
    background: linear-gradient(to right, #3c96ff 0%, #2dfbff 100%) !important;
}

.regform{
    box-shadow: 0px 8px 9px 0px rgba(69, 69, 69, 0.25);
}

.sign{
    color: #000;
}
</style>
<script>
    $("#signup").click(function() {
$("#first").fadeOut("fast", function() {
$("#second").fadeIn("fast");
});
});

$("#signin").click(function() {
$("#second").fadeOut("fast", function() {
$("#first").fadeIn("fast");
});
});



   /*      $(function() {
           $("form[name='login']").validate({
             rules: {

               email: {
                 required: true,
                 email: true
               },
               password: {
                 required: true,

               }
             },
              messages: {
               email: "Please enter a valid email address",

               password: {
                 required: "Please enter password",

               }

             },
             submitHandler: function(form) {
               form.submit();
             }
           });
         });


*/
$(function() {

  $("form[name='registration']").validate({
    rules: {
      firstname: "required",
      lastname: "required",
      email: {
        required: true,
        email: true
      },
      password: {
        required: true,
        minlength: 5
      }
    },

    messages: {
      firstname: "Please enter your firstname",
      lastname: "Please enter your lastname",
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      email: "Please enter a valid email address"
    },

    submitHandler: function(form) {
      form.submit();
    }
  });
});

</script>
<div class="container-fluid bg">
	<div class="container">
	    <div class="row">
		<div class="col-md-8 ">
		    <div class="row">
		        <div class="col-sm-3 col-md-2 col-lg-2">
		            <i class="lni lni-enter" aria-hidden="true"></i>
		        </div>

		        <div class="col-sm-9 col-md-10 col-lg-10">
		            <h1 class="heading">Register</h1>
		            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
		        </div>
		    </div>

		     <div class="row">
		        <div class="col-sm-3 col-md-2 col-lg-2">
		            <i class="lni lni-user" aria-hidden="true"></i>
		        </div>

		        <div class="col-sm-9 col-md-10 col-lg-10">
		            <h1 class="heading">Make Your Profile</h1>
		            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
		        </div>
		    </div>

		      <div class="row">
		        <div class="col-sm-3 col-md-2 col-lg-2">
		            <i class="lni lni-cloud-upload" aria-hidden="true"></i>
		        </div>

		        <div class="col-sm-9 col-md-10 col-lg-10">
		            <h1 class="heading">Upload Resume</h1>
		            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
		        </div>
		    </div>

		    <div class="row">
		        <div class="col-sm-3 col-md-2 col-lg-2">
		            <i class="lni lni-search" aria-hidden="true"></i>
		        </div>

		        <div class="col-sm-9 col-md-10 col-lg-10">
		            <h1 class="heading">Search Jobs</h1>
		            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
		        </div>
		    </div>
		</div>

		<div class="col-md-4">
		        <div class="card regform wow bounce animated" data-wow-delay="0.05s">
		            <div class="card-body regform">
		               <div class="myform form ">
                        <div class="logo mb-3">
                           <div class="col-md-12 text-center">
                              <h1 class="sign">Signup</h1>
                           </div>
                        </div>
                        <form action="#" name="registration">
                           <div class="form-group">
                              <label for="exampleInputEmail1">First Name</label>
                              <input type="text"  name="firstname" class="form-control" id="firstname" aria-describedby="emailHelp" placeholder="Enter Firstname">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Last Name</label>
                              <input type="text"  name="lastname" class="form-control" id="lastname" aria-describedby="emailHelp" placeholder="Enter Lastname">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                           </div>
                           <div class="form-group">
                              <label for="exampleInputEmail1">Password</label>
                              <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
                           </div>
                           <div class="col-md-12 text-center mb-3">
                              <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Sign Up</button>
                           </div>
                           <div class="col-md-12 ">
                              <div class="form-group">
                                 <p class="text-center"><a href="#" id="signin">Already have an account?</a></p>
                              </div>
                           </div>
                            </div>
		            </div>
		        </div>
		    </div>
	</div>
	</div>
</div>