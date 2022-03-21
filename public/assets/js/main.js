$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function step_one(){
    $("#MyForm").hide();
    $("#MyForm2").show();
}
function step_two(){
    $("#MyForm2").hide();
    $("#div3").show();
    setTimeout(() => {
        window.location.href='https://www.caryaati.com'
    }, 5000);
}
