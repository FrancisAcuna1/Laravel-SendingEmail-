<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Tickets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

        <div class="row ">
            
            <div class="col-lg-7 mx-auto m-auto">
                <div class="bg-success p-2 mt-5 rounded">
                   <div class="h5 text-center" style="border-radius: 20px" >Email Sending</div>
                </div>
                <div class="card mt-2 mx-auto p-4 bg-light">
                    
                    <div class="card-body bg-light">
                        <div class = "container">
                        
                            <form id="contact-form" role="form"  action="send" method="post"  enctype="multipart/form-data">
                            @csrf
                            <div class="controls">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">Firstname <span class="text-danger">*</span></label>
                                        <input id="form_name" type="text" name="firstname" class="form-control" placeholder="Please enter your firstname" required="required" data-error="Firstname is required.">
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">Lastname <span class="text-danger">*</span></label>
                                        <input id="form_lastname" type="text" name="lastname" class="form-control" placeholder="Please enter your lastname " required="required" data-error="Lastname is required.">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">Email <span class="text-danger">*</span></label>
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email " required="required" data-error="Valid email is required.">
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="file">Attachment</label>
                                        <input type="file" id="form_need" name="attachment" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_message">Message <span class="text-danger">*</span></label>
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Write your message here." rows="4" required="required" data-error="Please, leave us a message."></textarea>
                                    </div>
                                </div>


                                <div class="col-md-12 mt-3">                      
                                    <input type="submit" class="btn btn-success btn-send  pt-2 btn-block" value="Send Message" >
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
  
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</html>