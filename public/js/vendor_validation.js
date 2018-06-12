$(function () {
    $("#Vendorform").validate({        
        errorElement: 'p',         
        rules: { 
            'name': "required",
            'vendor_id': "required" ,
            'website_address' : {
                url:true,
                required:true,
            },
            'email': {
                required: true,
                email: true,
                unique:true,
               
            }   
        },
        messages: {
            'name': "Please enter vendor name",
            'vendor_id': "Please enter vendor id" ,
            'website_address' : {
                url:"Please enter URL" ,
                required:"Please enter Website Address",
            },
            'email': {
                required: "Please enter email.",
                email: "Please enter valid email.",
                unique:"Please enter another emailid this email is already used"
               
            }
        },
        submitHandler: function (form) {
            form.submit();
        },
        errorPlacement: function (error, element) {
            error.insertAfter(element);
            error.addClass('text-danger');
        }
    });
   
});

