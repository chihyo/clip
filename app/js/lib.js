function checkJoin(frm) {

    // var re_id = /^[a-z0-9_-]{3,16}$/; // 아이디 검사식
    var re_pw = /^[a-z0-9_-]{6,18}$/; // 비밀번호 검사식
    var re_id = /^\d{3}\d{4}\d{4}$/; // 전화번호 검사식
    var re_birth = /^\d{6}$/;

    if (frm.name.value == "") {
        alert("이름을 입력해주세요.");
        frm.name.focus();
        return false;
    }
    else if (frm.birth.value == "") {
        alert("생년월일을 입력해주세요.");
        frm.birth.focus();
        return false;
    }
    else if (frm.id.value == "") {
        alert("아이디(전화번호)를 입력해주세요.");
        frm.id.focus();
        return false;
    }
    else if (frm.pin.value == "") {
        alert("비밀번호를 입력해주세요.");
        frm.pin.focus();
        return false;
    }
    else if (frm.pin2.value == "") {
        alert("비밀번호확인란을 입력해주세요.");
        frm.pin2.focus();
        return false;
    }
    else if (re_pw.test(frm.pin.value) != true) {
        alert("비밀번호를 재대로 입력해주세요.");
        frm.pin.focus();
        return false;
    }
    else if(frm.pin.value != frm.pin2.value) {
        alert("비밀번호가 일치하지 않습니다.");
        frm.pin.focus();
        return false;
    }
    else if (re_id.test(frm.id.value) != true) {
        alert("아이디를 재대로 입력해주세요.");
        frm.id.focus();
        return false;
    }
    else if (re_birth.test(frm.birth.value) != true) {
        alert("생년월일은 정확히 입력해주세요.");
        frm.id.focus();
        return false;
    }
    else {
        //제이커리 사용
        // $("#business").on("click",function() {
        //     $("#grade").val("10");
        // })
        // $("#user").on("click",function() {
        //     $("#grade").val("1");
        // })

        //자바스크립트 사용(joinForm.php에서 버튼 타입을 버튼으로 바꾸고 매개변수를 추가하여 제작)
        frm.submit();

    }
}


function randomnum() {
    var result=Math.floor(Math.random()*1000000)+100000;
    if(result>1000000) {
        result=result-100000;
    }
        $(".dlswmd_num").val(result);
}

function checknum() {
    alert("인증번호 확인이 완료되었습니다.");
}