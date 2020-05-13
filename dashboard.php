<!DOCTYPE html>
<html lang="en">
<?php
    include('include/head.html');
    include('include/navbar.php');
?>

<div id="content" class="p-4 p-md-5 pt-5">
    <div class="ui container">
        <form class="ui form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <!--START YOUR CODE BELOW FROM HERE-->
            <!--Uncomment the sample code below to see what happens or just delete it.-->
            <h1 class="">{TITLE} ex: Add Student</h1>
            <!--                <div class="ui segment compact">
                                <div class="fields ui">
                                    <div class="field">
                                        <label>First Name</label>
                                        <input type="text" placeholder="First Name">
                                    </div>
                                    <div class="field ui">
                                        <label>Middle name</label>
                                        <input type="text" placeholder="Middle Name">
                                    </div>
                                    <div class="field ui">
                                        <label>Last Name</label>
                                        <input type="text" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="ui divider"></div>
                                <h4>Parents Information</h4>
                                <div class="fields">
                                    <div class="field">
                                        <label>First Name</label>
                                        <input type="text" placeholder="First Name">
                                    </div>
                                </div>
                            </div>-->

            <!--END YOUR CODE ABOVE FROM HERE-->
        </form>
    </div>
</div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>