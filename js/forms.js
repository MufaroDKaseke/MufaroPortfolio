$(document).ready(function(){
    
    (function($) {
        "use strict";
        
        // Assign Forms
        let contactForm = $("#contactForm");
        let hireMeForm = $("#hireMeForm");
        let requestCallForm = $("#requestCallForm");
        
        
        // Contact Form
        
        // Contact Form Rules Object
        let contactFormRules = {
            rules: {
                name: {
                    required: true,
                    minlength: 2,
                    normalizer: function(value) {
                        return $.trim(value);
                    }
                },
                email: {
                    required :true,
                    email:true,
                    normalizer: function(value) {
                        return $.trim(value);
                    }
                },
                subject: {
                    required: true,
                    minlength: 3,
                    normalizer: function(value) {
                        return $.trim(value);
                    }
                },
                message: {
                    required: true,
                    minlength: 5,
                    normalizer: function(value) {
                        return $.trim(value);
                    }
                },
            },
            messages: {
                name: {
                    required: "Please enter your name",
                    minlength: "Your name must be at least 2 characters long"
                },
                email: {
                    required: "Please enter an email address",
                    email: "Please enter a valid email address"
                },
                subject: {
                    required: "Please provide a subject",
                    minlength: "Your subject must be at least 3 characters long",
                },
                message: {
                    required: "Please enter a message",
                    minlength: "Your message must be at least 5 characters long"
                }
            }
        };
        
        // Validate Before Submit
        contactForm.validate(contactFormRules);
        
        // Catch form on submit
        contactForm.on("submit" ,function(e) {
            e.preventDefault(); // Prevent Default
            
            let submitBtn = $("#contactForm button[type=submit]");
            let formResult = $('#formResult'); // Result Modal
            let errorMsg = '<div class="text-center"><i class="icon-error_outline text-danger" style="font-size: 3rem;"></i></div><div class="success-msg"><h5 class="text-center my-3">Oops ,an error occured.</h5><div class="col text-center"><button type="submit" class="btn mufaro-btn my-2" data-dismiss="modal" aria-label="Close"><i class="icon-refresh"></i> Try Again</button></div></div>';
            // Validate on submit
            let error = $(this).validate(contactFormRules).errorList["length"];
            
            // Check if there is an error and then perform ajax
            if (error) {
                console.log("There is an error at submission"); 
            } else {
                $.ajax({
                    url: './includes/contact_form.php', // Form action url
                    type: "POST", // Form submit method
                    dataType: "html", // Request t ype
                    data: contactForm.serialize(),  // Serialize form data
                    beforeSend: function() {
                        submitBtn.prop("disabled" , true); // Disable submit button
                        submitBtn.html('<span class="icon-refresh text-secondary mx-2" style="animation: rotate 0.5s ease 0s infinite;"></span>Sending...'); // Change submit button to Sending...
                    },
                    success: function(data) {
                        contactForm.trigger('reset'); // Reset form fields
                        $('#formResult .modal-body').html(data); // Insert result from backend
                        formResult.modal('show'); // Show Modal
                        console.log("Success : Ajax Response Success"); // Console log success message
                    },
                    error: function(e) {
                        console.log(e); // Console log  
                        $('#formResult .modal-body').html(errorMsg);
                        formResult.modal('show');
                    }, 
                    complete: function() {
                        submitBtn.html("Send Message"); // Reset submit button
                        submitBtn.prop("disabled" , false); // Re-enable submit button
                    }
                });

                
                console.log("Trick Successful")
            }
            
        });      
        
        // Hire Me Form
        
        // Hire Me Form Rules Object
        let hireMeFormRules = {
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                email: {
                    required :true,
                    email:true
                },
                phoneNumber: {
                    required: true,
                    minlength: 9
                },
                message: {
                    required: true,
                    minlength: 5
                },
            },
            messages: {
                name: {
                    required: "Please enter your name",
                    minlength: "Your name must be at least 2 characters long"
                },
                email: {
                    required: "Please enter an email address",
                    email: "Please enter a valid email address"
                },
                phoneNumber: {
                    required: "Please provide a phone number",
                    minlength: "Your subject must be at least 9 characters long",
                },
                message: {
                    required: "Please enter a message",
                    minlength: "Your message must be at least 5 characters long"
                }
            }
        };
        
        hireMeForm.validate(hireMeFormRules);
        
        
        hireMeForm.on("submit" ,function(e) {
            e.preventDefault(); // Prevent Default
            
            let submitBtn = $("#hireMeForm button[type=submit]");
            let resultModal = $('#hireMe'); // Result Modal
            let errorMsg = '<div class="text-center"><i class="icon-error_outline text-danger" style="font-size: 3rem;"></i></div><div class="success-msg"><h5 class="text-center my-3">Oops ,an error occured.</h5><div class="col text-center"><button type="submit" class="btn mufaro-btn my-2" data-dismiss="modal" aria-label="Close"><i class="icon-refresh"></i> Try Again</button></div></div>';
            // Validate on submit
            let error = $(this).validate(hireMeFormRules).errorList["length"];
            
            if (error) {
                console.log("There is an error at submission");
            } else {
                $.ajax({
                    url: './includes/request_quote.php', // Form action url
                    type: "POST", // Form submit method
                    dataType: "html", // Request type
                    data: hireMeForm.serialize(), // Serialize form data
                    beforeSend: function() {
                        submitBtn.prop("disabled" , true); // Disable submit button
                        submitBtn.html("Sending..."); // Change submit button to Sending...
                    },
                    success: function(data) {
                        hireMeForm.trigger('reset');
                        $('#hireMe .modal-body').html(data);
                        resultModal.modal('show');
                        submitBtn.html("Send Message"); // Reset submit button
                        console.log("Success : Ajax Response Success"); // Console log success message
                    },
                    error: function(e) {
                        console.log(e); // Console log error
                        $('#hireMe .modal-body').html(errorMsg);
                        resultModal.modal('show');
                    }
                });
            }
            
        });
        
        // Request Call Form
        
        // Request Call Form Rules Object
        let rqFormRules = {
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                phoneNumber: {
                    required: true,
                    minlength: 9
                },
                message: {
                    required: true,
                    minlength: 5
                },
            },
            messages: {
                name: {
                    required: "Please enter your name",
                    minlength: "Your name must be at least 2 characters long"
                },
                phoneNumber: {
                    required: "Please provide a phone number",
                    minlength: "Your subject must be at least 9 characters long",
                },
                message: {
                    required: "Please enter a message",
                    minlength: "Your message must be at least 5 characters long"
                }
            }
        };
        
        requestCallForm.validate(rqFormRules);
        
        requestCallForm.on("submit" ,function(e) {
            e.preventDefault(); // Prevent Default
            
            let submitBtn = $("#requestCallForm button[type=submit]");
            let resultModal = $("#requestCall");
            let errorMsg = '';
            // Validate on submit
            let error = $(this).validate(rqFormRules).errorList["length"];
            
            if (error) {
                console.log("There was a validation error at submission");
            } else {
                $.ajax({
                    url: './includes/request_call.php', // Form action url
                    type: "POST", // Form submit method
                    dataType: "html", // Request type
                    data: requestCallForm.serialize(), // Serialize form data
                    beforeSend: function() {
                        submitBtn.prop("disabled" , true); // Disable submit button
                        submitBtn.html("Sending..."); // Change submit button to Sending...
                    },
                    success: function(data) {
                        requestCallForm.trigger('reset');
                        $('#requestCall .modal-body').html(data);
                        resultModal.modal('show');
                        submitBtn.html("Send Message"); // Reset submit button
                        console.log("Success : Ajax Response Success"); // Console log success message
                    },
                    error: function(e) {
                        console.log(e); // Console log error
                        $('#requestCall .modal-body').html(errorMsg);
                        resultModal.modal('show');
                    }
                });   
            }
            
        });
        
        
        $(".form-control").change(function () {
            if($(this).hasClass("error")) {
                $(this).siblings(".input-icon").first().addClass("icon-warning");
            } else {
                $(this).siblings(".input-icon").first().removeClass("icon-warning"); 
            }
        });
        
    })(jQuery);
});

/*

To Do

Done
1. Integrated jquery form validation.
1. Fix jquery form valiadtion for the remaining forms.

Open

1. Rewrite error and success messages.
    - Make them more detailed.

3. Implement `nomarlizer` method on jq-validator rules to trim whitespace
2. Do unit test.



How I fixed error on integrating jquery validation error

1. Create an object with the rules
2. Run the rules with the .validate function outside the .on("submit") function.
3. Also validate on submit (inside .on("submit")) and check for errors.
4. If there are errors just raise them normally. If there are non perform ajax.



*/