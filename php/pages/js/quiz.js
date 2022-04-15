let quizAnswer = "";

    function quizView(view){
        $(".quiz__num").text(view.quizID);
        $(".quiz__ask").text(view.quizAsk);
        $("#select1 + span").text(view.quizChoice1);
        $("#select2 + span").text(view.quizChoice2);
        $("#select3 + span").text(view.quizChoice3);
        $("#select4 + span").text(view.quizChoice4);
        $(".layer > p").text(view.quizComment);
        quizAnswer = view.quizAnswer;
    }


    //정답 체크
    function quizCheck(){
        let selectCheck = $(".quiz__selects input:checked").val();

        //정답을 체크 안했으면
        if(selectCheck == null || selectCheck == ''){
            alert("정답을 체크해주세요!!!")
            
        } else {
            $(".quiz__btn .next").fadeIn();  // <-> fadeOut , fadeToggle
            $(".quiz__selects input").attr("disabled", true);
            //정답을 체크 했으면
            if(selectCheck == quizAnswer){
            //정답
            $(".quiz__selects #select"+quizAnswer).addClass("correct");
            } else {
            //오답 
            $(".quiz__selects #select"+selectCheck).addClass("incorrect");
            $(".quiz__selects #select"+quizAnswer).addClass("correct");
            }
        }
    }
    

    //문제 데이터 가져오기
    function quizData(){
        let quizSubject = $("#quizSubject").val();
        $.ajax({
            url: "../quiz/quizInfo.php",
            method: "POST",
            data: {"quizSubject": quizSubject},
            dataType: "json",
            success: function(data){
                console.log(data.quiz);
                quizView(data.quiz);
            },
            error: function(reqeust, status, error){
                console.log('reqeust' + reqeust);
                console.log('status' + status);
                console.log('error' + error);
            }
        })
    }
    quizData();

//과목 선택
$("#quizSubject").change(function(){
        quizData();
    })

    //정답 확인
    $(".quiz__btn .confirm").click(function(){
        //정답을 클릭했는지 안했는지 판단
        quizCheck();

        
        $(".quiz__btn .comment").fadeIn();
        // $(".quiz__btn .next").slideDown();   // <-> slideUp , slideToggle
        // $(".quiz__btn .next").show();   // <-> hide() , Toggle()
    });

    //다음 문제 버튼
    $(".quiz__btn .next").click(function(){
        quizData();
        $(".quiz__selects input").prop("checked", false);
        $(".quiz__btn .next").fadeOut();
        // $(".quiz__btn .comment").fadeOut();
        $(".quiz__selects input").removeClass("correct");
        $(".quiz__selects input").removeClass("incorrect");
        $(".quiz__selects input").attr("disabled", false);     
        // $(".quiz__selects input").prop("checked", false);
    });

    // let quizHeight = "";
    // $(window).scroll(function(){
    //     let quizHeight = window.scrollY + 250;
    // $(".layer").css("top", quizHeight+"px");
    // });
    $(".quiz__btn .comment").click(function(){
        $(".layer").fadeIn();
        $(".layer_bg").fadeIn();
    });
    $(".layer .close").click(function(){
        $(".layer").fadeOut();
        $(".layer_bg").fadeOut();
    })