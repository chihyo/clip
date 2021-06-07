
$(document).ready(function() {
    $('.tabs .tab-title a').on('click', function(e)  {

        var currentAttrValue = $(this).attr('href');

        // Show/Hide Tabs
        $('.tabs ' + currentAttrValue).fadeIn(400).siblings().hide();

        // Change/remove current tab to active
        $(this).parent('li').addClass('active').siblings().removeClass('active');

        e.preventDefault();
    });

});





function joinMemberCard(member, card){
    data = { "member":member, "card":card, "outlet" : "joinMemberCard" };

    $.ajax({
        type: "POST",
        url:"database/outlet.php",
        data:data
        }).done(function(data){
                alert('추가되었습니다.');
                console.log(data);
        });
}