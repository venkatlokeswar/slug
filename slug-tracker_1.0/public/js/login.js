$(function(){
       $('#login-button').click(function(){
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
           var userLoggedIn = $.post("/login",{
               userName : userName,
               passWord : passWord
           });
       }
    });
    
    
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
