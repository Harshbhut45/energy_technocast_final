

jQuery(document).ready(function($){
    $('.form_click_inner1').hide();

    $('#country1').change(function () {
        var countryCode = $(this).val();
        $('.form_click_inner1').show();
        $('#' + $(this).val()).hide();
        if (countryCode) {
            $('#cnumber2').val(countryCode);
        }
    });
});

window.setdata = function()
{
    var select = document.getElementById('country');
 
    var option = select.options[select.selectedIndex];
    var datacode = option.dataset.ccode;
    var datager = option.dataset.consernname;
    console.log("option :: ", option);
    if (datacode == "+53")
    {
       
        $('.form_click_inner1').hide();
    }
    else
    {
       
        $('.form_click_inner1').show();
        document.getElementById('show_exploreccode').innerText  = option.dataset.ccode;
        document.getElementById('show_explorename').innerText  = option.dataset.consernname;
        document.getElementById('show_explorennumber').innerText  = option.dataset.nnumber;
    }
    return false;
}

window.setdata1 = function()
{
    var select1 = document.getElementById('state1');
    
    var option1 = select1.options[select1.selectedIndex];
    document.getElementById('show_exploreccode').innerText = option1.dataset.ccode1;
    document.getElementById('show_explorename').innerText = option1.dataset.consernname1;
    document.getElementById('show_explorennumber').innerText  = option.dataset.nnumber;

    return false;
}
