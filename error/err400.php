<? include_once $_SERVER["DOCUMENT_ROOT"]."/midnight/error/inc/header.php"; ?>
<? include_once $_SERVER["DOCUMENT_ROOT"]."/midnight/shared/public/classes/AdminRoute.php"; ?>
<?

?>
<script>
    $(document).ready(function(){
        $(".jGoback").click(function(){
            history.back();
        });
    });

</script>
    <!-- styles
    ================================================== -->

    <section id="styles" class="s-sub" >
        <div class="row narrow section-intro add-bottom text-center">

            <div class="col-twelve tab-full">

                <p><br/></p>
                <div style="background: #555555; border-radius: 15px; padding: 10px;">
                    <h1 class="display-1" style="color:white; margin:0;">400</h1>
                </div>

                <h3>비정상적인 요청입니다.</h3>

                <p class="lead">
                    비정상적인 요청으로 인해 연결이 거부되었습니다.
                    <br/>
                    계속해서 동일한 문제가 발생할 경우, 관리자에게 문의바랍니다.
                </p>

                <a href="#" class="jGoback btn btn--primary">이전으로</a>
            </div>

        </div>

    </section>
    <div style="background: #555555; padding: 10px;" class="text-center">
        <img src="../images/logo.png" alt="Homepage" style="height: 20px;" />
    </div>
<? include_once $_SERVER["DOCUMENT_ROOT"]."/midnight/error/inc/footer.php"; ?>