// tombol untuk memunculkan popup
function open_rewardsBox(){
	$('.rewardsBox').show();
	$('.rewardsHome').hide();
}
function open_reward_confirmation(ag) {
    var rewardImg = $(ag).attr("src");
    $('.reward_confirmation').show();
    $('#myRewardImg').attr('src',rewardImg);
}
function open_account_login(){
	$('.open_login').show();
	$('.reward_confirmation').hide();
}
function open_facebook(){
	$('.login-facebook').show();
	$('.open_login').hide();
}
function open_twitter(){
	$('.login-twitter').show();
	$('.open_login').hide();
}

// tombol untuk menutup popup
function close_reward_confirmation(){
	$(".welcome").hide()
	$(".reward_confirmation").hide()
}
function close_account_login(){
	$(".open_login").hide()
}
function tutup_facebook(){
	$('.login-facebook').hide()
	$('.open_login').show();
}
function tutup_twitter(){
	$('.login-twitter').hide()
	$('.open_login').show();
}
