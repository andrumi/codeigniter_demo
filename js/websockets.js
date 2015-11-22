// Make connection when DOM has finished loading
$(document).ready(ConnectToChat);
//------------------------------------------------------------------------------
function ConnectToChat()
{
    Pusher.log = function(message) {
        if (window.console && window.console.log) {
            window.console.log(message);
        }
    };
// Open connection 
    $('#postit').attr('disabled', 'disabled');
    $('#debugmessage').text('Connecting...');


// ### My Pusher credentials, get your own!###
    $key = '1079a5409ca8978f452e';
    $secret = 'b4cc0a03f115d2856c89';
    $app_id = '156028';
    var pusher = new Pusher($key, $secret, $app_id);


// Check connection status
    pusher.connection.bind('connected', function()
    {
        $('#postit').removeAttr('disabled');
        $('#debugmessage').text('Connected!').fadeOut(2000);
    });

// Create channel 
    var myChannel = pusher.subscribe('my_channel');

// Bind event to function
    myChannel.bind('new_message',function(data)
        {   $('#debugmessage').text('new-message!').fadeOut(2000);
            $('#messages').append(data);
            $("#messages").prop({ scrollTop: $("#messages").prop("scrollHeight") });
        });

// Bind enter key to post message
    $('#yourmessage').bind('keypress', function(e) {
        if(e.keyCode==13){
            SendNewMessage();
        }
    });

// Bind button click to post message
    $('#postit').click(SendNewMessage);

}

//------------------------------------------------------------------------------
function SendNewMessage()
{
    // Read name and message from form
    var name = $('#name').val();
    var message = $('#yourmessage').val();
    var connecting = $('#postit').prop('disabled');

    // Validate input
    if(name=='')
        name="Anonymous";

    // Are we still connecting?
    if(connecting)
        exit;

    if(message!='')
    {
        // Clear message
        $('#yourmessage').val('');


        // Send message to server
        var request = $.ajax({
            // ### Your URL Here StudentNo/YourFilesFolder/push-event.php ###
            url: "http://mi-linux.wlv.ac.uk/~1228264/codeigniter/js/push-event.php",
            type: "POST",
            data: ({name : name, message : message, key : $key, secret : $secret, app_id : $app_id})
        });
        // Debug
        request.done(function( msg ) {
            $('#debugmessage').show();
            $('#debugmessage').text("Message sent: " + message).fadeOut(2000);
        });

        request.fail(function( jqXHR, textStatus ) {
            $('#debugmessage').show();
            $('#debugmessage').text('Request failed: ' + textStatus);
        });

    }
    //Refocus on text input ready for next message
    $('#yourmessage').focus();

}