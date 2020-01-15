<footer class="footer" style="background-color: #222;
    color: #ccc;
    padding: 60px 0 30px">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <h6 class="text-uppercase font-weight-bold">Welcome to your day, your way.</h6>
                <p>Wedding Planning Has Never Been Easier. </p>
                <p> Sign up for WEDLIO and get access to your all-in-one wedding planner </p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h6 class="text-uppercase font-weight-bold">Contact</h6>
                <p>warnasiri1996@gmail.com
                    <br />chethaniwanigasekara@gmail.com
                    <br />kasunharshana@gmail.com
                    <br />076 9319680</p>
            </div>
        </div>
        <div class="footer-copyright text-center">© 2019 Copyright:
            WEDLIO</div>
</footer>


<script src="<?php echo base_url('assets/jquery-ui-1.12.1/external/jquery/jquery.js'); ?>"></script>
<!--load jquery ui js file-->
<script src="<?php echo base_url('assets/jquery-ui-1.12.1/jquery-ui.js'); ?>"></script>
<script type="text/javascript">
$(function() {
    $("#dob").datepicker();
});
</script>



<script>
function validate() {
    if (document.getElementById("inputpassword").value != document.getElementById("confirmpassword").value) {
        alert("Passwords Do Not Match");
        return false;
    }

}
</script>

</body>

</html>