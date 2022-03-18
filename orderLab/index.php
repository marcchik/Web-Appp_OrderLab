<? require_once('template/header.php'); ?>
<style>
    body {
        /*background: url(template/images/main.png) no-repeat center center fixed;*/

    }
</style>
<main>
    <div class="container">
        <div class="row">

            <!-- Spendings Start -->
            <div class="col-lg-6">
                <div class="col-12 col-lg-auto h-100 pb-4 px-4 pt-0 p-lg-0">
                    <div class="min-h-100  d-flex justify-content-center align-items-center py-5">
                        <div class="sw-lg-50 px-5">
                            <div class="sh-11">
                                <a href="/">
                                    <div class="logo-default"></div>
                                </a>
                            </div>
                            <div class="mb-5">
                                <h2 class="cta-1 mb-0 text-primary">Welcome,</h2>
                                <h2 class="cta-1 text-primary">let's get started!</h2>
                            </div>
                            <div class="mb-5">
                                <p class="h6">Please use your credentials to login.</p>
                                <p class="h6">
                                    If you are not a member, please
                                    <a href="register">register</a>
                                    .
                                </p>
                            </div>
                            <div>
                                <form id="loginForm" class="tooltip-end-bottom" novalidate="novalidate"">
                                    <div class="mb-3 filled form-group tooltip-end-top">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="cs-icon cs-icon-email"><path d="M18 7L11.5652 10.2174C10.9086 10.5457 10.5802 10.7099 10.2313 10.7505C10.0776 10.7684 9.92238 10.7684 9.76869 10.7505C9.41977 10.7099 9.09143 10.5457 8.43475 10.2174L2 7"></path><path d="M14.5 4C15.9045 4 16.6067 4 17.1111 4.33706C17.3295 4.48298 17.517 4.67048 17.6629 4.88886C18 5.39331 18 6.09554 18 7.5L18 12.5C18 13.9045 18 14.6067 17.6629 15.1111C17.517 15.3295 17.3295 15.517 17.1111 15.6629C16.6067 16 15.9045 16 14.5 16L5.5 16C4.09554 16 3.39331 16 2.88886 15.6629C2.67048 15.517 2.48298 15.3295 2.33706 15.1111C2 14.6067 2 13.9045 2 12.5L2 7.5C2 6.09554 2 5.39331 2.33706 4.88886C2.48298 4.67048 2.67048 4.48298 2.88886 4.33706C3.39331 4 4.09554 4 5.5 4L14.5 4Z"></path></svg>
                                        <input class="form-control" placeholder="Email" name="email">
                                    </div>
                                    <div class="mb-3 filled form-group tooltip-end-top">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="cs-icon cs-icon-lock-off"><path d="M5 12.6667C5 12.0467 5 11.7367 5.06815 11.4824C5.25308 10.7922 5.79218 10.2531 6.48236 10.0681C6.73669 10 7.04669 10 7.66667 10H12.3333C12.9533 10 13.2633 10 13.5176 10.0681C14.2078 10.2531 14.7469 10.7922 14.9319 11.4824C15 11.7367 15 12.0467 15 12.6667V13C15 13.9293 15 14.394 14.9231 14.7804C14.6075 16.3671 13.3671 17.6075 11.7804 17.9231C11.394 18 10.9293 18 10 18V18C9.07069 18 8.60603 18 8.21964 17.9231C6.63288 17.6075 5.39249 16.3671 5.07686 14.7804C5 14.394 5 13.9293 5 13V12.6667Z"></path><path d="M11 15H10 9M13 6V5C13 3.34315 11.6569 2 10 2V2C8.34315 2 7 3.34315 7 5V10"></path></svg>
                                        <input class="form-control pe-7" name="password" type="password" placeholder="Password">
                                        <a class="text-small position-absolute t-3 e-3" href="#">Forgot?</a>
                                    </div>
                                    <button type="submit" class="btn btn-lg btn-primary" onclick="submitForm()">Login</button>
                                </form>

                                <script>
                                    function submitForm() {
                                        let url = 'BD/form-login.php'; // здесь указываем адрес PHP файла
                                        let formData = $('.tooltip-end-bottom').serialize();
                                        console.log(formData);


                                        jQuery.ajax({
                                            async: false,
                                            url: url,
                                            method: 'post',
                                            dataType: 'json',
                                            data: formData
                                        });

                                        location = url + "?" + formData;
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Spendings End -->

            <!-- Recent Ratings Start -->
            <div class="col-lg-6" style="padding: 6rem 3rem 4rem 0rem;">
                <img width="100%" height="auto" src="template/images/main.png">
            </div>
            <!-- Recent Ratings End -->
        </div>
    </div>
</main>

<?

    if ($_REQUEST['status'] == "success") {
        echo "<script>alert('Регистрация прошла успешно'); location.href='/orderLab';</script>";
    } elseif ($_REQUEST['status'] == "duplicate") {
        echo "<script>alert('Такой пользователь уже существует'); location.href='/orderLab';</script>";
    } elseif ($_REQUEST['status'] == "error") {
        echo "<script>alert('Упс.. Произошла ошибка!'); location.href='/orderLab';</script>";
    }
?>

<? require_once('template/footer.php'); ?>
