

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=devic-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-wa-compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        
    
    </head>
    <body>
        <div class="container"><!--- start of container-->
            <h1>Get in touch!</h1>
            <div id="error"><?php echo $error.$successMessage; ?></div>

            <form method="post"><!--- start of the form-->
                <fieldset class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address*">
                    <small class="text-muted">We will never share your email with anyone else.</small>
                </fieldset>

                <fieldset class="form-group">
                    <input type="text" class="form-control" id="subject" name="subject">
                </fieldset>

                <fieldset class="form-group">
                    <textarea class="form-control" id="content" name="content" rows="3"></textarea></textarea>
                </fieldset>

                <button type="submit" id="submit" class="btn btn-primary">Submit</button>

            </form><!--- end of the form-->

        </div><!---end of conatiner div-->
    </body>
</html>
