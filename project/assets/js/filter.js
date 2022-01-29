
$(document).ready(function(){
    filter_data();
function filter_data(){
    $('.filter_data').html('div id="loading" style=""></div>');
    var action= 'fetch_data';
    var sex= get_filter('sex');
    var date_of_birth= get_filter('date_of_birth');
    var disability= get_filter('disability');
    var vacancy = get_filter('vacancy');
    var Secondary_Qualification = get_filter('Secondary_Qualification');
    var Secondary_year = get_filter('Secondary_year');
    var Tertaily= get_filter('Tertaily');
    var Tertaily_institution = get_filter('Tertaily_institution');
    var Tertaily_Qualification = get_filter('Tertaily_Qualification');
    var Tertaily_year = get_filter('Tertaily_year');
    
    $.ajax({
        url: "./fetch_data.php",
        method:"POST",
        data:{
            action:action,sex:sex,date_of_birth:date_of_birth,disability:disability,vacancy:vacancy,Secondary_Qualification :Secondary_Qualification , Secondary_year: Secondary_year,Tertaily:Tertaily,Tertaily_institution:Tertaily_institution,Tertaily_Qualification:Tertaily_Qualification,Tertaily_year:Tertaily_year
        }, 
        success:function(data){
            $('.filter_data').html(data);
        }
    });
    
}
function get_filter(class_name){
    var filter = [];
    $('.' +class_name+':checked').each(function(){
        filter.push($(this).val());
    });
    return filter;
}
$('.common_selector').click(function()
{
    filter_data();
})
});
