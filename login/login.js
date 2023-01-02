jQuery("ready", function(){
    $("#phaslo").on("click",function(){
        var ww = $("#haslo").attr("type")
        if (ww == "password") {
            $("#haslo").attr("type", "text")
            $(this).attr("class", "fa-solid fa-eye-slash")
        }
        else {
            $("#haslo").attr("type", "password")
            $(this).attr("class", "fa-solid fa-eye")
        }
    });
    $("#haslo").on("change", function(){
        var strength = 0;
        var passlength = parseInt(this.value.length / 5);
        var specialcharacters = 0;
        var numbers = 0;
        let spChars = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;
        if (/\d/.test(this.value) == true) {
            numbers = 1;
        }
        if (spChars.test(this.value) == true) {
            specialcharacters = 2;
        }
        var strength = parseFloat(passlength + specialcharacters + numbers) * 10;
        $("#passwordstrength").attr("aria-valuenow", strength + "%");
        $("#passwordstrength").css("width", strength + "%");
        if (strength <= 30) {
            $("#passwordstrength").attr("class", "bg-danger");
        } else if (strength > 30 && strength <= 70 ) {
            $("#passwordstrength").attr("class", "bg-warning");
        } else if (strength > 70) {
            $("#passwordstrength").attr("class", "bg-success");
        }
    });
    $("#profilepic").on("change", function() {
        const file = this.files[0];
        console.log(file);
        if (file){
          let reader = new FileReader();
          reader.onload = function(event){
          $('#podglad').attr('src', event.target.result);
          }
          reader.readAsDataURL(file);
        }
    })
})