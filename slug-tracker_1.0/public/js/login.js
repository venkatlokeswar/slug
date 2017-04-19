$(function(){
       $('.login-form').submit(function(e){
           e.preventDefault();
        var userName = $('#username').val();
        var passWord = $('#password').val();    
        
        var validated = false;
        
        var validateUserName = validateEmail(userName);
        
        if(validateUserName === 0){
            $('#input-username').addClass('has-error');
            $('#username').val('');
            showError('#error-username', 'Please enter E-mail'); 
            validated = false;
        }
        else if(!validateUserName){
            $('#input-username').addClass('has-error');
            $('#username').val('');
            showError('#error-username', 'Enter valid E-mail format');
            validated = false;
        }
        else{
            validated = true;
        }
        
        var validatePassWord = validatePassword(passWord);
        
        if(!validatePassWord){
            $('#input-password').addClass('has-error');
            $('#password').val('');
            showError('#error-password', 'Please enter password'); 
            validated = false;
        }
        
        if(validated){
            var _token = $('meta[name=csrf-token]').attr('content');
             $.ajax({
                type: "POST",
                url: "/login",
                data: $(this).serialize(),
                success: function (data) {
                  if(data.status === 'success'){
                      window.location.href ="/dashboard";
                  }
                  else{
                    loginError("Invalid username or password")
                  }
                },
                error: function (data) {
                    loginError("Something went wrong. Please try again")
                }
              });
       }

    });
    var loginError = function(message){
            $('#invalid-credientials').find('span').text(message);
            $('#invalid-credientials').slideDown(300);
            $('#username').val(data.username);
    }
    
    var validateEmail = function(userName){
        var regex = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;
        if(regex.test(userName)){
            return true;
        }
        else if(userName.trim().length === 0){
            return 0;
        }
    };
    
    var validatePassword = function(password){
        if(password.trim().length === 0){
            return false;
        }
        return true;
    }
    
    var showError = function(selector, errorMessage){
        $(selector).slideDown(200).find('p').html(errorMessage);
    };
    
    var hideError = function(selector){
        $(selector).slideUp(200);
    };
    
    $('#username').focus(function(){
        $('#input-username').removeClass('has-error');
        hideError('#error-username');
    });
    
    $('#password').focus(function(){
        $('#input-password').removeClass('has-error');
        hideError('#error-password');
    });
    
    
});
