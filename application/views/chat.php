<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Chat-Example | CodeIgniter</title>
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

        
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
    <!-- http://bootsnipp.com/snippets/4jXW -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/chat.css" />
    
    
    <script type="text/javascript">   
        $( document ).ready ( function () {
            
            $('#nickname').keyup(function() {
                var nickname = $(this).val();
                
                if(nickname == ''){
                    $('#msg_block').hide();
                }else{
                    $('#msg_block').show();
                }
            });
            
            // initial nickname check
            $('#nickname').trigger('keyup');
        });
        
        
    </script>

</head>
<body>



<div class="container">
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <span class="glyphicon glyphicon-comment"></span> Chat
            </div>
            <div class="panel-body">
                <ul class="chat" id="received">
                    
                </ul>
            </div>
            <div class="panel-footer">
                <div class="clearfix">
                    <div class="col-md-3">
                        <div class="input-group">
                            <span class="input-group-addon">
                                Nickname:
                            </span>
                            <input id="nickname" type="text" class="form-control input-sm" placeholder="Nickname..." />
                        </div>
                    </div>
                    <div class="col-md-9" id="msg_block">
                        <div class="input-group">
                            <input id="message" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                            <span class="input-group-btn">
                                <button class="btn btn-warning btn-sm" id="submit">Send</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



</body>
</html>